@extends('partials.userdashboard_partials')

@section('content')
    {{-- Form Login --}}
    <div style="margin-top: 100px"></div>
        <main class="form-register">
        </main>
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif
            <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
            <form action="{{ route('pendaftaran') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="text" name="nama" class="form-control rounded-top mt-3" id="name" placeholder="Name">
                    <label for="name">Nama</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="nik" class="form-control mt-3" id="username" placeholder="NIK">
                    <label for="username">NIK</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="alamat" class="form-control mt-3" id="email" placeholder="Alamat">
                    <label for="email">Alamat</label>
                </div>

                <div class="form-floating">
                    <input type="text" name="nama_ibu" class="form-control mt-3" id="email" placeholder="Nama Ibu">
                    <label for="email">Nama Ibu</label>
                </div>

                <div class="form-floating">
                    <input type="text" name="nama_ayah" class="form-control mt-3" id="email" placeholder="Nama Ayah">
                    <label for="email">Nama Ayah</label>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label mt-3">File Kartu Keluarga</label>
                    <input class="form-control" name="file_kk" type="file" id="formFile">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label mt-3">File Akta Kelahiran</label>
                    <input class="form-control" name="file_akta_kelahiran" type="file" id="formFile">
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">Register</button>
            </form>
        </div>

        </main>

    @endsection
