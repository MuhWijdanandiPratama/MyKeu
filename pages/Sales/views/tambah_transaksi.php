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
          <a class="nav-link " href="stok.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-box-open text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Stok</span>
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
        <a href="transaksi.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
          </span>
          <span class="text">Kembali</span>
        </a>
      </div>
      <div class="card-body">
        <form action="../proccess/simpan_transaksi.php" method="post" onsubmit="cekJmlProduk(event); cekExpired(event)">
          <!-- <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div> -->
          <div class="form-group" id="info">
            <!-- <div class="alert alert-primary text-white">
              A simple primary alert—check it out!
            </div> -->
          </div>
          <div class="form-group">
            <label>ID Produk</label>
            <!-- <input name="kode" type="text" required class="form-control" placeholder="Masukkan Kode Produk"> -->
            <?php
            require '../../../pages/koneksi.php';

            $result = mysqli_query($koneksi, "SELECT id_produk, Kode_produk, Jenis_produk, id_kemasan, Harga_produk from produk");
            $rows = []; // tempat kosong
            while ($row = mysqli_fetch_assoc($result)) {
              $rows[] = $row;
            }

            ?>

            <select name="id_produk" placeholder="pilih ID produk" class="form-control" required onchange="getDataProduk(this.value)">
              <?php foreach ($rows as $produk) { ?>
                <option value="" disabled selected hidden>pilih ID produk</option>
                <!-- <option value="<? //= $produk["Kode_produk"] 
                                    ?>"><? //= $produk["Kode_produk"] 
                                        ?></option> -->
                <option value="<?= $produk["id_produk"] ?>" readonly><?= $produk["id_produk"] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Kode Produk</label>
            <input name="kode" type="teks" required class="form-control" id="kode_produk" placeholder="Masukkan Kode Produk" readonly>
          </div>
          <div class="form-group">
            <label>Jenis Produk</label>
            <input name="jenis" type="teks" required class="form-control" id="jenis_produk" placeholder="Masukkan Jenis Produk" readonly>
          </div>
          <div class="form-group">
            <label>Jenis Kemasan</label>
            <input name="kemasan" type="teks" required class="form-control" id="jenis_kemasan" placeholder="Masukkan Jenis Kemasan" readonly>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input name="harga" type="teks" required class="form-control" id="harga" placeholder="Harga" readonly>
          </div>
          <div class="form-group">
            <label>Jumlah Order <span id="jumlah_produk_span">
                <!-- kasih validasi jika inputan melebihi stok -->
              </span> </label>
            <input name="keluar" type="number" required class="form-control" placeholder="Masukkan Order" id="jumlah_produk" onkeyup="subtotal()">
          </div>
          <div class="form-group">
            <label>Total</label>
            <input name="total" type="number" required class="form-control" placeholder="Total" id="total" readonly>
          </div>
          <div class="form-group">
            <!-- buat ngirim tgl_expired ke simpan_transaksi.php -->
            <input name="tgl_expired" type="hidden" required class="form-control" id="exp">
          </div>
          <div class="form-group">
            <label>Outlet</label>
            <?php

            $result = mysqli_query($koneksi, "SELECT * FROM mitra");
            $rows = []; // tempat kosong
            while ($row = mysqli_fetch_assoc($result)) {
              $rows[] = $row;
            }

            ?>

            <select name="outlet" class="form-control" required onchange="getDataMitra(this.value)">
              <?php foreach ($rows as $produk) { ?>
                <option value="" disabled selected hidden>pilih outlet</option>
                <option value="<?= $produk["id_mitra"] ?>"><?= $produk["nama"] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" id="alamat" readonly required class="form-control" cols="50" rows="10" placeholder="Masukkan Alamat"></textarea>
            <!-- <input name="outlet" type="teks" required class="form-control" placeholder="Masukkan Alamat"> -->
          </div>
          <div class="form-group">
            <label>No. Hp</label>
            <input name="hp" type="tel" id="hp" readonly required class="form-control" placeholder="Masukkan No Hp">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> Reset</button>
          </div>
        </form>
      </div>
    </div>
  </main>
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
    let jumlah_produk = '';

    function getDataProduk(id_produk) {
      // if (str == "") {
      //   document.getElementById("txtHint").innerHTML = "";
      //   return;
      // }
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        // document.getElementById("jenis_produk").value = this.responseText;
        const datas = this.responseText;
        const data = datas.split("~");

        console.log(this.responseText);
        console.log(data);

        document.getElementById("kode_produk").value = data[0];
        document.getElementById("jenis_produk").value = data[1];

        if (data[2] == '1') {
          document.getElementById("jenis_kemasan").value = 'A';
        } else if (data[2] == '2') {
          document.getElementById("jenis_kemasan").value = 'B';
        } else if (data[2] == '3') {
          document.getElementById("jenis_kemasan").value = 'C';
        } else if (data[2] == '4') {
          document.getElementById("jenis_kemasan").value = 'D';
        } else if (data[2] == '5') {
          document.getElementById("jenis_kemasan").value = 'E';
        } else if (data[2] == '6') {
          document.getElementById("jenis_kemasan").value = 'F';
        } else if (data[2] == '7') {
          document.getElementById("jenis_kemasan").value = 'Au';
        } else if (data[2] == '8') {
          document.getElementById("jenis_kemasan").value = 'Bu';
        } else if (data[2] == '9') {
          document.getElementById("jenis_kemasan").value = 'Cu';
        } else if (data[2] == '10') {
          document.getElementById("jenis_kemasan").value = 'Du';
        } else {
          return false;
        }

        document.getElementById("harga").value = data[3];
        document.getElementById("jumlah_produk_span").innerText = "<\ Stok: " + data[4] + " \>";
        jumlah_produk = data[4];
        cekStok(data[4]);
        cekExpired(data[5]);
        document.getElementById("exp").value = data[5];

      }
      // xhttp.open("GET", "getDataProduk.php?kode=" + kode_produk);
      xhttp.open("GET", "../proccess/getDataProduk.php?id=" + id_produk);
      xhttp.send();
    }

    function cekStok(stok) {
      if (stok == 0) {
        document.getElementById("jumlah_produk").setAttribute("readonly", "");
        document.getElementById("jumlah_produk").setAttribute("placeholder", "stok habis!");
        alert("Stok produk habis!");
        document.location.reload(true);
      }
    }

    function subtotal() {
      const total = document.getElementById("total");
      const jumlah = document.getElementById("jumlah_produk").value;
      const harga = document.getElementById("harga").value;

      total.value = jumlah * harga;
    }

    function getDataMitra(id_mitra) {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        const datas = this.responseText;
        const data = datas.split("~");

        console.log(this.responseText);
        console.log(data);

        document.getElementById("alamat").innerText = data[0];
        document.getElementById("hp").value = data[1];
      }
      xhttp.open("GET", "../proccess/getDataMitra.php?id=" + id_mitra);
      xhttp.send();
    }

    function cekJmlProduk(event) {
      // const jumlah_produk = document.getElementById("jumlah_produk_span").textContent;
      const jumlah_order = document.getElementById("jumlah_produk").value;

      if (parseInt(jumlah_produk) < parseInt(jumlah_order)) {
        event.preventDefault();
        alert('Jumlah Order yang Anda inputkan melebihi Jumlah Produk yang tersedia! Harap tidak melebihi Jumlah Produk!');
      }

    }

    function cekExpired(tgl_expired) {
      console.log(tgl_expired);

      // Set the date we're counting down to
      // var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();
      const expired = new Date(tgl_expired).getTime() - 25200000; // dikurangi 7 jam agar tepat waktu WIB
      console.log(expired);

      // Update the count down every 1 second
      const x = setInterval(function() {

        // Get today's date and time
        const now = new Date().getTime();

        // Find the distance between now and the count down date
        const distance = expired - now;

        // Time calculations for days, hours, minutes and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        console.log(days, hours, minutes, seconds);

        //   // Display the result in the element with id="demo"
        //   document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        //     minutes + "m " + seconds + "s ";

        const info = document.getElementById("info");

        // If the count down is finished, write some text
        if (days <= 0) {
          clearInterval(x);
          // document.getElementById("demo").innerHTML = "EXPIRED";
          const alert = document.createElement("div");
          alert.setAttribute("class", "alert alert-primary text-white");
          alert.innerText = `Produk ini telah expired!`;
          info.appendChild(alert);
          setTimeout(() => {
            info.removeChild(alert);
          }, 5000);
        } else if (days < 3) {
          clearInterval(x);
          // document.getElementById("demo").innerHTML = "EXPIRED";
          const alert = document.createElement("div");
          alert.setAttribute("class", "alert alert-primary text-white");
          alert.innerText = `Produk ini akan expired ${days} hari lagi!`;
          info.appendChild(alert);
          setTimeout(() => {
            info.removeChild(alert);
          }, 5000);
        }
      }, 1000);
    }

    function cekExpiredProduk(tgl_expired) {
      console.log(tgl_expired);

      // Set the date we're counting down to
      // var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();
      const expired = new Date(tgl_expired).getTime() - 25200000; // dikurangi 7 jam agar tepat waktu WIB
      console.log(expired);

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

        console.log(days, hours, minutes, seconds);

        //   // Display the result in the element with id="demo"
        //   document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        //     minutes + "m " + seconds + "s ";

        //   // If the count down is finished, write some text
        //   if (distance < 0) {
        //     clearInterval(x);
        //     document.getElementById("demo").innerHTML = "EXPIRED";
        //   }
      }, 1000);
    }
  </script>
</body>