<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class tbl_us_ref extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'usuarios_id' ,'refrigerios_id', 'estado'
    ];

    protected $table = 'tbl_us_ref';
}
