<?php

namespace App\Enums\Common;

interface EnumInterface
{
    /**
     * ラベルを返します
     *
     * @return string
     */
    public function label(): string;
}
