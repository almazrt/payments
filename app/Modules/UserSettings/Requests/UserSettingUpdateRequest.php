<?php

namespace App\Modules\Settings\Requests;

use App\Modules\Confirmation\Data\ConfirmationMethod;
use Illuminate\Foundation\Http\FormRequest;

class UserSettingUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
