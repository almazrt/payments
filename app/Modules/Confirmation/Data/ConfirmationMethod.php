<?php

namespace App\Modules\Confirmation\Data;

use App\Support\Traits\Enums\Findable;

enum ConfirmationMethod
{
    use Findable;

    case Email;
    case Sms;
    case Telegram;
}
