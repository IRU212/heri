<?php

namespace App\ValueObjects\User;

use App\ValueObjects\Common\PasswordValue\PasswordValueObject;

final class Password extends PasswordValueObject
{
    /** @var string name */
    protected const NAME = 'password';

    /** @var string attribute */
    protected const ATTRIBUTE_NAME = 'パスワード';

    /**
     * validation
     *
     * @return string
     */
    public static function rule(): string
    {
        return 'required|string|min:5|max:30';
    }

    /**
     * validation message
     *
     * @return array
     */
    public function message(): array
    {
        return [];
    }
}
