<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create New Siswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Create Siswa</li>
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
				<div class="col-md-6">
					<!-- jquery validation -->
					<div class="card card-primary">
						<div class="card-header">
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form role="form" action="<?= base_url('Admin/cSiswa/create') ?>" method="POST">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="exampleInputEmail1">Nama Wali Kelas</label>
											<select name="walikelas" class="form-control">
												<option value="">---Nama Wali Kelas---</option>
												<?php
												$wali_kelas = $this->db->query("SELECT * FROM `user` WHERE level_user='2'")->result();
												foreach ($wali_kelas as $key => $value) {
												?>
													?>
													<option value="<?= $value->id_user ?>"><?= $value->nama_user ?></option>
												<?php
												}
												?>

											</select>
											<?= form_error('walikelas', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputEmail1">Nama Siswa</label>
											<input type="text" value="<?= set_value('nama') ?>" name="nama" class="form-control" placeholder="Masukkan Nama Anggota">
											<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputEmail1">NIS Siswa</label>
											<input type="text" value="<?= set_value('nis') ?>" name="nis" class="form-control" placeholder="Masukkan NIS Anggota">
											<?= form_error('nis', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Jenis Kelamin</label>
											<select name="jk" class="form-control">
												<option value="">---Pilih Jenis Kelamin---</option>
												<option value="Perempuan" <?php if (set_value('jk') == 'Perempuan') {
																				echo 'selected';
																			} ?>>Perempuan</option>
												<option value="Laki-Laki" <?php if (set_value('jk') == 'Laki-Laki') {
																				echo 'selected';
																			} ?>>Laki-Laki</option>
											</select>
											<?= form_error('jk', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Kelas</label>
											<input type="text" value="<?= set_value('kelas') ?>" name="kelas" class="form-control" placeholder="Masukkan Kelas">
											<?= form_error('kelas', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Angkatan</label>
											<input type="number" value="<?= set_value('angkatan') ?>" name="angkatan" class="form-control" placeholder="Masukkan Tahun Angkatan">
											<?= form_error('angkatan', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Tempat, Tanggal Lahir</label>
											<input type="text" value="<?= set_value('ttl') ?>" name="ttl" class="form-control" placeholder="Masukkan Tempat, Tanggal Lahir">
											<?= form_error('ttl', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label for="exampleInputPassword1">Alamat</label>
											<input type="text" value="<?= set_value('alamat') ?>" name="alamat" class="form-control" placeholder="Masukkan alamat">
											<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
								<a class="btn btn-danger" href="<?= base_url('cAnggota') ?>">Kembali</a>
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