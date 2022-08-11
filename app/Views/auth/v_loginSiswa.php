<?= $this->extend('auth/komponen/layout') ?>
<?= $this->section('content'); ?>

<div class="form-content">

    <h1 class="">Log In <a href="<?= base_url('/loginSiswa') ?>"><span class="brand-name">PPDB 2022</span></a></h1>
    <p class="signup-link">Belum Mendaftar? <a href="<?= base_url('/pendaftaranSiswa') ?>">Silahkan Daftar</a></p>

    <!-- validasi -->
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

    <?= form_open('C_Auth/Masuk_loginSiswa'); ?>
    <div class="form">

        <div id="username-field" class="field-wrapper input">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <input id="nisn" name="nisn" type="text" class="form-control" placeholder="NISN">
        </div>

        <div id="username-field" class="field-wrapper input">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <input id="npsn" name="npsn" type="text" class="form-control" placeholder="NPSN">
        </div>

        <div id="password-field" class="field-wrapper input mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
        </div>

        <div id="username-field" class="field-wrapper input">
            <p class="text-danger">*) Gunakan NISN sebagai password!!</p>
        </div>

        <div class="d-sm-flex justify-content-between">
            <div class="field-wrapper toggle-pass">
                <p class="d-inline-block">Lihat Password</p>
                <label class="switch s-primary">
                    <input type="checkbox" id="toggle-password" class="d-none">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="field-wrapper">
                <button type="submit" class="btn btn-primary" value="">Masuk</button>
            </div>

        </div>

    </div>
    <?= form_close(); ?>

</div>

<?= $this->endSection(); ?>