<?php

namespace App\ValueObjects\User;

use App\ValueObjects\Common\StringValue\StringValueObject;

final class Email extends StringValueObject
{
    /** @var string name */
    protected const NAME = 'email';

    /**
     * validation
     *
     * @return string
     */
    public static function rule(): string
    {
        return 'required|string|email';
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
