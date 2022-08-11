<?= $this->include('auth/komponen/head') ?>

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

                    <!-- isi login -->
                    <?= $this->renderSection('content') ?>
                    <!-- isi login -->
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
                <img src="<?= base_url() ?>/foto_kota/Computerbiru.gif" alt="" srcset="">
            </div>
        </div>
    </div>


    <?= $this->include('auth/komponen/js') ?>