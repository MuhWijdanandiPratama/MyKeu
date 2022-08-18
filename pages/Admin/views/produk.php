<?php

require "../../../pages/session.php";
require "../../../pages/koneksi.php";
if (empty($_SESSION['username'])) { ?>
  <script type="text/javascript">
    alert('Harap Login Terlebih Dahulu!');
    window.location.assign('../../../pages/sign-in.php');
  </script>
<?php }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
  <title>
    MyKeu
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <!-- sidebar -->
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php">
        <!-- <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo"> -->
        <center>
          <h4 class=" font-weight-bold">MyKeu</h4>
        </center>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="produk.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-box-open text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Produk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="transaksi.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Transaksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="dashboard_pengeluaran.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-coins text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pengeluaran</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link " href="stok.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-boxes text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Stok</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link " href="mitra.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-friends text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mitra</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="profile.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../controller/logout.php" onclick="return confirm('Anda Yakin ingin keluar?')">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- end of sidebar -->
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="dashboard.php">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?= $_SESSION['username'] ?></span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="card">
      <div class="card-header">
        <a href="tambah_produk.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambahkan Produk</span>
        </a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>Kode Produk</th>
                <th>Jenis Produk</th>
                <th>Jenis Kemasan</th>
                <th>Rasa</th>
                <th>Jumlah Produk</th>
                <th>Produksi</th>
                <th>Expired</th>
                <th>Netto</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require "../../../pages/koneksi.php";

              $sql = "SELECT * FROM produk JOIN kemasan ON produk.id_kemasan = kemasan.id_kemasan";
              $result = $koneksi->query($sql);
              $rows = [];
              while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
              }

              ?>

              <?php foreach ($rows as $row) : ?>

                <tr class='text-center'>
                  <td> <?= $row['id_produk'] ?> </td>
                  <td> <?= $row['Kode_produk'] ?> </td>
                  <td> <?= $row['Jenis_produk'] ?> </td>
                  <td> <?= $row['Jenis_kemasan'] ?> </td>
                  <td> <?= $row['Rasa'] ?> </td>
                  <td> <?= $row['Jumlah_produk'] ?> </td>
                  <td> <?= date_format(date_create($row['Tanggal_Produksi']), 'd M Y') ?> </td>
                  <td id="exp" data-exp="<?= $row['Tanggal_Expired'] ?>">
                    <?= date_format(date_create($row['Tanggal_Expired']), 'd M Y') ?>
                  </td>
                  <td> <?= $row['Netto'] ?> gr</td>
                  <td>
                    <a href="edit_produk.php?id=<?= $row['id_produk'] ?>" class="btn btn-warning">
                      <i class="fa fa-pen"></i> Edit
                    </a>
                  </td>
                  <td>
                    <a href="../proccess/hapus_produk.php?id=<?= $row['id_produk'] ?>" class="btn btn-danger" id="hapusButton" onclick="return confirm('Anda Yakin ingin menghapus produk ini?')">
                      <i class="fa fa-trash"></i> Hapus
                    </a>
                  </td>
                </tr>

              <?php endforeach; ?>


              <?php
              // while ($row = $result->fetch_assoc()) {
              //   echo "
              //                 
              //           ";
              // }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- footer -->
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              MyKeu
            </div>
          </div>
        </div>
      </div>
      <center>Version 1.0.0</center>
    </footer>

    <script>
      function cekExpiredProduk(element, tgl_expired) {
        // console.log(tgl_expired);

        // Set the date we're counting down to
        // var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();
        const expired = new Date(tgl_expired).getTime() - 25200000; // dikurangi 7 jam agar tepat waktu WIB
        // console.log(expired);

        // Update the count down every 1 second
        const x = setInterval(function() {

          // Get today's date and time
          const now = new Date().getTime();

          // Find the distance between now and the count down date
          // const distance = countDownDate - now;
          const distance = expired - now;

          // Time calculations for days, hours, minutes and seconds
          const days = Math.floor(distance / (1000 * 60 * 60 * 24));
          const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          const seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // console.log(days, hours, minutes, seconds);

          //   // Display the result in the element with id="demo"
          //   document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
          //     minutes + "m " + seconds + "s ";

          //   // If the count down is finished, write some text
          if (days <= 0) {
            clearInterval(x);
            // document.getElementById("demo").innerHTML = "EXPIRED";
            element.style.background = "red";
            element.style.color = "#fff";
          } else if (days < 3) {
            clearInterval(x);
            // document.getElementById("demo").innerHTML = "EXPIRED";
            element.style.background = "red";
          }
        }, 1000);
      }

      const exp = document.querySelectorAll("#exp");
      console.log(exp);

      for (let i = 0; i < exp.length; i++) {
        const element = exp[i];
        const tgl_exp = exp[i].getAttribute('data-exp');
        console.log(element, tgl_exp);

        cekExpiredProduk(element, tgl_exp);
      }
    </script>

</body>