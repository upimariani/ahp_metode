<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Analisis Metode AHP</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Metode AHP</li>
					</ol>
				</div>
			</div>
			<?php
			if ($this->session->userdata('success')) {
			?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fas fa-times"></i> Alert!</h5>
					<?= $this->session->userdata('success') ?>
				</div>
			<?php
			}
			?>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- jquery validation -->
					<div class="card card-warning">
						<div class="card-header">
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form role="form" action="<?= base_url('WaliKelas/cAnalisisAhp/perhitunganAhp') ?>" method="POST">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="exampleInputPassword1">Nama Siswa</label>
											<select name="siswa" id="analisis_perhitungan" class="form-control">
												<option value="">---Pilih Siswa---</option>
												<?php
												foreach ($siswa as $key => $value) {
												?>
													<option data-nilai="<?= $value->jml_nilai ?>" data-rata="<?= $value->rate / $value->jml_nilai ?>" value="<?= $value->id_siswa ?>" <?php if (set_value('siswa') ==  $value->id_siswa) {
																																															echo 'selected';
																																														} ?>><?= $value->nama_siswa ?></option>
												<?php
												}
												?>


											</select>
											<?= form_error('siswa', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group">
											<label for="exampleInputPassword1">Penilaian Kehadiran</label>
											<select name="kehadiran" class="form-control">
												<option value="">---Pilih Penilaian Kehadiran---</option>
												<option>Kurang</option>
												<option>Cukup</option>
												<option>Baik</option>
											</select>
											<?= form_error('kehadiran', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="exampleInputPassword1">Penilaian Sikap</label>
											<select name="sikap" class="form-control">
												<option value="">---Pilih Penilaian Sikap---</option>
												<option>Kurang</option>
												<option>Cukup</option>
												<option>Baik</option>
											</select>
											<?= form_error('sikap', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label for="exampleInputPassword1">Rata - Rata Raport</label>
											<input type="text" name="raport" class="rata form-control" readonly>
											<?= form_error('raport', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label for="exampleInputPassword1">Jumlah Nilai</label>
											<input type="text" name="jml" class="nilai form-control" readonly>
											<?= form_error('raport', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="exampleInputPassword1">Penilaian Sosial</label>
											<select name="sosial" class="form-control">
												<option value="">---Pilih Penilaian Sosial---</option>
												<option>Kurang</option>
												<option>Cukup</option>
												<option>Baik</option>
											</select>
											<?= form_error('sosial', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="exampleInputPassword1">Penilaian Spiritual</label>
											<select name="spiritual" class="form-control">
												<option value="">---Pilih Penilaian Spiritual---</option>
												<option>Kurang</option>
												<option>Cukup</option>
												<option>Baik</option>
											</select>
											<?= form_error('spiritual', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
								<a class="btn btn-danger" href="<?= base_url('cAnalisisAhp/create') ?>">Kembali</a>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-6">

				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>