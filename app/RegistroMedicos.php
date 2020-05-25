<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroMedicos extends Model
{
    protected $fillable = [
        'nombreCompleto',
        'numeroIdentificacion',
        'correoElectronico',
        'numeroContacto',
        'especialidad_id',
        'registroMedico',
        'experiencia',
        'titulosObtenidos',
        'disponibilidad',
        'activo'
    ];
}
