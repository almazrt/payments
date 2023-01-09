<?php

namespace App\Modules\UserSettings\Services;

use App\Modules\Confirmation\Exceptions\InvalidCodeException;
use App\Modules\Confirmation\Factories\ConfirmationServiceFactory;
use App\Modules\UserSettings\Data\UpdatingUserSettingDto;
use App\Modules\UserSettings\Repositories\UserSettingsRepository;

class UserSettingsService
{
    public function __construct(
        private readonly UserSettingsRepository     $userSettingsRepository,
        private readonly ConfirmationServiceFactory $confirmationServiceFactory,
    )
    {
    }

    /**
     * @throws InvalidCodeException
     */
    public function updateUserSetting(UpdatingUserSettingDto $updatingUserSettingDto): void
    {
        $confirmationService = $this->confirmationServiceFactory->build($updatingUserSettingDto->confirmationMethod);
        if (!$confirmationService->checkCode($updatingUserSettingDto->confirmationId, $updatingUserSettingDto->code)) {
            throw new InvalidCodeException;
        }

        $this->userSettingsRepository->updateUserSetting(
            $updatingUserSettingDto->userId,
            $updatingUserSettingDto->userSetting,
            $updatingUserSettingDto->newValue,
        );
    }
}
