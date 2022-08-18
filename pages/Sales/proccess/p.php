<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
    <title>
        STRUK TRANSAKSI
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
    <style>
        .center {
            margin: 0 auto;
        }
    </style>
</head>


<body onload="window.print(); window.onafterprint = window.close;" class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <main class="main-content position-relative border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 class="text-center">STRUK TRANSAKSI</h6>
                            <h6 class="text-center">
                                <?php
                                date_default_timezone_set("Asia/Jakarta");
                                echo date("h:i:sa") . " " . date("d-M-Y");
                                ?>
                            </h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="align-items-center mb-0 center" width="300px">
                                    <thead>
                                        <tr>
                                            <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Produk</th>
                                            <td class="text-end text-right text-sm">: </td>
                                            <td class="text-start text-right text-sm">
                                                <p class="text-sm font-weight-bold mb-0">
                                                    <? //= $jenis 
                                                    ?>maem
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kemasan</th>
                                            <td class="text-end text-right text-sm">: </td>
                                            <td class="align-middle text-right text-sm">
                                                <p class="text-sm font-weight-bold mb-0">
                                                    <? //= $kemasan 
                                                    ?> Du
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Transaksi</th>
                                            <td class="text-end text-right text-sm">: </td>
                                            <td class="align-middle text-right text-sm">
                                                <p class="text-sm font-weight-bold mb-0">
                                                    <? //= $keluar 
                                                    ?> 10
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                            <td class="text-end text-right text-sm">: </td>
                                            <td class="align-middle text-right text-sm">
                                                <p class="text-sm font-weight-bold mb-0">
                                                    Rp<? //= number_format($harga, 2, ',', '.') 
                                                        ?> 10000
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                                            <td class="text-end text-right text-sm">: </td>
                                            <td class="align-middle text-right text-sm">
                                                <p class="text-sm font-weight-bold mb-0">
                                                    Rp<? //= number_format($total, 2, ',', '.') 
                                                        ?> 100000
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Outlet</th>
                                            <td class="text-end text-right text-sm">: </td>
                                            <td class="align-middle text-right">
                                                <p class="text-sm font-weight-bold mb-0">
                                                    <? //= $namaOutlet 
                                                    ?> AG ONE
                                                </p>
                                            </td>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                        <tr>






                                        </tr>
                                    </tbody> -->
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