<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroUsuarios extends Model
{
    protected $fillable = [
        'nombreCompleto',
        'numeroIdentificacion',
        'correoElectronico',
        'numeroContacto',
        'activo'
    ];
}
