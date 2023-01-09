<?php

namespace App\Modules\UserSettings\Http;

use App\Http\Controllers\Controller;
use App\Modules\Confirmation\Data\ConfirmationMethod;
use App\Modules\Confirmation\Exceptions\InvalidCodeException;
use App\Modules\Settings\Requests\UserSettingUpdateRequest;
use App\Modules\UserSettings\Data\UpdatingUserSettingDto;
use App\Modules\UserSettings\Data\UserSetting;
use App\Modules\UserSettings\Services\UserSettingsService;

class UserSettingsController extends Controller
{
    public function __construct(private readonly UserSettingsService $userSettingsService)
    {
    }

    /**
     * @throws InvalidCodeException
     */
    public function update(UserSettingUpdateRequest $request)
    {
        $this->userSettingsService->setUserSetting(new UpdatingUserSettingDto(
            $this->getUser()->id,
            UserSetting::fromString($request->input('user_setting')),
            $request->input('new_value'),
            $request->input('confirmation_id'),
            ConfirmationMethod::fromString($request->input('confirmation_method')),
            $request->input('code'),
        ));
    }
}
