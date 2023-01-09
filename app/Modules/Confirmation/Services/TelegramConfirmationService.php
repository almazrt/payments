<?php

namespace App\Modules\Confirmation\Services;

use App\Modules\Confirmation\Contracts\ConfirmationServiceInterface;
use App\Modules\Confirmation\Data\ConfirmationAction;

class TelegramConfirmationService implements ConfirmationServiceInterface
{
    /**
     * @inheritDoc
     */
    public function sendCode(int $confirmationId): void
    {
        // TODO: Implement sendCode() method.
    }

    /**
     * @inheritDoc
     */
    public function checkCode(int $confirmationId, string $code): bool
    {
        // TODO: Implement checkCode() method.
    }

    /**
     * @inheritDoc
     */
    public function createConfirmation(ConfirmationAction $confirmationAction, int $userId): int
    {
        // TODO: Implement createConfirmation() method.
    }
}
