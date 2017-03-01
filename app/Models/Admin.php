<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //自定义表名
    protected $table = 'admin';

    //laravel时间戳，默认情况laravel框架期望每个表都有create_at和update_at
    //模型设置属性$timestamps 为false
    public $timestamps = false;

    //自定义主键名
    protected $primaryKey = "id";
}
