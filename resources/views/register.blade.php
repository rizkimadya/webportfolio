<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link rel="stylesheet" href="{{ asset('assets/css/regis.css') }}">
    {{-- link font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    

    <section id="registrasi">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mt-5 mb-4">Halaman <span> Registrasi</span></h1>
                </div>
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('register.action') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row p-4">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input class="form-control" type="text" name="username" id="username" placeholder="masukkan username">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="form-control" type="password" name="password" id="password" placeholder="masukkan password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="agama" class="form-label">Agama</label>
                                        <input type="text" name="agama" id="agama"
                                            placeholder="Masukkan Agama anda" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan" id="kewarganegaraan"
                                            placeholder="Masukkan Kewarganegaraan anda" class="form-control">
                                    </div>
                                  
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn-danger" href="{{ route('login') }}">Back</a>
                                        <button class="btn btn-success ms-2">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>