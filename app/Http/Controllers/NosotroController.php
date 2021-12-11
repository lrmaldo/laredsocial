<?php

namespace App\Http\Controllers;

use App\Models\Nosotro;
use App\Http\Requests\StoreNosotroRequest;
use App\Http\Requests\UpdateNosotroRequest;

class NosotroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreNosotroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNosotroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nosotro  $nosotro
     * @return \Illuminate\Http\Response
     */
    public function show(Nosotro $nosotro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nosotro  $nosotro
     * @return \Illuminate\Http\Response
     */
    public function edit(Nosotro $nosotro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNosotroRequest  $request
     * @param  \App\Models\Nosotro  $nosotro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNosotroRequest $request, Nosotro $nosotro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nosotro  $nosotro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nosotro $nosotro)
    {
        //
    }
}
