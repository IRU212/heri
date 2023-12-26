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
}
