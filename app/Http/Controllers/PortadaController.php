<?php

namespace App\Http\Controllers;

use App\Models\Portada;
use App\Http\Requests\StorePortadaRequest;
use App\Http\Requests\UpdatePortadaRequest;

class PortadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portada.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortadaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortadaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function show(Portada $portada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function edit(Portada $portada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortadaRequest  $request
     * @param  \App\Models\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortadaRequest $request, Portada $portada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portada $portada)
    {
        //
    }
}
