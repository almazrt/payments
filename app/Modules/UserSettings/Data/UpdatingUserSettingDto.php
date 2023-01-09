<?php

namespace App\Modules\UserSettings\Data;

use App\Modules\Confirmation\Data\ConfirmationMethod;

final class UpdatingUserSettingDto
{
    public function __construct(
        public int                $userId,
        public UserSetting        $userSetting,
        public string             $newValue,
        public int                $confirmationId,
        public ConfirmationMethod $confirmationMethod,
        public string             $code,
    )
    {
    }
}
