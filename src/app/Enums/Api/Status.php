<?php

namespace App\Enums\Api;

use App\Enums\Common\EnumInterface;

enum Status: int implements EnumInterface
{
    /** 成功 */
    case Success = 1;

    /** 失敗 */
    case Fail = 2;
}
