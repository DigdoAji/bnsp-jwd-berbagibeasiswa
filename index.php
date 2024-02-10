<?php

include './config/koneksi.php';
session_start();

$nama = $_SESSION['nama'];

if (!isset($_SESSION['id_admin'])) {
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    echo "<script>alert('Anda belum login, Silahkan login Dahulu!');</script>";
}

?>

  <!-- header -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berbagi Beasiswa Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  </head>
  <body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark px-4 px-md-4 py-3" style="background-color: #337CCF !important;">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-weight: bolder; font-size: larger; pointer-events: none" href="#">BerbagiBeasiswa</a>
          <button class="navbar-toggler" type="button" id="drawerButton" data-bs-toggle="collapse" data-bs-target="#navDropdown" aria-controls="navDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navDropdown">
            <ul class="navbar-nav ms-2 me-auto mt-lg-0">
              <li class="nav-item mx-md-1">
                <a class="nav-link <?php if(empty($_GET)){ echo 'fw-bold active'; }; ?>" aria-current="page" href="index.php">Pilihan Beasiswa</a>
              </li>
              <li class="nav-item mx-md-1">
                <a class="nav-link
                <?php if(isset($_GET['p']) && $_GET['p'] == 'daftar-beasiswa'){ echo 'fw-bold active'; }; ?>" href="index.php?p=daftar-beasiswa">Daftar</a>
              </li>
              <li class="nav-item mx-md-1">
                <a class="nav-link <?php if(isset($_GET['p']) && $_GET['p'] == 'hasil-beasiswa'){ echo 'fw-bold active'; }; ?>" href="index.php?p=hasil-beasiswa">Hasil</a>
              </li>
              <li class="nav-item mx-md-1">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
            <div class="d-flex">
              <span class="nav-link text-white fw-bold" tabindex="-1">Hai <?php echo $nama ?>!</span>
            </div>
          </div>
        </div>
    </nav>
    <!-- content -->
    <article class="mt-4 mb-5">
        <?php

            if (isset($_GET['p']) && $_GET['p'] == 'daftar-beasiswa') {
                include './views/daftar-beasiswa.php';
            } elseif (isset($_GET['p']) && $_GET['p'] == 'hasil-beasiswa') {
                include './views/hasil-beasiswa.php';
            } elseif (isset($_GET['p']) && $_GET['p'] == 'edit-beasiswa') {
                include './views/edit-beasiswa.php';
            } elseif (empty($_GET)) {
                include './views/beasiswa.php';
            } else {
                include './views/beasiswa.php';
            }

        ?>
    </article>
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        // Membuat referensi elemen-elemen untuk visibilitas input
        var ipkInput = $("#ipk");
        var beasiswaSelect = $("#input_beasiswa");
        var berkasInput = $("#input_berkas");
        var valIpk = $("#val_ipk");

        // Menambahkan event listener untuk input nilai IPK
        ipkInput.on("input", function() {
            var ipkValue = parseFloat(ipkInput.val());

            // Menyembunyikan atau menampilkan input beasiswa dan berkas berdasarkan input nilai IPK
            if (ipkValue >= 3.00 && ipkValue <= 4.00) {
                valIpk.css("display", "none");
                beasiswaSelect.css("display", "block");
                berkasInput.css("display", "block");
            } else {
                valIpk.css("display", "block");
                beasiswaSelect.css("display", "none");
                berkasInput.css("display", "none");
            }
        });

      });
    </script>
  </body>