<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class tbl_usuario extends Model
{

    protected $fillable = [
        'id', 'cedula'
    ];

    protected $table = 'tbl_usuario';
}
