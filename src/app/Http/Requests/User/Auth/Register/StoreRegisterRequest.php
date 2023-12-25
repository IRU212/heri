<?php

namespace App\Http\Requests\User\Auth\Register;

use App\Http\Requests\Common\BaseRequest;
use App\ValueObjects\User\Email;
use App\ValueObjects\User\Name;
use App\ValueObjects\User\Password;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

final class StoreRegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        return [
            'name' => Name::rule(),
            'email' => Email::rule(),
            'password' => Password::rule()
        ];
    }
}
