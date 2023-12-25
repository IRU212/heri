<?php

namespace App\Repositories\Common;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * 初期化処理
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * DBに保存する
     *
     * @param array $data
     * @return void
     */
    public function fillSave(array $data): void
    {
        $this->model->fill($data)->save();
    }
}
