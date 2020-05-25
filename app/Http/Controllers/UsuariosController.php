<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroUsuarios;

class UsuariosController extends Controller
{
    public function registrarUsuario(Request $request)
    {
        $registroUsuario = RegistroUsuarios::create($request->all());
        return response()->json($registroUsuario, 200);
    }
}
