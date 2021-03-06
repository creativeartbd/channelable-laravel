<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MysqlServer extends Model
{
    use HasFactory;
    protected $table = 'mysql_servers';

    protected $primaryKey = 'id_mysql_server';
    protected $guarded = [];

}
