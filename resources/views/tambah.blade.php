@extends('layouts.navbar')

@section('title', 'Home products')

@section('content')
<div class="mt-5 col-8 m-auto">
    <h4 class="text-center">Tambah Produk</h4>
    <form action="produk" method="post" class="m-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>

    <div class="mb-3">
        <label for="deskripsi">Deskripsi</label>
        <textarea rows="4" name="deskripsi" id="deskripsi" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="produk">Produk</label>
        <input type="file" name="produk" id="produk" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" class="form-control">
    </div>

    <div class="mb-3">
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" class="form-control">
    </div>


    <div class="mb-3">
        <button class="btn btn-success d-block m-auto" type="submit">Simpan</button>
    </div>
</form>
</div>


@endsection