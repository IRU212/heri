<?php

namespace App\ValueObjects\User;

use App\ValueObjects\Common\StringValue\StringValueObject;

final class Email extends StringValueObject
{
    /** @var string name */
    protected const NAME = 'email';

    /** @var string attribute */
    protected const ATTRIBUTE_NAME = 'メールアドレス';

    /**
     * validation
     *
     * @return string
     */
    public static function rule(): string
    {
        return 'required|string|email|unique:users';
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
