<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidades;

class EspecialidadesController extends Controller
{
    public function obtenerTodasEspecialidades()
    {
        $especialidades = Especialidades::all();
        return response()->json($especialidades);
    }
}
