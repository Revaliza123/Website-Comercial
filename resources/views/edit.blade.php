@extends('layouts.navbar')

@section('title', 'Home products')

@section('content')
<div class="mt-5 col-8 m-auto">
    <h4 class="text-center">Update Produk</h4>
    <form action="/produk/{{ $data->id }}" method="post" class="mt-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}">
    </div>

    <div class="mb-3">
        <label for="deskripsi">Dproduksi</label>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $data->deskripsi }}">
    </div>

    <div class="mb-3">
        <label for="produk">Produk</label>
        <input type="file" name="produk" id="produk" class="form-control">
    </div>
    <div class="mb-3">
        <img src="{{ asset('img/'. $data->produk) }}" width="10%" height="10%" alt="gambar">
    </div>

    <div class="mb-3">
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" class="form-control" value="{{ $data->harga }}">
    </div>

    
    <div class="mb-3">
        <button class="btn btn-success d-block m-auto" type="submit">Simpan</button>
    </div>
</form>
</div>

@endsection