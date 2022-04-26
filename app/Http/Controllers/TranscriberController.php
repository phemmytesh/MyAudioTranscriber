<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTranscriberRequest;
use App\Http\Requests\UpdateTranscriberRequest;
use App\Models\Transcriber;

class TranscriberController extends Controller
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
     * @param  \App\Http\Requests\StoreTranscriberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTranscriberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transcriber  $transcriber
     * @return \Illuminate\Http\Response
     */
    public function show(Transcriber $transcriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transcriber  $transcriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Transcriber $transcriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTranscriberRequest  $request
     * @param  \App\Models\Transcriber  $transcriber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTranscriberRequest $request, Transcriber $transcriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transcriber  $transcriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transcriber $transcriber)
    {
        //
    }
}
