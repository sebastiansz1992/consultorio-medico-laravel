<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CitasMedicas;

class CitasMedicasController extends Controller
{
    public function consultarCitasPorMedico ($id) {
        $citasPorMedico = CitasMedicas::select('*')->where('nombreMedico_id', $id)->get();
        return response()->json($citasPorMedico);
    }

    public function consultarCitasPorUsuario ($id) {
        $citasPorUsuario = CitasMedicas::select('*')->where('nombreUsuario_id', $id)->get();
        return response()->json($citasPorUsuario);
    }
}
