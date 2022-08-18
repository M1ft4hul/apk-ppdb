<?= $this->extend('template/template_frontend') ?>
<?= $this->section('content'); ?>
<!-- ini isi halaman -->
    <section class="my-5 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                            <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Petunjuk Teknis <br /> Penerimaan Siswa Baru</h3>
                                    <p class="text-white opacity-8"></p>
                                </div>
                            </div>
                            <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">Tujuan Juknis</h3>
                                    <p class="text-white opacity-8"> Petunjuk teknis digunakan untuk sebagai panduan agar tercapai kesamaan pengertian dan tindakan dalam melaksanakan pendaftaran siswa baru.</p>
                                    <a href="<?= base_url()?>/dahboard/docs/juknis-ppdb-2022.pdf" download="juknis-ppdb-2022" class="btn btn-white btn-sm w-50 mx-auto mt-3">click here to download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ms-auto">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                                <h5 class="font-weight-bolder mt-3">Pendaftaran</h5>
                                <p class="pe-5">Calon peserta didik melakukan pendaftaran secara daring, kemudian mencetak kartu dan menyetor ke sekolah pilihan pertama.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
                                <h5 class="font-weight-bolder mt-3">Validasi</h5>
                                <p class="pe-3">Panitia sekolah menerima dan melakukan verifikasi berkas calon peserta didik baru.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mt-5">
                        <div class="col-md-6 mt-3">
                            <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
                            <h5 class="font-weight-bolder mt-3">Seleksi</h5>
                            <p class="pe-5">Sistem PPDB melakukan seleksi dan menetapkan calon peserta didik yang dinyatakan lulus/tidak lulus sesuai kuota.</p>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                                <h5 class="font-weight-bolder mt-3">Pengumuman</h5>
                                <p class="pe-3">Pengumuman hasil PPDB secara daring oleh masing-masing sekolah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>