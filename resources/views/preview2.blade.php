<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Portfolio.id</title>
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


    <section id="preview">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5">
                    <div class="card">
                        <img src="{{ asset('assets/img/tema2.png') }}" alt="" width="90%">
                    </div>
                </div>
                <div class="col-sm-7" style="overflow:auto; height:100vh;">
                    <div class="card">
                        <form action="">
                            <div class="row mt-3">
                               
                                <div class="col-sm-6">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#sosmed" aria-expanded="false"
                                                    aria-controls="sosmed">
                                                    Data Sosial Media
                                                </button>
                                            </h2>
                                            <div id="sosmed" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body">
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="no_wa" class="form-label">Nomor Whatsapp</label>
                                                        <input type="number" name="no_wa" id="no_wa"
                                                            placeholder="Masukkan Nomor Wa/Hp" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_ig" class="form-label">Nama Instagram</label>
                                                        <input type="text" name="nama_ig" id="nama_ig"
                                                            placeholder="Masukkan Nama Instagram" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            placeholder="Masukkan Email anda" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#hobi" aria-expanded="false"
                                                    aria-controls="hobi">
                                                    Data Hobi
                                                </button>
                                            </h2>
                                            <div id="hobi" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body">
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="hobi1" class="form-label">Hobi 1</label>
                                                        <input type="text" name="hobi1" id="hobi1"
                                                            placeholder="Masukkan Hobi anda" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hobi2" class="form-label">Hobi 2</label>
                                                        <input type="text" name="hobi2" id="hobi2"
                                                            placeholder="Masukkan Hobi anda" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hobi3" class="form-label">Hobi 3</label>
                                                        <input type="text" name="hobi3" id="hobi3"
                                                            placeholder="Masukkan Hobi anda" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#keahlian" aria-expanded="false"
                                                    aria-controls="keahlian">
                                                    Data Keahlian
                                                </button>
                                            </h2>
                                            <div id="keahlian" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body">
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="keahlian1" class="form-label">Keahlian 1</label>
                                                        <input type="text" name="keahlian1" id="keahlian1"
                                                            placeholder="Masukkan Keahlian anda" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="keahlian2" class="form-label">Keahlian 2</label>
                                                        <input type="text" name="keahlian2" id="keahlian2"
                                                            placeholder="Masukkan Keahlian anda" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="keahlian3" class="form-label">Keahlian 3</label>
                                                        <input type="text" name="keahlian3" id="keahlian3"
                                                            placeholder="Masukkan Keahlian anda" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="keahlian4" class="form-label">Keahlian 4</label>
                                                        <input type="text" name="keahlian4" id="keahlian4"
                                                            placeholder="Masukkan Keahlian anda" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="keahlian5" class="form-label">Keahlian 5</label>
                                                        <input type="text" name="keahlian5" id="keahlian5"
                                                            placeholder="Masukkan Keahlian anda" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#pendidikan" aria-expanded="false"
                                                    aria-controls="pendidikan">
                                                    Pendidikan Formal
                                                </button>
                                            </h2>
                                            <div id="pendidikan" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body">
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="sd" class="form-label">Sekolah Dasar</label>
                                                        <input type="text" name="sd" id="sd"
                                                            placeholder="Masukkan Nama Sekolah Dasar" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun_sd" class="form-label">Tahun Sekolah Dasar</label>
                                                        <input type="text" name="tahun_sd" id="tahun_sd"
                                                            placeholder="Masukkan Tahun anda Sekolah Dasar" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="smp" class="form-label">Sekolah Menengah Pertama</label>
                                                        <input type="text" name="smp" id="smp"
                                                            placeholder="Masukkan Nama SMP Anda" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun_smp" class="form-label">Tahun SMP</label>
                                                        <input type="text" name="tahun_smp" id="tahun_smp"
                                                            placeholder="Masukkan Tahun anda SMP" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="sma" class="form-label">SMA/SMK</label>
                                                        <input type="text" name="sma" id="sma"
                                                            placeholder="Masukkan Nama Sekolah SMA/SMK" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun_sma" class="form-label">Tahun SMA</label>
                                                        <input type="text" name="tahun_sma" id="tahun_sma"
                                                            placeholder="Masukkan Tahun SMA/SMK" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="kuliah" class="form-label">Kuliah</label>
                                                        <input type="text" name="kuliah" id="kuliah"
                                                            placeholder="Masukkan Nama Perguruan Tinggi" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun_kuliah" class="form-label">Tahun Kuliah</label>
                                                        <input type="text" name="tahun_kuliah" id="tahun_kuliah"
                                                            placeholder="Masukkan Tahun anda masuk kuliah" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#organisasi" aria-expanded="false"
                                                    aria-controls="organisasi">
                                                    Data Organisasi
                                                </button>
                                            </h2>
                                            <div id="organisasi" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body">
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="organisasi1" class="form-label">Organisasi 1</label>
                                                        <input type="text" name="organisasi1" id="organisasi1"
                                                            placeholder="Masukkan Nama Organisasi1" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jabatan1" class="form-label">Jabatan Organisasi 1</label>
                                                        <input type="text" name="jabatan1" id="jabatan1"
                                                            placeholder="Masukkan Jabatan Organisasi1" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun_menjabat1" class="form-label">Tahun Menjabat
                                                            diorganisasi</label>
                                                        <input type="text" name="tahun_menjabat1" id="tahun_menjabat1"
                                                            placeholder="Masukkan Tahun Menjabat sampai akhir" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="organisasi2" class="form-label">Organisasi 2</label>
                                                        <input type="text" name="organisasi2" id="organisasi2"
                                                            placeholder="Masukkan Nama Organisasi2" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jabatan2" class="form-label">Jabatan Organisasi 2</label>
                                                        <input type="text" name="jabatan2" id="jabatan2"
                                                            placeholder="Masukkan Jabatan Organisasi2" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun_menjabat2" class="form-label">Tahun Menjabat
                                                            diorganisasi</label>
                                                        <input type="text" name="tahun_menjabat2" id="tahun_menjabat2"
                                                            placeholder="Masukkan Tahun Menjabat sampai akhir" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="organisasi3" class="form-label">Organisasi 3</label>
                                                        <input type="text" name="organisasi3" id="organisasi3"
                                                            placeholder="Masukkan Nama Organisasi3" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jabatan3" class="form-label">Jabatan Organisasi 3</label>
                                                        <input type="text" name="jabatan3" id="jabatan3"
                                                            placeholder="Masukkan Jabatan Organisasi3" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun_menjabat3" class="form-label">Tahun Menjabat
                                                            diorganisasi</label>
                                                        <input type="text" name="tahun_menjabat3" id="tahun_menjabat3"
                                                            placeholder="Masukkan Tahun Menjabat sampai akhir" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#moto" aria-expanded="false"
                                                    aria-controls="moto">
                                                    Moto Hidup
                                                </button>
                                            </h2>
                                            <div id="moto" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body">
                                                    <textarea name="moto" id="moto" rows="10" placeholder="Masukkan moto anda" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mt-3 d-flex justify-content-end">
                                        <a href="" class="btn btn-danger me-2">Batal</a>
                                        <button type="submit" class="btn-submit">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
