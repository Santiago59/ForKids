<?php

namespace App\Http\Controllers;

use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = docente::All();
        return view('docente.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docentes = new docente();

        $docentes->id =$request->id;
        $docentes->nombre_docente = $request->nombre_docentes;
        $docentes->apellido_docente = $request->apellido_docente;
        $docentes->especializacion = $request->especializacion;
        $docentes->id_institucion = $request->id_institucion;
        $docentes->save();

        return view('docente.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editDocente= docente::find($id);
        return view('docente.edit', compact('editDocente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $editDocente = new docente();

        $editDocente->id =$request->id;
        $editDocente->nombre_docente = $request->nombre_docentes;
        $editDocente->apellido_docente = $request->apellido_docente;
        $editDocente->especializacion = $request->especializacion;
        $editDocente->id_institucion = $request->id_institucion;
        $editDocente->save();

        return redirect()->route('docente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliDocente = docente::find($id);
        $eliDocente->delete();
        return back()->with('Mensaje', 'Docente Eliminado');
    }
}
