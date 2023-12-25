<?php

namespace App\ValueObjects\Common\BaseValue;

abstract class BaseValueObject implements BaseValueObjectInterface
{
    /** @var mixed 値 */
    protected mixed $value;

    /**
     * 値がnullかどうか返します
     *
     * @return bool
     */
    public function isNull(): bool
    {
        return \is_null($this->value);
    }
}
