<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeretaRequest;
use App\Http\Requests\UpdateKeretaRequest;
use Illuminate\Http\Request;
use App\Models\Kereta;
use App\Mail\SimpanKereta;
use Illuminate\Support\Facades\Mail;

class KeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kereta = Kereta::all();

        // $kereta = Kereta::where('harga_kereta', '>=', '10')->sum('harga_kereta');
        // dd(gettype($kereta));
        return view('kereta.index', [
            'kereta' => $kereta
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kereta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKeretaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeretaRequest $request)
    {
        if (!empty($request->file('file_kereta'))) {
            $file_kereta = $request->file('file_kereta')->store('gambar');
        }
        $kereta = new Kereta();

        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->warna_kereta = $request->warna_kereta;
        $kereta->jenis_kereta = $request->jenis_kereta;
        $kereta->harga_kereta = $request->harga_kereta;
        $kereta->file_kereta = $file_kereta;
        // dd($kereta);
        $kereta->save();

        // $email = Auth::user()->email;
        Mail::to('maisarahmusa1998@gmail.com')->send(new SimpanKereta());

        return redirect('/kereta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kereta = Kereta::find($id);
        return view('kereta.show', [
            'kereta' => $kereta
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kereta = Kereta::find($id);
        return view('kereta.edit', [
            'kereta' => $kereta
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeretaRequest  $request
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeretaRequest $request, $id)
    {
        if (!empty($request->file('file_kereta'))) {
            $file_kereta = $request->file('file_kereta')->store('gambar');
        }
        $kereta = Kereta::find($id);

        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->warna_kereta = $request->warna_kereta;
        $kereta->jenis_kereta = $request->jenis_kereta;
        $kereta->harga_kereta = $request->harga_kereta;
        $kereta->file_kereta = $file_kereta;

        $kereta->save();

        return redirect('/kereta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kereta = Kereta::find($id);
        $kereta->delete();

        return redirect('/kereta');
    }

    public function update_harga($id) {
        $harga = Kereta::find($id);

        return view ('kereta.harga_kereta', [
            'harga' => $harga
        ]);
    }

    public function save_harga(Request $request, $id) {
        $harga = Kereta::find($id);

        $harga->harga_kereta = $request->harga_kereta;

        $harga->save();

        return redirect('/kereta');
    }
}
