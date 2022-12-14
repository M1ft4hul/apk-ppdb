<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>














  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/dahboard/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url() ?>/dahboard/assets/img/Categories-applications-education-university-icon.png">

  <title><?= $title; ?> </title>



  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="<?= base_url() ?>/dahboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/dahboard/assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->



  <link id="pagestyle" href="<?= base_url() ?>/dahboard/assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />



</head>

<body class="index-page bg-gray-200">


  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="https://demos.creative-tim.com/material-kit/index" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
              Aplikasi PPDB
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">

                <!-- ini untuk menu -->
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a href="<?= base_url('/home') ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                    Dashboard
                  </a>
                </li>

                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a href="<?= base_url('/about') ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                    Tentang PPDB
                  </a>
                </li>

                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a href="<?= base_url('/pengumuman') ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                    Pengumuman PPDB
                  </a>
                </li>

                <!-- menu login -->
                <li class="nav-item my-auto ms-3 ms-lg-0">

                  <a href="<?= base_url('/loginSiswa') ?>" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Login</a>

                </li>
                <!-- menu login -->
                <!-- ini untuk menu -->
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>

  <header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('<?= base_url() ?>/dahboard/assets/img/bg2.jpg')">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Penerimaan Peserta Didik Baru (PPDB)</h1>
            <p class="lead text-white mt-3">This application is used for registration of new students in high school <br> Please read the registration requirements document below
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- isi content halaman -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <?= $this->renderSection('content') ?>
  </div>

  <!-- isi content halaman -->

  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">

        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              Aplikasi Penerimaan Peserta Didik Baru (PPDB). Copyright ?? <script>
                document.write(new Date().getFullYear())
              </script> by <a href="https://www.shutterstock.com/g/MJ+Cutter?rid=275030667" target="_blank">MjCutter</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>/dahboard/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>/dahboard/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>/dahboard/assets/js/plugins/perfect-scrollbar.min.js"></script>




  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="<?= base_url() ?>/dahboard/assets/js/plugins/countup.min.js"></script>





  <script src="<?= base_url() ?>/dahboard/assets/js/plugins/choices.min.js"></script>



  <script src="<?= base_url() ?>/dahboard/assets/js/plugins/prism.min.js"></script>
  <script src="<?= base_url() ?>/dahboard/assets/js/plugins/highlight.min.js"></script>



  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="<?= base_url() ?>/dahboard/assets/js/plugins/rellax.min.js"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="<?= base_url() ?>/dahboard/assets/js/plugins/tilt.min.js"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="<?= base_url() ?>/dahboard/assets/js/plugins/choices.min.js"></script>


  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="<?= base_url() ?>/dahboard/assets/js/plugins/parallax.min.js"></script>











  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="<?= base_url() ?>/dahboard/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>

  <!-- <script>
    if (document.querySelector(".datepicker")) {
      flatpickr(".datepicker", {});
    }
  </script> -->
  
</body>

</html>