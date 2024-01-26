@extends('layouts.navbar')

@section('title', 'Home products')

@section('content')
<div class="container mt-5">
    <div class="card">
      <div class="card-header bg-secondary">
        <h3 style="color: aliceblue" class="text-center ">Data produk</h3>
      </div>
      <div class="card-body">
        <div style="overflow-x:auto;">
        <a href="/tambah" class="btn btn-outline-primary mb-3 float-end">Tambah</a>
        <table class="table table-straped">
          <tr>
                      <td>No</td>
                      <th>Nama</th>
                      <th>deskripsi</th>
                      <th>produk</th>
                      <th>Stok</th>
                      <th>harga</th>
                      <th colspan="2">Aksi</th>
                  </tr>

                  @foreach ($data as $item)
                  <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td width="20%"><img src="{{ asset('img/'. $item->produk) }}" width="40%" alt="produk"></td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                      <a href="edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                      <a href="#delete/ }}" class="btn btn-danger">Hapus</a> 
                      @endforeach
                    </td>                    
                  </tr>
                  </tr>
              </table>
              </div>
          </div>
      </div>

      <section id="delete">
        <div class="modal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Data di hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">yes</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection