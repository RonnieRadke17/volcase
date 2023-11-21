<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {//muestra todos los registros
        return view('trabajadores.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {//manda a la pantalla para registrar
        return view('trabajadores.create');
    }

    //falta mostrar el calendario
    public function calender()
    {//manda a la pantalla para registrar
        return view('trabajadores.calendario');
    }
}
