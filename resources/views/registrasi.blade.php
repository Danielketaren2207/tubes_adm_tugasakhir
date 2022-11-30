<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2f0ab3af8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="jamdigital" href="css/jamdigital.css">
    <style>
        table, th, td {
          border: 1px solid black;
        }
    </style>
    <title>Website</title>
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="btn btn-outline-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fa-solid fa-bars"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ms-2">
            <a class="nav-link active" aria-current="page" href="index.html"><i class="fa-solid fa-house"></i> Home</a>
          </li>
        </ul>
        <a class="btn btn-outline-light mx-auto ms-6" id="jamdigital"></a>
        <span class="">
          <div class="dropdown-center">
            <button class="btn btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i> Fadhil Muhammad Lubis 211402023
            </button>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
              <li><a class="dropdown-item" href="profil.html">Profil</a></li>
              <li><a class="dropdown-item" href="#">Kontak</a></li>
              <li><hr class="dropdown-divider"></li>
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
      <div>
        <a href="profil.html" class="btn">Profil</a></br>
        <a href="registrasi.html " class="btn">Registrasi</a></br>
        <a href="" class="btn">Status Tugas Akhir</a></br>
        <a href="" class="btn">Registrasi Wisuda</a></br>
        <a href="" class="btn">Cetak Berkas</a></br>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card mt-5">
        <div class="card-header pt-3">
          <h2>Portal Akademik</h2>
          <p>Registrasi Mahasiswa</p>
        </div>
        <div class="card-body">
          <h5 class="card-title">Data Keaktifan Fadhil Muhammad Lubis 211402023</h5>
          <table class="card-text text-center" style="width: 100%;">
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Semester</th>
                <th colspan="2">Registrasi</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
            <tr>
                <th>1</th>
                <th>Ganjil 2021/2022</th>
                <th>Aktif</th>
                <th>2021-04-28</th>
                <th>Telah Diregistrasi</th>
            </tr>
            <tr>
                <th>2</th>
                <th>Ganjil 2021/2022</th>
                <th>Aktif</th>
                <th>2021-01-06</th>
                <th>Telah Diregistrasi</th>
            </tr>
            <tr>
                <th>3</th>
                <th>Semester Antara 2022/2023</th>
                <th>Tidak Aktif</th>
                <th>-</th>
                <th>Belum Melakukan Registrasi</th>
            </tr>
            <tr>
                <th>4</th>
                <th>Ganjil 2021/2022</th>
                <th>Aktif</th>
                <th>2022-08-16</th>
                <th>Telah Diregistrasi</th>
            </tr>
          </table>
        </div>
      </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="js/jamdigital.js"></script>
</body>
</html>