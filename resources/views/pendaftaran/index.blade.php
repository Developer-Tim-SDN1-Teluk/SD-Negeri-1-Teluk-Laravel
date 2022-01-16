<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SD Negeri 1 Teluk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}assets/img/kemendikbud.png" rel="icon">


    <!-- Google Fonts -->
    <link href="{{ asset('') }}https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS Files -->
    <link href="{{ asset('') }}assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">
    {{-- Bootstrap  Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    {{-- Style CSS login --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1 class="text-light">
                    <a href="index.html">
                        <img src="{{ asset('') }}assets/img/logo.png"></a>
                </h1>
            </div>

            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active " href="index.html">Beranda</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Profile</a>
                            <div class="dropdown-content">
                                <a href="profile.html">Visi dan Misi</a>
                                <a href="guru.html">Guru dan Karyawan</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Fasilitas</a>
                            <div class="dropdown-content">
                                <a href="perpustakaan.html">Perpustakaan</a>
                                <a href="ruangguru.html">Ruang Guru</a>
                                <a href="mushola.html">Mushola</a>
                                <a href="kantin.html">Kantin</a>
                                <a href="ruanglab.html">Ruang Lab</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="berita.html">Berita</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Galeri</a>
                            <div class="dropdown-content">
                                <a href="galerifoto.html">Galeri Foto</a>
                                <a href="galerivideo.html">Galeri Video</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="kontak.html">Kontak</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link">
                            <i class="bi bi-box-arrow-right"></i> Login </a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                {{-- Menu Login & Regis --}}
                {{-- <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="/login" class="nav-link"> Login </a>
                    </li>
                </ul> --}}
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    {{-- Form Login --}}
    <main class="form-register">
    </main>
    <div class="container">
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

            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
        </form>
    </div>

    </main>
    <!-- End #main -->
    <div class="mt-3"></div>
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SD Negeri 1 Teluk</span></strong>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}assets/js/main.js"></script>

</body>

</html>
