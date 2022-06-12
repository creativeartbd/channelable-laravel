<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XmlField extends Model
{
    use HasFactory;
    protected $table = 'xml_fields';

    protected $primaryKey = 'id_xml_field';

    protected $fillable = [
        'field_title'    ,
        'field_slug'     ,
    ];
}
