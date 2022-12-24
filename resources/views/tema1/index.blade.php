<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Portfolio.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                            <a href="/dashboard"><i class="bi bi-house-check-fill me-2"></i> Dashboard</a>
                        </div>
                        <div class="py-2">
                            <a href="{{ route('index.tema') }}" class="active"><i class="bi bi-image-fill me-2"></i>
                                Portfolio</a>
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
                        <h4 class="p-4">Template <span style="color: #57B5E0;">Portfolio</span></h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card p-4">
                                <div class="d-flex">
                                    <h5 class="fw-bold"></h5>
                                    <div class="ms-auto">

                                        <a href="{{ route('create.tema') }}" class="btn btn-primary"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                                                class="bi bi-file-earmark-plus-fill"></i> Tambah Data Portfolio</a>
                                        {{-- <a href="{{ route('create.tema2') }}" class="btn btn-primary"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                                                class="bi bi-file-earmark-plus-fill"></i> Tambah Tema2</a> --}}
                                    </div>
                                </div>

                                <div class="table-responsive text-nowrap mt-4">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Id Tema</th>
                                                <th>Nama Pemilik</th>
                                                <th>Pekerjaan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tema as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }} .</td>
                                                <td>
                                                    <img src="/storage/{{ $item->foto }}" width="100px"
                                                    alt="">
                                                </td>
                                                <td>{{ $item->id_tema }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->pekerjaan }}</td>
                                                <td class="text-center">

                                                        {{-- <a href={{ $item->id_tema == "tema1" ? "tema/show/$item->id" : "tema2/show/$item->id" }}
                                                            class="btn btn-primary"><i class="bi bi-eye-fill"></i></a> --}}
                                                        <a href= 
                                                        @if ($item->id_tema == "tema1")
                                                            {{ "tema/show/$item->id" }}
                                                        @elseif ($item->id_tema == "tema2")
                                                            {{ "tema2/show/$item->id" }}
                                                        @else
                                                            {{ "tema3/show/$item->id" }}
                                                        @endif
                                                            class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>

                                                        <a href="tema/edit/{{ $item->id }}"
                                                            class="btn btn-success" name="edit"><i
                                                                class="bi bi-pencil-square"></i></a>

                                                        <form action="tema/{{ $item->id }}" method="post"
                                                            style="display: contents">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
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
