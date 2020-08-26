<?php
namespace App\Model\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemMenuModel extends Model
{
    use SoftDeletes;

    protected $datas = ['deleted_at'];

    public $table = 'system_menu';

    protected $primaryKey = 'id';

    public $timestamps = true;

}
