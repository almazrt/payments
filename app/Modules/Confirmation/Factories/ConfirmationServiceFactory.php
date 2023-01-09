<?php

namespace App\Modules\Confirmation\Factories;

use App\Modules\Confirmation\Contracts\ConfirmationServiceInterface;
use App\Modules\Confirmation\Data\ConfirmationMethod;
use App\Modules\Confirmation\Services\EmailConfirmationService;
use App\Modules\Confirmation\Services\SmsConfirmationService;
use App\Modules\Confirmation\Services\TelegramConfirmationService;
use Illuminate\Container\Container;

class ConfirmationServiceFactory
{
    public function __construct(private readonly Container $container)
    {
    }

    public function build(ConfirmationMethod $confirmationMethod): ConfirmationServiceInterface
    {
        return $this->container->make(match ($confirmationMethod) {
            ConfirmationMethod::Email => EmailConfirmationService::class,
            ConfirmationMethod::Sms => SmsConfirmationService::class,
            ConfirmationMethod::Telegram => TelegramConfirmationService::class,
        });
    }
}
