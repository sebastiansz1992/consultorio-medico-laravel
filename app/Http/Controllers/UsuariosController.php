<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroUsuarios;

class UsuariosController extends Controller
{
    public function inicioSesionUsuario($correo, $contrasenia) {
        $usuario = RegistroUsuarios::select('*')->where('numeroIdentificacion', $contrasenia)->where('correoElectronico', $correo)->get();
        return response()->json($usuario);
    }

    public function registrarUsuario(Request $request)
    {
        $registroUsuario = RegistroUsuarios::create($request->all());
        return response()->json($registroUsuario, 200);
    }
}
