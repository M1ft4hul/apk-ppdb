<?= $this->extend('template/template_frontend') ?>
<?= $this->section('content'); ?>

<section>
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                <h3 class="text-center">Cek Pengumuman</h3>
                <form role="form" id="contact-form" method="post" autocomplete="off">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">NISN</label>
                                    <input class="form-control" aria-label="nisn..." type="text">
                                </div>
                            </div>
                            <div class="col-md-6 ps-2">
                                <div class="input-group input-group-dynamic">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    <input class="form-control datepicker" placeholder="Tanggal Lahir" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>