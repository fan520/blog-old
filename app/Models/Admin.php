<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //�Զ������
    protected $table = 'admin';

    //laravelʱ�����Ĭ�����laravel�������ÿ������create_at��update_at
    //ģ����������$timestamps Ϊfalse
    public $timestamps = false;

    //�Զ���������
    protected $primaryKey = "id";
}
