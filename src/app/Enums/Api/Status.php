<?php

namespace App\Enums\Api;

use App\Enums\Common\EnumInterface;

enum Status: int implements EnumInterface
{
    /** 成功 */
    case SUCCESS = 1;

    /** 失敗 */
    case FAIL = 2;

    /**
     * ラベルを返します
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::SUCCESS => '成功',
            self::FAIL => '失敗',
        };
    }
}
