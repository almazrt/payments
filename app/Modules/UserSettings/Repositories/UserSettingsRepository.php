<?php

namespace App\Modules\UserSettings\Repositories;

use App\Modules\UserSettings\Data\UserSetting;

class UserSettingsRepository
{
    public function updateUserSetting(int $userId, UserSetting $userSetting, string $newValue): void
    {
        // Запись в БД
    }
}
