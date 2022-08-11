<?= $this->extend('template/template_backendAdmin') ?>
<?= $this->section('content'); ?>

<div class="row layout-top-spacing" id="cancel-row">

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <?php
        if (session()->getFlashdata('tambah_user')) {
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('tambah_user');
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

            <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>E-Mail</th>
                        <th class="text-center dt-no-sorting">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($user as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <div class="d-flex">
                                    <div class="usr-img-frame mr-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="<?= base_url('foto_kota/' . $value['foto']) ?>">
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> <?= $value['nama_user'] ?> </p>
                                </div>
                            </td>
                            <td><?= $value['email'] ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editData<?= $value['id_user'] ?>"> Edit</button>
                                <a href="<?= base_url('/C_User/deleteData/' . $value['id_user']); ?>" class="btn btn-danger btn-sm"> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>E-Mail</th>
                        <th class="invisible"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>


<!-- modal -->
<div id="tambah_data" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <?= form_open_multipart('C_User/tambahData') ?>

            <div class="modal-body">
                <div class="form-group mb-4">
                    <label for="formGroupExampleInput"><b>Nama User</b></label>
                    <input type="text" name="nama_user" class="form-control" id="formGroupExampleInput" placeholder="Nama User">
                </div>
                <div class="form-group mb-4">
                    <label for="formGroupExampleInput"><b>E-Mail</b></label>
                    <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="E-mail">
                </div>
                <div class="form-group mb-4">
                    <label for="formGroupExampleInput"><b>Password</b></label>
                    <input type="text" name="password" class="form-control" id="formGroupExampleInput" placeholder="Password Baru">
                </div>
                <div class="form-group mb-4 custom-file-container" data-upload-id="myFirstImage">
                    <label>Upload foto <a class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                    <label class="custom-file-container__custom-file">
                        <input type="file" name="foto" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
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
<?php foreach ($user as $key => $value) { ?>
    <div id="editData<?= $value['id_user'] ?>" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <?= form_open_multipart('C_User/editData/' . $value['id_user']) ?>

                <div class="modal-body">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput"><b>Nama User</b></label>
                        <input type="text" value="<?= $value['nama_user'] ?>" name="nama_user" class="form-control" id="formGroupExampleInput" placeholder="Nama User">
                    </div>
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput"><b>E-Mail</b></label>
                        <input type="text" value="<?= $value['email'] ?>" name="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
                    </div>
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput"><b>Password</b></label>
                        <input type="text" value="<?= $value['password'] ?>" name="password" class="form-control" id="formGroupExampleInput" placeholder="Password">
                    </div>
                    <div class="form-group mb-4 custom-file-container" data-upload-id="myFirstImage">
                        <label>Ganti foto <a class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                        <label class="custom-file-container__custom-file">
                            <input type="file" name="foto" value="<?= $value['foto']?>" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                        </label>
                        <div class="custom-file-container__image-preview"></div>
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