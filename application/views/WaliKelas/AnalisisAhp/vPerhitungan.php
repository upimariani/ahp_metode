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
											<select name="siswa" class="form-control">
												<option value="">---Pilih Siswa---</option>
												<?php
												foreach ($siswa as $key => $value) {
												?>
													<option value="<?= $value->id_siswa ?>" <?php if (set_value('siswa') ==  $value->id_siswa) {
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
											<input type="text" value="<?= set_value('kehadiran') ?>" name="kehadiran" class="form-control" placeholder="Masukkan Penilaian Kehadiran">
											<?= form_error('kehadiran', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="exampleInputPassword1">Penilaian Sikap</label>
											<input type="text" value="<?= set_value('sikap') ?>" name="sikap" class="form-control" placeholder="Masukkan Penilaian Sikap">
											<?= form_error('sikap', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="exampleInputPassword1">Penilaian Raport</label>
											<input type="text" value="<?= set_value('raport') ?>" name="raport" class="form-control" placeholder="Masukkan Penilaian Raport">
											<?= form_error('raport', '<small class="text-danger">', '</small>') ?>
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