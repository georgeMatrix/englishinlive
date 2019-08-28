<?php

namespace App\Http\Controllers;

use App\ControlEscolar;
use App\Nivel;
use Illuminate\Http\Request;

class ControlEscolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = ControlEscolar::orderBy('id')->paginate();
        return view('controlEscolar')->with('registros', $registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveles = Nivel::all();
        return view('controlEscolarCreate')->with('niveles', $niveles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ControlEscolar::create($request->all());
        return redirect('controlEscolar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ControlEscolar  $controlEscolar
     * @return \Illuminate\Http\Response
     */
    public function show(ControlEscolar $controlEscolar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ControlEscolar  $controlEscolar
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlEscolar $controlEscolar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ControlEscolar  $controlEscolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControlEscolar $controlEscolar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ControlEscolar  $controlEscolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlEscolar $controlEscolar)
    {
        //
    }
}
