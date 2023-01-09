<?php

namespace App\Modules\Confirmation\Data;

use App\Support\Traits\Enums\Findable;

enum ConfirmationAction
{
    use Findable;

    case ChangeOwnUserSettings;
    case Pay;
}
