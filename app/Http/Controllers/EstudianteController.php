<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = estudiante::All();
        return view('estudiante.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_estudiantes = estudiante::all();
        return view('estudiante.create', compact('list_estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiantes = new estudiante;

        $estudiantes->id =$request->id;
        $estudiantes->nombre_estudiante = $request->nombre_estudiante;
        $estudiantes->apellido_estudiante = $request->apellido_estudiante;
        $estudiantes->id_grado = $request->id_grado;
        $estudiantes->id_acudiente = $request->id_acudiente;
        $estudiantes->save();

        return view('estudiante.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editEstudiante= estudiante::find($id);
        return view('estudiante.edit', compact('editEstudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editEstudiante = estudiante::find($id);

        $editEstudiante->id =$request->id;
        $editEstudiante->nombre_estudiante = $request->nombre_estudiante;
        $editEstudiante->apellido_estudiante = $request->apellido_estudiante;
        $editEstudiante->email = $request->email;
        $editEstudiante->id_grado = $request->id_grado;
        $editEstudiante->id_acudiente = $request->id_acudiente;
        $editEstudiante->save();

        return redirect()->route('estudiante.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliEstudiante = estudiante::find($id);
        $eliEstudiante->delete();
        return back()->with('Mensaje', 'Estudiante Eliminado');
    }
}
