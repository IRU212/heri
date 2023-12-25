<?php

namespace App\UseCases\Common\Command\Store;

interface StoreCommandInterface
{
    /**
     * 入力値をセットする
     *
     * @param array $validate_data
     * @return self
     */
    public static function setInput(array $validate_data): self;

    /**
     * 配列に変換する
     *
     * @return array<string, mixed>
     */
    public function toArray(): array;
}
