<?php

namespace App\ValueObjects\User;

use App\ValueObjects\Common\StringValue\StringValueObject;

final class Name extends StringValueObject
{
    /** @var string name */
    protected const NAME = 'name';

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
