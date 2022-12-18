<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicing2.css') }}">

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
                            <div class="col-6">
                                <div class="card card-kiri">
                                    <div class="foto text-center">
                                        <div class="fotos">
                                            <img src="{{ asset('assets/img/foto.png') }}" alt="ini gambar" width="100%">
                                        </div>
                                    </div>

                                    <div class="data_pribadi">
                                        <div class="card">
                                            <div class="borders mt-3">
                                                <h6 class="keterangan">Data Pribadi</h6>
                                            </div>
                                            <div class="isi_data px-4 py-4">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <p>Nama</p>
                                                    </div>
                                                    <div class="col-1">
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p>M Fajiratul Ikhsan</p>
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
                                                        <p>M Fajiratul Ikhsan</p>
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
                                                        <p>M Fajiratul Ikhsan</p>
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
                                                        <p>M Fajiratul Ikhsan</p>
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
                                                            Jln. Abdullah Daeng Sirua, Toa Daeng III Lorong 6 No.24 </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="hobi">
                                        <div class="card">
                                            <div class="borders">
                                                <h6 class="keterangan text-center">HOBI</h6>
                                            </div>
                                            <div class="isi-hobi pt-2 pb-4 d-flex justify-content-center">
                                                <p class="isi p-3">Hobi1</p>
                                                <p class="isi p-3">Hobi2</p>
                                                <p class="isi p-3">Hobi3</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sosmed">
                                        <div class="card">
                                            <div class="borders ms-auto">
                                                <h6 class="keterangan text-center">CONTACT</h6>
                                            </div>
                                            <div class="isi-sosmed px-5 py-4">
                                                <div class="wa d-flex">
                                                    <i class="bi bi-whatsapp fs-3"></i>
                                                    <p class="isi align-self-center mb-0 ms-3">082236831592</p>
                                                </div>
                                                <div class="ig d-flex">
                                                    <i class="bi bi-instagram fs-3"></i>
                                                    <p class="isi align-self-center mb-0 ms-3">m.fajratulikhsan_</p>
                                                </div>
                                                <div class="email d-flex">
                                                    <i class="bi bi-envelope fs-3"></i>
                                                    <p class="isi align-self-center mb-0 ms-3">Muhammadikhsan174@gmail.com</p>
                                                </div>
                                                <div class="fb d-flex mb-4">
                                                    <i class="bi bi-facebook fs-3"></i>
                                                    <p class="isi align-self-center mb-0 ms-3">Muhammadikhsan174@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-6 kanan">
                                <div class="nama text-end">
                                    <h1>M. Fajratul Ikhsan</h1>
                                    <p class="profesi">Im Designer</p>
                                </div>
                                <div class="pendidikan">
                                    <div class="card">
                                        <div class="borders my-4">
                                            <h6 class="keterangan text-center">PENDIDIKAN FORMAL</h6>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-6">
                                                <p>SDN 30 Paowe</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p>2008-2014</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-6">
                                                <p>SMP 30 Paowe</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p>2008-2014</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-6">
                                                <p>SMA 30 Paowe</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p>2008-2014</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-6">
                                                <p>Kuliah 30 Paowe</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p>2008-2014</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="organisasi">
                                    <div class="card">
                                        <div class="borders my-4">
                                            <h6 class="keterangan">ORGANISASI</h6>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-9">
                                                <p class="nama-organisasi fw-bold mb-0">IMPS Kopert UIN Alauddin Makassar</p>
                                                <p class="bidang-organisasi">Staf Bidang Hubungan Masyarakat</p>
                                            </div>
                                            <div class="col-3 text-end">
                                                <p>2008-2014</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-9">
                                                <p class="nama-organisasi fw-bold mb-0">IMPS Kopert UIN Alauddin Makassar</p>
                                                <p class="bidang-organisasi">Staf Bidang Hubungan Masyarakat</p>
                                            </div>
                                            <div class="col-3 text-end">
                                                <p>2008-2014</p>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-9">
                                                <p class="nama-organisasi fw-bold mb-0">IMPS Kopert UIN Alauddin Makassar</p>
                                                <p class="bidang-organisasi">Staf Bidang Hubungan Masyarakat</p>
                                            </div>
                                            <div class="col-3 text-end">
                                                <p>2008-2014</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="keahlian">
                                    <div class="card">
                                        <div class="borders my-4">
                                            <h6 class="keterangan text-center">KEAHLIAN</h6>
                                        </div>
                                        <div class="isi">
                                            <div class="d-flex px-3">
                                                <p class="isi-keahlian">Mampu Berkomunikasi Dengan Baik </p>
                                                <p class="persentase ms-auto">60%</p>
                                            </div>
                                            <div class="d-flex px-3">
                                                <p class="isi-keahlian">Mampu Berkomunikasi Dengan Baik </p>
                                                <p class="persentase ms-auto">60%</p>
                                            </div>
                                            <div class="d-flex px-3">
                                                <p class="isi-keahlian">Mampu Berkomunikasi Dengan Baik </p>
                                                <p class="persentase ms-auto">60%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="moto">
                                    <div class="card">
                                        <div class="borders my-4">
                                            <h6 class="keterangan">MOTO HIDUP</h6>
                                        </div>
                                        <div class="px-4">
                                            <P>Hidup yang tak pernah direnungi, adalah hidup yang tak layak dijalani.</P>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>