<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroMedicos;

class MedicosController extends Controller
{
    public function registrarMedico(Request $request)
    {
        $registroMedico = RegistroMedicos::create($request->all());
        return response()->json($registroMedico, 200);
    }

    public function obtenerMedicos()
    {
        $medicos = RegistroMedicos::all();
        return response()->json($medicos);
    }

    public function obtenerMedicosPorEspecialidad($id) 
    {
        $medicosPorEspecialidad = RegistroMedicos::select('*')->where('especialidad_id', $id)->get();
        return response()->json($medicosPorEspecialidad);
    }

}