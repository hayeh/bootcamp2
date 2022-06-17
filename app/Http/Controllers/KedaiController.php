<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKedaiRequest;
use App\Http\Requests\UpdateKedaiRequest;
use App\Models\Kedai;

class KedaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kedai = Kedai::all();

        return view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKedaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKedaiRequest $request)
    {
        $kedai = new Kedai();

        $kedai->nama_kedai = $request->nama_kedai;
        $kedai->lokasi_kedai = $request->lokasi_kedai;
        $kedai->jenis_kereta = $request->jenis_kereta;
    

        $kereta->save();

        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kedai  $kedai
     * @return \Illuminate\Http\Response
     */
    public function show(Kedai $kedai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kedai  $kedai
     * @return \Illuminate\Http\Response
     */
    public function edit(Kedai $kedai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKedaiRequest  $request
     * @param  \App\Models\Kedai  $kedai
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKedaiRequest $request, Kedai $kedai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kedai  $kedai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kedai $kedai)
    {
        //
    }
}
