<?php

namespace App\UseCases\Common\Command\Store;

abstract class StoreCommand implements StoreCommandInterface
{
    /**
     * 配列に変換する
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
