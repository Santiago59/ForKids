<?php

namespace App\Http\Controllers;

use App\Models\acudiente;
use Illuminate\Http\Request;

class AcudienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acudientes = acudiente::All();
        return view('acudiente.index', compact('acudientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_acudientes = acudiente::all();
        return view('acudiente.create', compact('list_acudientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acudientes = new acudiente();

        $acudientes->id =$request->id;
        $acudientes->nombre_acudiente = $request->nombre_acudiente;
        $acudientes->apellido_acudiente = $request->apellido_acudiente;
        $acudientes->telefono = $request->telefono;
        $acudientes->save();

        return view('estudiante.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editAcudiente= acudiente::find($id);
        return view('acudiente.edit', compact('editAcudiente'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $acudientes = acudiente::find($id);

        $acudientes->id =$request->id;
        $acudientes->nombre_acudiente = $request->nombre_acudiente;
        $acudientes->apellido_acudiente = $request->apellido_acudiente;
        $acudientes->telefono = $request->telefono;
        $acudientes->save();

        return redirect()->route('acudiente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliAcudiente = acudiente::find($id);
        $eliAcudiente->delete();
        return back()->with('Mensaje', 'Acudiente Eliminado');
    }
}
