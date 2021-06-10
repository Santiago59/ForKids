<?php

namespace App\Http\Controllers;

use App\Models\actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = actividad::All();
        return view('actvidad.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividades = new actividad();

        $actividades->id =$request->id;
        $actividades->nombre_actividad = $request->nombre_actividad;
        $actividades->valor = $request->valor;
        $actividades->estado = $request->estado;
        $actividades->autor = $request->autor;
        $actividades->id_grado = $request->id_grado;
        $actividades->id_docente = $request->id_docente;
        $actividades->id_ludica = $request->id_ludica;
        $actividades->id_usuario = $request->id_usuario;
        $actividades->id_motivaciones = $request->id_motivaciones;
        $actividades->save();

        return view('estudiante.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editActividad= actividad::find($id);
        return view('actividad.edit', compact('editActividad'));
    }    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editActividad = actividad::find($id);
        $editActividad->nombre_actividad = $request->nombre_docentes;
        $editActividad->valor = $request->valor;
        $editActividad->estado = $request->estado;
        $editActividad->autor = $request->autor;
        $editActividad->id_grado = $request->id_grado;
        $editActividad->id_docente = $request->id_docente;
        $editActividad->id_ludica = $request->id_ludica;
        $editActividad->id_usuario = $request->id_usuario;
        $editActividad->id_motivaciones = $request->id_motivaciones;
        $editActividad->save();

        return redirect()->route('estudiante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliActividad = actividad::find($id);
        $eliActividad->delete();
        return back()->with('Mensaje', 'Actividad Eliminada');
    }
}
