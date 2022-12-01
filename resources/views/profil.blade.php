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
        <button class="btn btn-outline-light mx-auto ms-6" id="jamdigital"></button>
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
        <a href="registrasi.html" class="btn">Registrasi</a></br>
        <a href="" class="btn">Status Tugas Akhir</a></br>
        <a href="registrasiwisuda.html" class="btn">Registrasi Wisuda</a></br>
        <a href="" class="btn">Cetak Berkas</a></br>
      </div>
    </div>
  </div>
  
  <!--Isi Utama-->
  <div class="container card bg-light my-5">
    <div class="row">
      <div class="col-2 d-none d-lg-block">
        <div class="m-3">
          <center><div class="card"><img src="https://images-platform.99static.com//jUK1r-2WsP_uOqdj0J7_33QMBRw=/162x73:951x862/fit-in/500x500/projects-files/49/4994/499471/66c35449-22d5-4a1d-8751-52a2c0def055.jpg" alt="" style="height: 100%; width: 100%;"></div></center>
        </div>  
      </div>
      <div class="col-10">
        <div class="my-5">
          <h2>Fadhil Muhammad Lubis</h2>
          <h4>211402023</h4>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col m-3">
        <h4>User Details</h4></br>
        <div>

          <h5>Email:</h5>
          <p>fadhilml03@gmail.com</p></br>

          <h5>Tempat Tanggal Lahir:</h5>
          <p>Kisaran, 20 November 2003</p></br>

          <h5>Nomor Hp:</h5>
          <p>082273084517</p></br>

          <h5>Dosen Pembimbing:</h5>
          <ol>
            <li>Akan Segera Ditambahkan</li>
            <li>Akan Segera Ditambahkan</li>
          </ol></br>

          <h5>Dosen Penguji:</h5>
          <ol>
            <li>Akan Segera Ditambahkan</li>
            <li>Akan Segera Ditambahkan</li>
          </ol></br>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="js/jamdigital.js"></script>
</body>
</html>