<?php

namespace App\ValueObjects\Common\IdValue;

use App\ValueObjects\Common\BaseValue\BaseValueObject;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use InvalidArgumentException;
use LogicException;

abstract class IdValueObject extends BaseValueObject implements IdValueObjectInterface
{
    /** @var string name */
    protected const NAME = '';

    /**
     * 初期化処理
     *
     * @param int|null $value
     */
    protected function __construct(int|null $value)
    {
        if (static::NAME === '') {
            throw new LogicException(static::class . 'のNAMEを設定してください。');
        }
        try {
            Validator::validate(
                [self::getName() => $value],
                [self::getName() => $value === null ? 'integer|nullable' : static::rule()]
            );
        } catch (ValidationException $e) {
            throw new InvalidArgumentException($e->getMessage());
        }
        $this->value = $value;
    }

    /**
     * 作成します
     *
     * @param int|null $value
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
     * valueを取得する
     *
     * @return int|null
     */
    public function getValue(): int|null
    {
        return $this->value;
    }

    /**
     * nullか返す
     *
     * @return bool
     */
    public function isNull(): bool
    {
        return null === $this->value;
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
        return (int)$this->value;
    }
}
