<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model implements BaseModelInterface
{
    /**
     * このモデルが使用するデータベース接続
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * 自動増分IDのデータ型
     *
     * @var int
     */
    protected $keyType = 'int';

    /**
     * モデルにタイムスタンプを付けるか
     *
     * @var bool
     */
    public $timestamps = true;
}
