<?php

namespace App\Repositories\Common;

interface BaseRepositoryInterface
{
    /**
     * DBに保存する
     *
     * @param array $data
     * @return void
     */
    public function fillSave(array $data): void;
}
