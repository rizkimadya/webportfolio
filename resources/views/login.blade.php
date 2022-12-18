<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
</head>

<body>

    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img src="{{ asset('assets/img/bg_login.png') }}" alt="" width="100%">
                </div>
                <div class="col-md-6 col-12 form">
                    <p class="title">Login Acount</p>
                    <p class="keterangan text-center mb-5">Selamat datang di website portfolio</p>

                    <div class="px-5">
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if (session('wait'))
                            <p class="alert alert-danger">{{ session('wait') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif
                    </div>
                    
                    <form action="{{ route('login.action') }}" method="POST" class="px-5">
                        @csrf
                        <div class="mb-4">
                            <input type="text" class="form-input" name="username" placeholder="Masukkan Username">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-input" name="password" placeholder="Masukkan Password">
                        </div>
                        <div class="mb-4 d-flex justify-content-end">
                            <button class="btn-login">Login</button>
                        </div>
                    </form>

                    <div>
                        <a href="/register" class="text-center d-block">
                            belum memiliki akun? buat akun
                        </a>
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
