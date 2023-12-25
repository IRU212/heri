<?php

namespace App\ValueObjects\User;

use App\ValueObjects\Common\IdValue\IdValueObject;

final class Id extends IdValueObject
{
    /** @var string name */
    protected const NAME = 'id';

    /**
     * validation
     *
     * @return string
     */
    public static function rule(): string
    {
        return 'required|int';
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
