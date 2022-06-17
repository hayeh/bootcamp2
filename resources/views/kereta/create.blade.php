@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Create Kereta
            </div>
            <div class="card-body">
                <form action="/kereta" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Kereta</label>
                        <input class="form-control" type="text" name="nama_kereta" placeholder="Nama Kereta" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Warna Kereta</label>
                        <select class="form-select" aria-label="Default select example" name="warna_kereta">
                            <option selected="">Sila Pilih</option>
                            <option value="Hitam">Hitam</option>
                            <option value="Merah">Merah</option>
                            <option value="Biru">Biru</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kereta</label>
                        {{-- <input class="form-control" type="text" placeholder="Jenis Kereta" name="jenis_kereta"/> --}}
                        <textarea name="jenis_kereta" class="form-control" rows="5" ></textarea> 
                        {{--<select class="form-select" aria-label="Default select example" name="jenis_kereta">
                            <option selected="">Sila Pilih</option>
                            <option value="SUV">SUV</option>
                            <option value="MPV">MPV</option>
                            <option value="Sedan">Sedan</option>
                        </select> --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Kereta</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">RM</span><input
                                class="form-control" type="number" name="harga_kereta"/></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar Kereta</label>
                        <input class="form-control" type="file" name="file_kereta"/>
                    </div>

                    <button class="btn" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
