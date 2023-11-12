<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administradorController extends Controller
{
    //muestra su perfil
    public function index()
    {
        return view('administrador.show_profile');
    }
}
