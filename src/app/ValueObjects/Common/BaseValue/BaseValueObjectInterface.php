<?php

namespace App\ValueObjects\Common\BaseValue;

interface BaseValueObjectInterface
{
    /**
     * 作成します
     *
     * @param string|null $value
     * @return static
     */
    public static function fromNative(mixed $value);

    /**
     * 値がnullかどうか返します
     *
     * @return bool
     */
    public function isNull(): bool;

    /**
     * validation message
     *
     * @return array
     */
    public function message(): array;
}
