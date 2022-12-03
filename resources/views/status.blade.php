<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2f0ab3af8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="jamdigital" href="css/jamdigital.css">
    <title>Document</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="btn btn-outline-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample"><i class="fa-solid fa-bars"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-2">
                        <a class="nav-link active" aria-current="page" href="index.html"><i
                                class="fa-solid fa-house"></i> Home</a>
                    </li>
                </ul>
                <button class="btn btn-outline-light mx-auto ms-6" id="jamdigital"></button>
                <span class="">
                    <div class="dropdown-center">
                        <button class="btn btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i> Fadhil Muhammad Lubis 211402023
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                            <li><a class="dropdown-item" href="profil.html">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Kontak</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                </span>
            </div>
        </div>
    </nav>

    <!--Isi dari offcanvas-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><b>Selamat Datang Fadhil Muhammad Lubis</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <br>
                <a href="profil.html" class="btn">Profil</a></br>
                <a href="registrasi.html" class="btn">Registrasi</a></br>
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Status tugas akhir
                  </button></br>
                  <ul class="dropdown-menu dropdown-menu-light">
                    <li><a class="dropdown-item active" href="#">Pengajuan topik</a></li>
                    <li><a class="dropdown-item" href="#">Pendaftaran Excecutive Summary</a></li>
                    <li><a class="dropdown-item" href="#">Pengajuan Seminar Proposal</a></li>
                    <li><a class="dropdown-item" href="#">Uji Program</a></li>
                    <li><a class="dropdown-item" href="#">Pengajuan Seminar Hasil</a></li>
                    <li><a class="dropdown-item" href="#">Pengajuan Sidang Sarjana</a></li>
                  </ul>
                <a href="registrasiwisuda.html" class="btn">Registrasi Wisuda</a></br>
                <a href="" class="btn">Cetak Berkas</a></br>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="container">
        <h2 class="my-4">Status Tugas Akhir Mahasiswa</h2>
        <h4>Pengajuan Tugas</h4>

        <div class="card d-block py-4 my-3 text-bg-success" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <font size="+2">
                <i class="fa-solid fa-circle-check mx-4"></i><b>Berkas Pengajuan Topik dan Dosen Pembimbing</b>
            </font>
            <div class="collapse" id="collapseExample">
                <div class="card card-body text-bg-success mt-3 mx-4">
                    Excecutive Summary sudah diterima oleh Fakultas/Prodi
                </div>
            </div>
        </div>

        <div class="card d-block py-4 my-3 bg-warning text-white" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
            <font size="+2">
                <i class="fa-solid fa-arrows-rotate mx-4"></i><b>Seminar Proposal</b>
            </font>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body text-white bg-warning mt-3 mx-4">
                    Seminar Proposal anda masih di periksa oleh Fakultas/Prodi
                </div>
            </div>
        </div>

        <div class="card d-block py-4 my-3 text-bg-danger" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
            <font size="+2">
                <i class="fa-solid fa-solid fa-exclamation px-2 mx-4"></i><b>Seminar Hasil</b>
            </font>
            <div class="collapse" id="collapseExample3">
                <div class="card card-body text-bg-danger mt-3 mx-4">
                    Seminar Hasil ditolak oleh Fakultas/Prodi
                </div>
            </div>
        </div>

        <div class="card d-block py-4 my-3">
            <font size="+2">
                <i class="fa-solid fa-circle-dot mx-4"></i><b>Seminar Hasil</b>
            </font>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
    <script src="js/jamdigital.js"></script>
</body>

</html>