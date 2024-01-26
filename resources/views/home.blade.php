@extends('layouts.navbar')

@section('title', 'Home products')

@section('content')

    <style>
        .hero {
            min-height: 100vh;
            background-image: url("https://blog-media.lifepal.co.id/app/uploads/sites/3/2021/07/20162139/shutterstock_609147974.jpg");
            background-size: cover;
        }

        .hero h3 {
            margin-top: 18rem;
            text-shadow: 0 1.5px 1.5px rgba(0, 0, 0.2);
        }

        .hero p {
            text-shadow: 0 1px 1px rgba(0, 0, 0.2);
        }

        #about {
            background-image: url("https://img.freepik.com/premium-vector/white-abstract-background-vector_10307-568.jpg?w=2000");
            background-size: cover;
            min-height: 100vh;
            position: relative;
            background-position: center
        }

        #kategori {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyY03JxLbKnx2JMxB0PcDmdz0Mr07k-sqV_NLlrxlqgK5tE9VhrPHAQAR6yd0FtXQttok&usqp=CAU");
            background-size: cover;
            min-height: 100vh;
            position: relative;
            background-position: center
        }

        footer {
            min-height: 15vh;
        }

        /*media query*/
        /*laptop*/
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

        section {
            padding-top: 5rem;
        }
    </style>
    <section id="hero" class="hero w-100 h-100 p-3">
        <h3 class="text-left text-black ms-5">Find your favourite products here</h3>
        <p class="text-left text-balck ms-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque
            nostrum,labore eos vitae sunt quasi quibusdam quaerat suscipit explicabo sequi quisquam, <br> dolorum a.
            Inventore dolor delectus culpa nihil, voluptates quibusdam.</p>
        <a href="#shops" class="btn btn-primary ms-5 mt-2 text-white">Belanja sekarang</a>
    </section>


    <section id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3>About Us</h3>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-md-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFSjGUbbdDoZPL1H78lKsLeo3yznlvxYEKqQ&usqp=CAU"
                        class="img-thumbnail" alt="imgabout">
                </div>
                <div class="col-md">
                    <h4 class="mb-3">Revshop.com adalah ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas iure, error, voluptas porro vitae
                        accusamus, quibusdam maxime consectetur doloremque ratione ipsa reprehenderit ad earum tempora
                        laudantium dicta facilis autem sit excepturi culpa. Eveniet et, libero asperiores aut deleniti iusto
                        corrupti enim consequatur assumenda error animi id fugit! Culpa, architecto dolor? Lorem, ipsum
                        dolor sit amet consectetur adipisicing elit. Aliquam reiciendis, aperiam aliquid, recusandae ea
                        cupiditate, molestias sapiente voluptatem dolorem veritatis quaerat. Nobis voluptatibus, ipsam
                        deleniti maxime sint aut. Inventore aspernatur architecto dolore obcaecati beatae consequatur fugiat
                        fugit iusto debitis voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque in
                        sapiente exercitationem quo molestiae! Ducimus ad quidem sed iusto cumque!</p>
                </div>
            </div>
            <div class="d-flex row p-4 flex-row-reverse ">
                <div class="col-md-3 mt-5">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRF3iJabqAYqn2yL7VBgl_PwJUn0Ib0MypWLw&usqp=CAU"
                        class="img-thumbnail" alt="imgabout">
                </div>
                <div class="col-md">
                    <h4 class="mb-3">Awal Mula adanya aplikasi ini !?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas iure, error, voluptas porro vitae
                        accusamus, quibusdam maxime consectetur doloremque ratione ipsa reprehenderit ad earum tempora
                        laudantium dicta facilis autem sit excepturi culpa. Eveniet et, libero asperiores aut deleniti iusto
                        corrupti enim consequatur assumenda error animi id fugit! Culpa, architecto dolor? Lorem, ipsum
                        dolor sit amet consectetur adipisicing elit. Aliquam reiciendis, aperiam aliquid, recusandae ea
                        cupiditate, molestias sapiente voluptatem dolorem veritatis quaerat. Nobis voluptatibus, ipsam
                        deleniti maxime sint aut. Inventore aspernatur architecto dolore obcaecati beatae consequatur fugiat
                        fugit iusto debitis voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque in
                        sapiente exercitationem quo molestiae! Ducimus ad quidem sed iusto cumque!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kategori">
        <div class="container flex ">
            <div class="row text-center">
                <div class="col mb-5">
                    <h4>Category Products</h4>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-2 m-2">
                    <div class="card" style="width: 10rem;">
                        <img src="https://www.uniqlo.com/id/en/news/sp/topics/2023041802/img/mimg_1_m.jpg"
                            class="card-img-top" alt="pakaian Wanita">
                        <div class="card-body">
                            <p class="card-text">Pakaian Wanita</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 m-2">
                    <div class="card" style="width: 10rem;">
                        <img src="https://s0.bukalapak.com/img/01488152992/s-463-463/270750f7_586e_4774_bda8_3b82ffcccbb2.jpg.webp"
                            class="card-img-top" alt="pakaian Wanita">
                        <div class="card-body">
                            <p class="card-text">Pakaian Pria</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 m-2">
                    <div class="card" style="width: 10rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR73ttGUqiUrIGETp9BCX63KwiFgOY4L4VUQuYVjrlawaIch7ejW3OLvbZGPBJsP7TJ5rw&usqp=CAU"
                            class="card-img-top" alt="pakaian Wanita">
                        <div class="card-body">
                            <p class="card-text">Pakaian Anak</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 m-2">
                    <div class="card" style="width: 10rem;height: 40%;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7INoD5aBdDgWIDikLLoLnJTeWdD2sV7BNsg&usqp=CAU"
                            class="card-img-top" alt="pakaian Wanita">
                        <div class="card-body">
                            <p class="card-text">Pakaian Remaja</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 m-2">
                    <div class="card" style="width: 10rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ6scMqPw9PmcFNKU-zyajaeIHV4LocArlQQ&usqp=CAU"
                            class="card-img-top" alt="pakaian Wanita">
                        <div class="card-body">
                            <p class="card-text">Jaket/Sweater</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 m-2">
                    <div class="card" style="width: 10rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj3V_ZEj9Otkgpddl3jY0c8Wzs-np5I_K-KSPYPiR5-8gTrbU0wJ5uJouV_2xuGi6MVZs&usqp=CAU"
                            class="card-img-top" alt="pakaian Wanita">
                        <div class="card-body">
                            <p class="card-text">Sepatu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="shops">
        <div class="container mb-5">
            <div class="row text-center">
                <div class="col m-2">
                    <h3>Shops</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-md-3">
                        <div class="card">
                            <a href="/deskripsi/{{ $item->id }}"><img
                                    src="{{ asset('img/' . $item->produk) }}"class="card-img-top" alt="produk 1"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama }}</h5>
                                <p class="card-text">Rp.{{ $item->harga }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Masukan Alamat ">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Patokan terdekat</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="blok,no,cat,rt,rw">
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
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-md-2">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a data-bs-toggle="modal" data-bs-target="#pembayaran" class="btn btn-primary">Pesan</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white">
        <div class="container flex ">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-3 mb-3 ">
                    <h5>Follow Us</h5>
                    {{-- <p>Created and copyright @2023.</p> --}}
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png"
                        alt="instagram" width="20rem"><a class="text-decoration-none text-white"
                        href="https://www.instagram.com/p/ChZjXLxvxmv/?igshid=MmU2YjMzNjRlOQ==">Instagram</a>
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/023/986/704/small/youtube-logo-youtube-logo-transparent-youtube-icon-transparent-free-free-png.png"
                        alt="youtube" width="25rem"><a class="text-decoration-none text-white"
                        href="https://youtube.com/@revaliza6626?si=NX1O38AzqkWPDVy5">Youtube</a>
                    <img src="https://p16-tiktokcdn-com.akamaized.net/obj/tiktok-obj/1a22b79342fa2f06d453140bb5c6deaf.png"
                        alt="tiktok" width="30rem"><a class="text-decoration-none text-white"
                        href="https://www.tiktok.com/@revaliza761?_t=8f64PVOyXpa&_r=1">Tiktok</a>
                </div>
                <div class="col-md-5 mt-5">
                    <h5>About Us</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat accusantium architecto quis, minima
                        molestiae accusamus alias soluta beatae, praesentium dicta repellat possimus suscipit debitis a!
                        Numquam quasi excepturi quaerat consequuntur repellat, quibusdam accusamus sunt eos!</p>
                </div>
                <div class="col-md-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email anda">
                    <a href="" class="btn btn-secondary mt-3">Submit</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- <footer class="bg-secondary text-center text-white">
        <p>Created and copyright @2023.</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png"
            alt="instagram" width="20rem"><a class="text-decoration-none text-white"
            href="https://www.instagram.com/p/ChZjXLxvxmv/?igshid=MmU2YjMzNjRlOQ==">Instagram</a>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/023/986/704/small/youtube-logo-youtube-logo-transparent-youtube-icon-transparent-free-free-png.png"
                alt="youtube" width="25rem"><a class="text-decoration-none text-white"
                href="https://youtube.com/@revaliza6626?si=NX1O38AzqkWPDVy5">Youtube</a>
            <img src="https://p16-tiktokcdn-com.akamaized.net/obj/tiktok-obj/1a22b79342fa2f06d453140bb5c6deaf.png"
                alt="tiktok" width="30rem"><a class="text-decoration-none text-white"
                href="https://www.tiktok.com/@revaliza761?_t=8f64PVOyXpa&_r=1">Tiktok</a>
        </footer> --}}

@endsection
