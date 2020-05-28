<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidades;

class EspecialidadesController extends Controller
{
    public function obtenerTodasEspecialidades()
    {
        $especialidades = Especialidades::select('*')->where('activo', 1)->get();
        return response()->json($especialidades);
    }
}
