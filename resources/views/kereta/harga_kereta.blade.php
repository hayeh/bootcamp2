@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Edit Harga Kereta
            </div>
            <div class="card-body">
                <form action="/kereta/{{ $harga->id }}/save-harga" method="post" enctype="multipart/form-data">
                    @method('POST')
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Harga Kereta</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">RM</span><input
                                class="form-control" type="number" name="harga_kereta"
                                value="{{ $harga->harga_kereta }}" /></div>
                    </div>
                    <button class="btn" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
