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
            <a class="nav-link active" aria-current="page" href="index.html"><i class="fa-solid fa-house"></i> Home</a>
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
      <div>
        <a href="profil.html" class="btn">Profil</a></br>
        <a href="registrasi.html" class="btn">Registrasi</a></br>
        <a href="" class="btn">Status Tugas Akhir</a></br>
        <a href="registrasiwisuda.html" class="btn">Registrasi Wisuda</a></br>
        <a href="" class="btn">Cetak Berkas</a></br>
      </div>
    </div>
  </div>

  <!-- body -->
  <div class="container my-5">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="https://i.ibb.co/djh8VkX/Tugas-Akhir.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tugas Akhir 1</h5>
              <p class="card-text">Panduan Proses Tugas Akhir</p>
              <a href="" class="btn btn-dark d-block">Download</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://i.ibb.co/7WSgftk/Tugas-Akhir-2.jpg    " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tugas Akhir 1</h5>
                <p class="card-text">Panduan Proses Tugas Akhir</p>
                <a href="" class="btn btn-dark d-block">Download</a>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
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