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
        LAPORAN PENGELUARAN
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


<body onload="window.print(); window.onafterprint = function(event) {window.location.href = '../views/laporan_pengeluaran.php'}" class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <main class="main-content position-relative border-radius-lg ">
        <div class="container-fluid py-4">
            <?php
            require "../includes/pengeluaran.php";

            $rows;
            $i = $_GET['i'];

            if ($i === '1') {
                $tgl1 = $_GET['tgl1'];
                $tgl2 = $_GET['tgl2'];

                $rows = getFilteredPengeluaran($tgl1, $tgl2);
            } else {
                $rows = getAllPengeluaran();
            }

            $no = 1;
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 class="text-center">LAPORAN PENGELUARAN</h6>
                            <?php if ($i === '1') : ?>
                                <h6 class="text-center">
                                    DARI <?= date_format(date_create($tgl1), 'd M Y') ?> SAMPAI <?= date_format(date_create($tgl2), 'd M Y') ?>
                                </h6>
                            <?php endif; ?>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Pengeluaran</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($rows as $row) : ?>
                                            <tr>
                                                <td>
                                                    <div class="my-auto">
                                                        <!-- <h6 class="mb-0 text-sm text-center">1</h6> -->
                                                        <p class="text-sm font-weight-bold mb-0"><?= $no++ ?></p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0">
                                                        Rp<?= number_format($row['pengeluaran'], 2, ',', '.') ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <!-- <span class="badge badge-sm bg-gradient-success">Online</span> -->
                                                    <p class="text-sm font-weight-bold mb-0">
                                                        <?= $row['keterangan'] ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                    <p class="text-sm font-weight-bold mb-0">
                                                        <?= date_format(date_create($row['tgl_pengeluaran']), 'd M Y') ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>