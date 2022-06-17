@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Edit Kereta
            </div>
            <div class="card-body">
                <form action="/kereta/{{ $kereta->id }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Kereta</label>
                        <input class="form-control" type="text" name="nama_kereta" value="{{ $kereta->nama_kereta }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Warna Kereta</label>
                        <select class="form-select" aria-label="Default select example" name="warna_kereta">
                            <option hidden selected="{{ $kereta->warna_kereta }}">{{ $kereta->warna_kereta }}</option>
                            <option value="Hitam">Hitam</option>
                            <option value="Merah">Merah</option>
                            <option value="Biru">Biru</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kereta</label>
                        {{-- <input class="form-control" type="text" placeholder="Jenis Kereta" name="jenis_kereta" value="{{ $kereta->jenis_kereta }}" /> --}}
                        <textarea name="jenis_kereta" class="form-control" rows="3">{{ $kereta->jenis_kereta }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Kereta</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">RM</span><input
                                class="form-control" type="number" name="harga_kereta"
                                value="{{ $kereta->harga_kereta }}" /></div>
                    </div>
                    @if ($kereta->harga_kereta != null)
                        <img src="/storage/{{ $kereta->file_kereta }}" alt="" style="width: 50px">
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Gambar Kereta</label>
                        <input class="form-control" type="file" name="file_kereta" />
                    </div>

                    <button class="btn" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
