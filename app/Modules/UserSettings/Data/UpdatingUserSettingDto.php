<?php

namespace App\Modules\UserSettings\Data;

use App\Modules\Confirmation\Data\ConfirmationMethod;

final class UpdatingUserSettingDto
{
    public function __construct(
        public readonly int                $userId,
        public readonly UserSetting        $userSetting,
        public readonly string             $newValue,
        public readonly int                $confirmationId,
        public readonly ConfirmationMethod $confirmationMethod,
        public readonly string             $code,
    )
    {
    }
}
