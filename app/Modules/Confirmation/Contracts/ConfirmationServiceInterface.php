<?php

namespace App\Modules\Confirmation\Contracts;

use App\Modules\Confirmation\Data\ConfirmationAction;

interface ConfirmationServiceInterface
{
    /**
     * Отправить пользователю код подтверждения
     * @param int $confirmationId Id подтверждения
     */
    public function sendCode(int $confirmationId): void;

    /**
     * Проверить код подтверждения
     * @param int $confirmationId Id подтверждения
     * @param string $code Код подтверждения
     * @return bool True - Код подтверждения совпадает, False - не совпадает
     */
    public function checkCode(int $confirmationId, string $code): bool;

    /**
     * Создать подтверждение
     * @param ConfirmationAction $confirmationAction Действие, на которое нужно получить подтверждение
     * @param int $userId Id пользователя
     * @return int Id подтверждения
     */
    public function createConfirmation(ConfirmationAction $confirmationAction, int $userId): int;
}
