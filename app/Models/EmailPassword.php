<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailPassword extends Model
{
    use HasFactory;
    protected $table = 'email_password';
    protected $guarded = ['id'];
    protected $connection = 'mysql';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email'       ,
        'token'       ,
        'type'       ,
    ];
}
