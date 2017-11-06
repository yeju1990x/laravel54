<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    // 不可以使用数组注入的字段,为空表示都可以注入
    protected $guarded = [];
}
