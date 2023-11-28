<?php

namespace App\Http\Controllers;

use App\Models\CalendarioAsistencia;
use Illuminate\Http\Request;

/**
 * Class CalendarioAsistenciaController
 * @package App\Http\Controllers
 */
class CalendarioAsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendarioAsistencias = CalendarioAsistencia::paginate();

        return view('calendario-asistencia.index', compact('calendarioAsistencias'))
            ->with('i', (request()->input('page', 1) - 1) * $calendarioAsistencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calendarioAsistencia = new CalendarioAsistencia();
        return view('calendario-asistencia.create', compact('calendarioAsistencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CalendarioAsistencia::$rules);

        $calendarioAsistencia = CalendarioAsistencia::create($request->all());

        return redirect()->route('calendario-asistencias.index')
            ->with('success', 'CalendarioAsistencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calendarioAsistencia = CalendarioAsistencia::find($id);

        return view('calendario-asistencia.show', compact('calendarioAsistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calendarioAsistencia = CalendarioAsistencia::find($id);

        return view('calendario-asistencia.edit', compact('calendarioAsistencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CalendarioAsistencia $calendarioAsistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendarioAsistencia $calendarioAsistencia)
    {
        request()->validate(CalendarioAsistencia::$rules);

        $calendarioAsistencia->update($request->all());

        return redirect()->route('calendario-asistencias.index')
            ->with('success', 'CalendarioAsistencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $calendarioAsistencia = CalendarioAsistencia::find($id)->delete();

        return redirect()->route('calendario-asistencias.index')
            ->with('success', 'CalendarioAsistencia deleted successfully');
    }
}
