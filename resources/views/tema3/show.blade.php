<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio.id | Tema3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicing3.css') }}">

    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>


    <section id="tema1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="cards">
                        <div class="row">
                            
                            <div class="col-6 kanan">
                                <div class="data_pribadi">
                                    <div class="card">
                                        <h6 class="keterangan">Data Pribadi</h6>
                                        <div class="isi_data px-4">
                                            <div class="row">
                                                <div class="col-5">
                                                    <p>Nama</p>
                                                </div>
                                                <div class="col-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>{{ $tema->nama }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <p>Tempat, Tgl Lahir</p>
                                                </div>
                                                <div class="col-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>{{ $tema->tempat_lahir }}, {{ $tema->tanggal_lahir }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <p>Agama</p>
                                                </div>
                                                <div class="col-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>{{ $tema ->agama }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <p>Kewarganegaraan</p>
                                                </div>
                                                <div class="col-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>{{ $tema ->kewarganegaraan }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5">
                                                    <p>Alamat Sekarang</p>
                                                </div>
                                                <div class="col-1">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>
                                                        {{ $tema->alamat }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pendidikan">
                                    <div class="card">
                                        <h6 class="keterangan">PENDIDIKAN FORMAL</h6>
                                        <div class="row px-4">
                                            <div class="col-6">
                                                <p>{{ $tema->sd }}</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p>{{ $tema->tahun_sd }}</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-6">
                                                <p>{{ $tema->smp }}</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p>{{ $tema->tahun_smp }}</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-6">
                                                <p>{{ $tema->sma }}</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p>{{ $tema->tahun_sma }}</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-6">
                                                <p>{{ $tema->kuliah }}</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p>{{ $tema->tahun_kuliah }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="organisasi">
                                    <div class="card">
                                        <h6 class="keterangan">ORGANISASI</h6>
                                        <div class="row px-4">
                                            <div class="col-9">
                                                <p class="nama-organisasi fw-bold mb-0">{{ $tema->organisasi1 }}</p>
                                                <p class="bidang-organisasi">{{ $tema->jabatan1 }}</p>
                                            </div>
                                            <div class="col-3 text-end">
                                                <p>{{ $tema->tahun_menjabat1 }}</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-9">
                                                <p class="nama-organisasi fw-bold mb-0">{{ $tema->organisasi2 }}</p>
                                                <p class="bidang-organisasi">{{ $tema->jabatan2 }}</p>
                                            </div>
                                            <div class="col-3 text-end">
                                                <p>{{ $tema->tahun_menjabat2 }}</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-9">
                                                <p class="nama-organisasi fw-bold mb-0">{{ $tema->organisasi3 }}</p>
                                                <p class="bidang-organisasi">{{ $tema->jabatan3 }}</p>
                                            </div>
                                            <div class="col-3 text-end">
                                                <p>{{ $tema->tahun_menjabat3 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="moto">
                                    <div class="card">
                                        <h6 class="keterangan">MOTO HIDUP</h6>
                                        <div class="px-4">
                                            <P>{{ $tema->moto }}</P>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card card-kiri">
                                    <div class="foto text-center">
                                        <img src="/storage/{{ $tema->foto }}" width="100px"
                                        alt="">
                                        {{-- <p class="text-center fs-4 text-light">{{ $tema->pekerjaan }}</p> --}}
                                        <p class="text-light fs-4 mb-0">{{ $tema->pekerjaan }}</p>
                                        <p class="nama">{{ $tema->nama }}</p>
                                    </div>
                                    <div class="sosmed">
                                        <p class="keterangan text-center">SOSIAL MEDIA</p>
                                        <div class="isi-sosmed px-5 ">
                                            <div class="wa d-flex">
                                                <i class="bi bi-whatsapp fs-3"></i>
                                                <p class="isi align-self-center mb-0 ms-3">{{ $tema->no_wa }}</p>
                                            </div>
                                            <div class="ig d-flex">
                                                <i class="bi bi-instagram fs-3"></i>
                                                <p class="isi align-self-center mb-0 ms-3">{{ $tema->nama_ig }}</p>
                                            </div>
                                            <div class="email d-flex mb-4">
                                                <i class="bi bi-envelope fs-3"></i>
                                                <p class="isi align-self-center mb-0 ms-3">{{ $tema->email }}</p>
                                            </div>
                                           
                                        </div>
                                    </div>

                                    <div class="hobi">
                                        <p class="keterangan text-center">HOBI</p>
                                        <div class="isi-hobi d-flex justify-content-center">
                                            <p class="isi p-3">{{ $tema->hobi1 }}</p>
                                            <p class="isi p-3">{{ $tema->hobi2 }}</p>
                                            <p class="isi p-3">{{ $tema->hobi3 }}</p>
                                        </div>
                                    </div>

                                    <div class="keahlian">
                                        <p class="keterangan text-center">KEAHLIAN</p>
                                        <div class="isi">
                                            <div class="d-flex px-3">
                                                <p class="isi-keahlian">{{ $tema->keahlian1 }}</p>
                                                <p class="persentase ms-auto">{{ $tema->persentase1 }}</p>
                                            </div>
                                            <div class="d-flex px-3">
                                                <p class="isi-keahlian">{{ $tema->keahlian2 }}</p>
                                                <p class="persentase ms-auto">{{ $tema->persentase2 }}</p>
                                            </div>
                                            <div class="d-flex px-3">
                                                <p class="isi-keahlian">{{ $tema->keahlian3 }}</p>
                                                <p class="persentase ms-auto">{{ $tema->persentase3 }}</p>
                                            </div>
                                            <div class="d-flex px-3">
                                                <p class="isi-keahlian">{{ $tema->keahlian4 }}</p>
                                                <p class="persentase ms-auto">{{ $tema->persentase4 }}</p>
                                            </div>
                                            <div class="d-flex px-3">
                                                <p class="isi-keahlian">{{ $tema->keahlian5 }}</p>
                                                <p class="persentase ms-auto">{{ $tema->persentase5 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="tombol">
        <div class="container my-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <a href="{{ route('index.tema') }}" class="btn btn-danger me-2">Kembali</a>
                    <a href="{{ route('index.tema1') }}" class="btn btn-danger">Download</a>
                </div>
            </div>
        </div>
    </section> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>