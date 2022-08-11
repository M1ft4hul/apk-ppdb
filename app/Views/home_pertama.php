<?= $this->extend('komponen_layout/layout_home') ?>
<?= $this->section('content'); ?>

<div class="page-header">
	<div class="page-title">
		<h3>Dashboard PPDB</h3>
	</div>
</div>

<div class="row layout-top-spacing">

	<!-- kendari -->
	<div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
		<div class="widget widget-card-two">
			<div class="widget-content">
				<div class="media form-row mb-4">
					<div class="form-group col-md-6">
						<label>Sekolah</label>
						<select name="sekolah" id="sekolah" class="form-control basic">
							<option value="">Pilih Sekolah Menengah Kejuruan</option>
							<?php
							foreach ($sekolah as $row) {
								echo '<option value="' . $row["id_sekolah"] . '">' . $row["nama_smk"] . '</option>';
							}
							?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label>Jurusan</label>
						<select name="jurusan" id="jurusan" class="form-control basic">
							<option value="">Pilih Jurusan</option>

						</select>
					</div>
				</div>

				<div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 code-section-container">

					<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded mb-2"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg> Lanjut</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>