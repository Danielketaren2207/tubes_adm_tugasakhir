<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/2f0ab3af8f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="jamdigital" href="css/jamdigital.css">
  <title>Website</title>
</head>

<body class="">
  <!-- Header -->
  <div class="row">
    <div class="col-10"></div>
    <div class="col-2"></div>
  </div>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ms-2">
            <a class="btn btn-outline-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample"><i class="fa-solid fa-bars"></i></a>    
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link active" aria-current="page" href="index.html"><i class="fa-solid fa-house"></i> Home</a>
          </li>
        </ul>
        <a class="btn btn-outline-light mx-auto ms-6 .d-none .d-md-block .d-xl-none .d-xxl-none" id="jamdigital"></a>
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
              <li><a class="dropdown-item" href="/loginakun">Logout</a></li>
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
        <a href="registrasi.html" class="btn">Registrasi</a></br>
        <a href="" class="btn">Status Tugas Akhir</a></br>
        <a href="registrasiwisuda.html" class="btn">Registrasi Wisuda</a></br>
        <a href="" class="btn">Cetak Berkas</a></br>
      </div>
    </div>
  </div>
  </div>


  <div class="container">
  <!--Gambar USU-->
  <div class="my-3">
    <div
      style="background-image: url('https://i.ytimg.com/vi/RXYwcgqq7tM/maxresdefault.jpg'); width: 100%; height: 100%; background-repeat: no-repeat;"
      class="">
      <div class="my-5">
        <center>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-8">
              <!--empty-->
            </div>
            <div class="col-12 col-sm-12 col-md-4 text-bg-dark opacity-100 py-5 py-5">
              <img
                src="https://elearning2.usu.ac.id/pluginfile.php/1/core_admin/logo/0x200/1668748290/usu-kampusmerdeka.png"
                alt="USUdanKampusMerdeka" class="my-auto pt-5" style="max-width:100%; max-height:100%;">
              <div class="py-5 py-4">
                <h3>Selamat Datang di Portal Tugas Akhir Mahasiswa</h3>
                <h3>Universitas Sumatera Utara</h3>
              </div>
              <div class="d-grid py-2">
                <button class="btn btn-light">Explore Portal</button>
              </div>
            </div>
          </div>
      </center>
      </div>
    </div>
  </div>

  <!-- Isi Website -->
  <div class="py-3">
    <center>
      <h2>Selamat datang di Website Portal Tugas Akhir Mahasiswa USU, apa yang ingin anda lakukan sekarang?</h2>
    </center>
  </div>

  <center>
  <div class="row py-3">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cek Registrasi</h5>
          <p class="card-text">Cek pada semester apa saja anda menjadi mahasiswa aktif</p>
          <a href="#" class="btn btn-dark">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cek Status Tugas Akhir</h5>
          <p class="card-text">Cek sudah sampai sejauh mana proses Tugas Akhir Anda</p>
          <a href="#" class="btn btn-dark">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row py-3 pb-5">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Registrasi Wisuda</h5>
          <p class="card-text">Melihat keperluan-keperluan untuk Wisuda</p>
          <a href="#" class="btn btn-dark">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cetak Berkas</h5>
          <p class="card-text">Mencetak berkas-berkas yang diperlukan untuk Wisuda</p>
          <a href="#" class="btn btn-dark">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</center>

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