<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Portfolio.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     {{-- link css --}}
     <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
     {{-- link font --}}
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
     {{-- bootsrap icon --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  </head>
  <body>
    

    <section id="dashboard">
        <div class="row">
            <div class="col-2">
                <div class="card card1">
                    <p class="title mb-4">{{ auth()->user()->username }}</p>

                    <div class="menu">
                        <div class="py-2">
                            <a href="/dashboard" class="active"><i class="bi bi-house-check-fill me-2"></i> Dashboard</a>
                        </div>
                        <div class="py-2">
                            <a href="{{ route('index.tema') }}"><i class="bi bi-image-fill me-2"></i> Portfolio</a>
                        </div>
                        <div class="py-2">
                            <a href="{{ route('logout') }}"><i class="bi bi-power me-2"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="card2">
                    <div class="card">
                        <h2 class="p-4">Halaman Dashboard</h2>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card mt-3 p-4" style="height: 75vh;">
                                <h5>Data Pribadi</h5>
                                <div class="row mt-4">
                                    <div class="col-5">
                                        <p>Username</p>
                                        <p>Agama</p>
                                        <p>Kewarganegaraan</p>
                                    </div>
                                    <div class="col-7">
                                        <p>: {{ auth()->user()->username}}</p>
                                        {{-- <p>: {{ \Carbon\Carbon::parse(auth()->user()->tanggal_lahir)->isoFormat('D MMMM Y') }}</p> --}}
                                        <p>: {{ auth()->user()->agama }}</p>
                                        <p>: {{ auth()->user()->kewarganegaraan }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card mt-3 p-4" style="height: 75vh; overflow: auto;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <h5>Tema 1</h5>
                                            <img src="{{ asset('assets/img/tema1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <h5>Tema 2</h5>
                                            <img src="{{ asset('assets/img/tema2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <h5>Tema 3</h5>
                                            <img src="{{ asset('assets/img/tema3.png') }}" alt="">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>