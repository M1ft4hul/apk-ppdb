<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon.ico" />
    <link href="<?= base_url() ?>/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url() ?>/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/forms/switches.css">

    <link href="<?= base_url() ?>/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/elements/alert.css">

</head>

<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Daftar Akun Siswa <a href="<?= base_url('/pendaftaranSiswa') ?>"><span class="brand-name">PPDB 2022</span></a></h1>
                        <p class="signup-link">Sudah Mendaftar? <a href="<?= base_url('/loginSiswa') ?>">Login di sini</a></p>


                        <?php session()->getFlashdata('errors');

                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success mb-4" role="alert"> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg></button> 
                                <strong>SELESAI!</strong> ';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }

                        ?>

                        <?= form_open('C_Auth/simpanPendaftaran'); ?>
                        <div class="form">

                            <div id="username-field" class="field-wrapper input">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <input id="username" value="<?= old('nisn') ?>" name="nisn" type="text" class="form-control" placeholder="NISN">
                                <p class="text-danger"><?= $validation->hasError('nisn') ? $validation->getError('nisn') : '' ?></p>
                            </div>

                            <div id="username-field" class="field-wrapper input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <input id="username" name="npsn" value="<?= old('npsn') ?>" type="text" class="form-control" placeholder="NPSN">
                                <p class="text-danger"><?= $validation->hasError('npsn') ? $validation->getError('npsn') : '' ?></p>

                            </div>

                            <div class="form-row mb-7">
                                <div class="form-group col-md-7">
                                    <div id="email-field" class="field-wrapper input">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                        </svg>
                                        <input id="email" name="nama_siswa" value="<?= old('nama_siswa') ?>" type="text" value="" placeholder="Nama Lengkap">
                                        <p class="text-danger"><?= $validation->hasError('nama_siswa') ? $validation->getError('nama_siswa') : '' ?></p>

                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div id="email-field" class="field-wrapper input">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        <input id="basicFlatpickr" name="tgl_lahir" value="01-01-2020" placeholder="Cari Tanggal..">
                                    </div>
                                </div>
                            </div>

                            <div id="tempat-field" class="field-wrapper input mb-2">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <input id="tempat" name="tempat_lahir" value="<?= old('tempat_lahir') ?>" type="text" value="<?= old('tempat_lahir') ?>" placeholder="Tempat Lahir">
                                <p class="text-danger"><?= $validation->hasError('tempat_lahir') ? $validation->getError('tempat_lahir') : '' ?></p>
                            </div>

                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary" value="">Submit</button>
                                </div>
                            </div>

                        </div>
                        <?= form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
                <img src="<?= base_url() ?>/foto_kota/EnterOTP.gif" alt="" srcset="">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url() ?>/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url() ?>/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url() ?>/assets/js/authentication/form-1.js"></script>
    <script>
        var loaderElement = document.querySelector('#load_screen');
        setTimeout(function() {
            loaderElement.style.display = "none";
        }, 3000);
    </script>


    <script src="<?= base_url() ?>/plugins/flatpickr/custom-flatpickr.js"></script>
    <script src="<?= base_url() ?>/plugins/flatpickr/flatpickr.js"></script>
    <script>
        var f1 = flatpickr(document.getElementById('basicFlatpickr'));
    </script>
</body>

</html>