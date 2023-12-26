<?php

namespace App\ValueObjects\Common\StringValue;

use App\ValueObjects\Common\BaseValue\BaseValueObject;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use InvalidArgumentException;
use LogicException;

abstract class StringValueObject extends BaseValueObject implements StringValueObjectInterface
{
    /** @var string name */
    protected const NAME = '';

    /** @var string attribute */
    protected const ATTRIBUTE_NAME = '';

    /**
     * 初期化処理
     *
     * @param string|null $value
     */
    protected function __construct(string|null $value)
    {
        if (static::NAME === '') {
            throw new LogicException(static::class . 'のNAMEを設定してください。');
        }
        if (static::ATTRIBUTE_NAME === '') {
            throw new LogicException(static::class . 'のATTRIBUTE_NAMEを設定してください。');
        }
        try {
            Validator::validate(
                [self::getName() => $value],
                [self::getName() => static::rule()]
            );
        } catch (ValidationException $e) {
            throw new InvalidArgumentException($e->getMessage());
        }
        $this->value = $value;
    }

    /**
     * 作成します
     *
     * @param string|null $value
     * @return static
     */
    public static function fromNative(mixed $value)
    {
        return new static($value);
    }

    /**
     * nameを取得する
     *
     * @return string
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * attributeを取得する
     *
     * @return string
     */
    public static function getAttributeName(): string
    {
        return static::ATTRIBUTE_NAME;
    }

    /**
     * valueを取得する
     *
     * @return string|null
     */
    public function getValue(): string|null
    {
        return $this->value;
    }

    /**
     * バリテーションルールを返します
     *
     * @return string
     */
    abstract protected static function rule(): string;

    /**
     * Get string representation of the value object.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value;
    }
}
