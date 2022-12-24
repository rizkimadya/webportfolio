<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEB PORTFOLIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- link font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- bootsrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body>


    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top py-3" id="navbar">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="#">Portfolio.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tema">Tema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
                <div>
                    <a class="btn-buat" href="/login">Buat Portfolio</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- hero --}}
    <section id="hero">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6 pe-5">
                    <img src="{{ asset('assets/img/bg_hero.png') }}" alt="" width="100%">
                </div>
                <div class="col-md-6 align-self-center pt-3">
                    <p class="title"><span>Mulai buat Portfolio hanya di</span> Portfolio.id</p>
                    <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad consectetur est
                        distinctio aliquid suscipit sunt recusandae vel, itaque eveniet veniam officiis enim tenetur
                        libero deleniti quasi neque. Odit error tempore minus maxime officia! Ab eum ut placeat,
                        veritatis magnam eligendi!</p>
                    <div class="scroll mt-5">
                        <div class="box bounce-4">
                            <a href="#fitur ">
                                Scroll <i class="bi bi-arrow-down fs-5 align-self-center"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>


    {{-- fitur --}}
    <section id="fitur">
        <div class="fitur">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-4">
                        <div class="row text-center">
                            <div class="col-3">
                                <div class="card">
                                    <p class="title">Identitas</p>
                                    <i class="bi bi-gender-trans fs-1"></i>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <p class="title">Pendidikan</p>
                                    <i class="bi bi-journal-code fs-1"></i>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <p class="title">Skill & Portfolio</p>
                                    <i class="bi bi-image-fill fs-1"></i>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <p class="title">Media Sosial</p>
                                    <i class="bi bi-globe2 fs-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- tema --}}
    <section id="tema">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="title">Tema Curiculum Vitae</p>
                    <p class="subtitle">Dapatkan tema terbaik untuk anda</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/tema1.png') }}" alt="">
                        <div class="py-3">
                            <p class="nama fw-bold fs-5">Tema 1</p>
                            <p class="keterangan">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, quo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/tema2.png') }}" alt="">
                        <div class="py-3">
                            <p class="nama fw-bold fs-5">Tema 2</p>
                            <p class="keterangan">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, quo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/img/tema3.png') }}" alt="">
                        <div class="py-3">
                            <p class="nama fw-bold fs-5">Tema 3</p>
                            <p class="keterangan">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, quo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- kontak --}}
    <section id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="title">Kontak Kami</p>
                    <p class="subtitle">untuk info lebih lanjut</p>
                </div>
            </div>

            <div class="row pb-5 d-flex justify-content-center">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="d-flex isi mb-4">
                                    <div class="align-self-center me-4">
                                        <i class="bi bi-telephone-outbound-fill fs-2"></i>
                                    </div>
                                    <div>
                                        <p class="ket mb-0">Hubungi Kami</p>
                                        <p class="subket mb-0">+6282236831592</p>
                                    </div>
                                </div>
                                <div class="d-flex isi mb-4">
                                    <div class="align-self-center me-4">
                                        <i class="bi bi-envelope-fill fs-2"></i>
                                    </div>
                                    <div>
                                        <p class="ket mb-0">Email</p>
                                        <p class="subket mb-0">portfolio@gmail.com</p>
                                    </div>
                                </div>
                                <div class="d-flex isi mb-4">
                                    <div class="align-self-center me-4">
                                        <i class="bi bi-geo-alt-fill fs-2"></i>
                                    </div>
                                    <div>
                                        <p class="ket mb-0">Lokasi</p>
                                        <p class="subket mb-0">UIN Alauddin Makassar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <form action="">
                                    <div class="mb-3 bg-input">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="mb-3 bg-input">
                                        <label for="nim" class="form-label">Nim</label>
                                        <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan Nim">
                                    </div>
                                    <div class="mb-3 bg-input">
                                        <label for="pesan" class="form-label">Pesan</label>
                                        <textarea name="pesan" id="pesan" class="form-control" placeholder="Masukkan Pesan"></textarea>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-end">
                                        <button type="submit" class="btn-submit">Kirim Pesan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center fw-bold pt-4 pb-1">Copyright @ Pemrograman WEB 2022</p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
