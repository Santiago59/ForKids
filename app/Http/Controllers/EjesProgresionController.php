<?php

namespace App\Http\Controllers;

use App\Models\ejes_progresion;
use Illuminate\Http\Request;

class EjesProgresionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ejes = ejes_progresion::All();
        return view('ejes.index', compact('ejes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lis_ejes = ejes_progresion::all();
        return view('ejes.create', compact('lis_ejes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ejes = new ejes_progresion();

        $ejes->objetivo = $request->objetivo;
        $ejes->dba = $request->dba;
        $ejes->save();

        return view('ejes.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ejes_progresion  $ejes_progresion
     * @return \Illuminate\Http\Response
     */
    public function show(ejes_progresion $ejes_progresion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ejes_progresion  $ejes_progresion
     * @return \Illuminate\Http\Response
     */
    public function edit(ejes_progresion $ejes_progresion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ejes_progresion  $ejes_progresion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ejes_progresion $ejes_progresion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ejes_progresion  $ejes_progresion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ejes_progresion $ejes_progresion)
    {
        //
    }
}
