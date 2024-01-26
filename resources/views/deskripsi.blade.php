@extends('layouts.navbar')

@section('title', 'Home products')

@section('content')

<style>
        @media (max-width: 992px; ) {
            html {
                font-size: 75%;
            }
        }

        /*tablet*/
        @media (max-width: 768px; ) {
            html {
                font-size: 62.5%;
            }
        }

        /*hp*/
        @media (max-width: 576px; ) {
            html {
                font-size: 60%;
            }
        }
</style>

<section>
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
          <img width="85%" src="{{ asset('img/' . $data->produk) }}" alt="imgdeskripsi">
        </div>
        <div class="col-md-6 mt-5">
          <h3>{{ $data->nama }}</h3>
          <h5>Rp.{{ $data->harga }}</h5>
          <div class="mb-4 mt-4">
              <label for="size">Size</label>
              <select name="size" id="size" class="form-control">
                <option value="">Pilih Size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
          </div>
              <a href="/" class="btn btn-success mb-3">ADD TO BAG</a>
              <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mb-3">Buy Now</a>
              <p>{{ $data->deskripsi }}</p>
          </div>
        </div>
    </div>
  </div>
</section>



    {{-- <form action="/home/{{ $data->id }}" method="post" class="m-3">
        <div class="card text-center mb-3">
            <div class="card-header bg-primary text-white">
                Deskripsi produk
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $data->nama }}</h5>
                <img width="25%" src="{{ asset('img/' . $data->produk) }}" alt="imgdeskripsi">
                <p class="card-text mt-3 ms-5 me-5 ">{{ $data->deskripsi }}</p>
                <a href="/" class="btn btn-warning">kembali</a>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Beli sekarang</a>
            </div>
        </div>
    </form> --}}


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan data dan alamat yang benar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputNama" class="form-label">Penerima</label>
                            <input type="text" class="form-control" id="inputNama">
                        </div>
                        <div class="col-md-6">
                            <label for="inputNo" class="form-label">No Handphone</label>
                            <input type="number" class="form-control" id="inputNo">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Alamat</label>
                            <textarea type="text" rows="3" class="form-control" id="inputAddress" placeholder="Masukan Alamat "></textarea>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Patokan terdekat</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="blok,no,cat,rt,rw">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Kabupaten/Kota</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputSize" class="form-label">Size</label>
                            <select type="text" class="form-control" id="inputSize">
                                <option value=""></option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                        <div class="col-md-2">
            
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a data-bs-toggle="modal" data-bs-target="#order" class="btn btn-primary">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="order" tabindex="-1" aria-labelledby="order" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="order">Konfirmasi Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a  class="btn btn-primary">Pesan</a>
                </div>
            </div>
        </div>
    </div>

@endsection
