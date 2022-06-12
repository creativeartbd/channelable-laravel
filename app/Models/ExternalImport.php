<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalImport extends Model
{
    use HasFactory;
    protected $table = 'external_imports';

    protected $primaryKey = 'id_external_report';
    protected $guarded = [];

}
