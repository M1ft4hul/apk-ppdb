<?= $this->extend('template/template_backendAdmin') ?>
<?= $this->section('content'); ?>

<div class="row layout-top-spacing" id="cancel-row">

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <?php
        if (session()->getFlashdata('tambah_agama')) {
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('tambah_agama');
            echo '</div>';
        }
        ?>

        <?php
        if (session()->getFlashdata('edit')) {
            echo '<div class="alert alert-warning" role="alert">';
            echo session()->getFlashdata('edit');
            echo '</div>';
        }
        ?>

        <div class="widget-content widget-content-area br-6">
            <div class="col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center" style="padding-top: 15px;">
                <div class="dt-buttons">
                    <button class="dt-button btn btn-primary btn-sm toggle-vis mb-1" data-toggle="modal" data-target="#tambah_data">
                        <span><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="12" y1="18" x2="12" y2="12"></line>
                                <line x1="9" y1="15" x2="15" y2="15"></line>
                            </svg>
                            Tambah Data</span>
                    </button>
                </div>
            </div>
            <div class="sweetalert" data-sweetalert="<?= session()->get('hapus_berhasil'); ?>"></div>

            <table id="default-ordering" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Agama</th>
                        <th class="text-center dt-no-sorting">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($agama as $kerja => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['agama'] ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editData<?= $value['id_agama'] ?>"> Edit</button>
                                <a href="<?= base_url('/C_Agama/deleteData/' . $value['id_agama']); ?>" class="btn btn-danger btn-sm"> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Agama</th>
                        <th class="invisible"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>

<!-- modal tambah -->
<div id="tambah_data" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Agama</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <?= form_open('C_Agama/tambahData') ?>

            <div class="modal-body">
                <div class="form-group mb-4">
                    <label for="formGroupExampleInput"><b>Agama</b></label>
                    <input type="text" name="agama" class="form-control" id="formGroupExampleInput" placeholder="Agama">
                </div>
            </div>
            <div class="modal-footer md-button">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<!-- edit data -->
<?php foreach ($agama as $key => $value) { ?>
    <div id="editData<?= $value['id_agama'] ?>" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Agama</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <?= form_open('C_Agama/editData/' . $value['id_agama']) ?>

                <div class="modal-body">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput"><b>Agama</b></label>
                        <input type="text" value="<?= $value['agama'] ?>" name="agama" class="form-control" id="formGroupExampleInput" placeholder="Agama">
                    </div>
                </div>
                <div class="modal-footer md-button">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
<?php } ?>
<?= $this->endSection(); ?>