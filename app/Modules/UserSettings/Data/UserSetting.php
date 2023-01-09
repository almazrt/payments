<?php

namespace App\Modules\UserSettings\Data;

use App\Support\Traits\Enums\Findable;

enum UserSetting
{
    use Findable;

    case Codeword;
    case Currency;
}
