<?php

namespace App\Http\Controllers;

use App\Models\grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grados = grado::All();
        return view('grado.index', compact('grados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_grados = grado::all();
        return view('grado.create', compact('list_grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grados = new grado;

        $grados->id =$request->id;
        $grados->id_grado = $request->id_grado;
        $grados->periodo_lectivo = $request->periodo_lectivo;
        $grados->id_tema = $request->id_tema;
        $grados->save();

        return view('grado.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editGrado= grado::find($id);
        return view('grado.edit', compact('editGrado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $editGrado = grado::find($id);

        $editGrado->id =$request->id;
        $editGrado->id_grado = $request->id_grado;
        $editGrado->periodo_lectivo = $request->periodo_lectivo;
        $editGrado->id_tema = $request->id_tema;
        $editGrado->save();
        
        return redirect()->route('grado.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliGrado = grado::find($id);
        $eliGrado->delete();
        return back()->with('Mensaje', 'Grado Eliminado');
    }
}
