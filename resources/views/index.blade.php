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
            <a class="nav-link active" aria-current="page" href="/"><i class="fa-solid fa-house"></i> Home</a>
          </li>
        </ul>
        <a class="btn btn-outline-light mx-auto ms-6" id="jamdigital"></a>
        <span class="">
          <div class="dropdown-center">
            <button class="btn btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i> Fadhil Muhammad Lubis 211402023
            </button>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
              <li><a class="dropdown-item" href="/profil">Profil</a></li>
              <li><a class="dropdown-item" href="/kontak">Kontak</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
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
    </div>
    <div class="offcanvas-body">
      <div>
        <a href="/profil" class="btn">Profil</a></br>
        <a href="/registrasi" class="btn">Registrasi</a></br>
        <a href="/status" class="btn">Status Tugas Akhir</a></br>
        <a href="/reg_wisuda" class="btn">Registrasi Wisuda</a></br>
        <a href="/cetak" class="btn">Cetak Berkas</a></br>
      </div>
    </div>
  </div>
  
  <!--Isi Utama-->
  <div class="container">
    <center>
      <img src="https://elearning2.usu.ac.id/pluginfile.php/1/core_admin/logo/0x200/1668748290/usu-kampusmerdeka.png" alt="USUdanKampusMerdeka" class="my-auto">
      <h2>Selamat Datang Pada Website Portal Tugas Akhir Mahasiswa USU</h2>
    </center>
      <p style="text-align: justify;">Selamat Datang di Portal Tugas Akhir Mahasiswa Universitas Sumatera Utara. Portal Tugas Akhir ini adalah sistem yang memungkinkan para Mahasiswa Universitas Sumatera Utara untuk menerima informasi tentang tugas akhir dengan lebih cepat melalui Internet. Sistem ini diharapkan dapat memberi kemudahan setiap mahasiswa untuk melakukan aktivitas-aktivitas akademik dan proses pengerjaan tugas akhir.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="js/jamdigital.js"></script>
</body>
</html>