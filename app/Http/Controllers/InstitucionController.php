<?php

namespace App\Http\Controllers;

use App\Models\institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones = institucion::All();
        return view('institucion.index', compact('instituciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lis_instituciones = institucion::all();
        return view('institucion.create', compact('lis_instituciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instituciones = new institucion();

        $instituciones->nombre_institucion = $request->nombre_institucion;
        $instituciones->direccion = $request->direccion;
        $instituciones->save();

        return view('institucion.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
