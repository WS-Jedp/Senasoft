<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class tbl_refrigerio extends Model
{
    protected $table = 'tbl_refrigerio';

    protected $fillable = [
        'id', 'fecha_inicial', 'fecha_final', 'tipo_ref_id',
    ];

    
}
