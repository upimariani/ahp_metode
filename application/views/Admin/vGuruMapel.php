<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Guru Mata Pelajaran</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">User</li>
					</ol>
				</div>

			</div>
			<?php
			if ($this->session->userdata('success')) {
			?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fas fa-check"></i> Alert!</h5>
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
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Guru Mata Pelajaran</h3><br>
							<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#modal-default">
								Tambah Data Guru Mata Pelajaran
							</button>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama User</th>
										<th class="text-center">No Telepon</th>
										<th class="text-center">NIP</th>
										<th class="text-center">Akun</th>
										<th class="text-center">Mata Pelajaran</th>
										<th class="text-center">Action</th>

									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($guru as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?>.</td>

											<td><?= $value->nama_guru ?></td>
											<td><?= $value->no_hp_guru ?></td>
											<td><?= $value->nip_guru ?></td>
											<td>Username : <span class="badge badge-warning"><?= $value->username_guru ?></span><br>
												Password : <span class="badge bg-olive"><?= $value->password_guru ?></span></td>
											<td><?= $value->mapel ?></td>
											<td class="text-center">
												<button class="btn btn-app btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_guru ?>">
													<i class="fas fa-edit"></i> Edit
												</button>
												<a href="<?= base_url('Admin/cGuruMapel/delete/' . $value->id_guru) ?>" class="btn btn-app btn-sm">
													<i class="fas fa-trash"></i> Delete
												</a>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Guru</th>
										<th class="text-center">No Telepon</th>
										<th class="text-center">NIP</th>
										<th class="text-center">Akun</th>
										<th class="text-center">Mata Pelajaran</th>
										<th class="text-center">Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>

<!-- tambah data guru mapel -->
<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Masukkan Data Guru Mata Pelajaran</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form role="form" id="admin" action="<?= base_url('Admin/cGuruMapel/create') ?>" method="POST">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Guru</label>
									<input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Admin" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputPassword1">No Telepon</label>
									<input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputPassword1">Username</label>
									<input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Username" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputPassword1">NIP</label>
									<input type="text" name="nip" class="form-control" id="exampleInputPassword1" placeholder="Masukkan NIP Guru" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputPassword1">Mata Pelajaran</label>
									<select class="form-control" name="mapel" required>
										<option value="">---Pilih Mata Pelajaran---</option>
										<option value="Pendidikan Agama">Pendidikan Agama</option>
										<option value="Pendidikan Kewarganegaraan">Pendidikan Kewarganegaraan</option>
										<option value="Bahasa Indonesia">Bahasa Indonesia</option>
										<option value="PJOK">PJOK</option>
										<option value="Seni Budaya">Seni Budaya</option>
										<option value="Matematika">Matematika</option>
										<option value="IPA">IPA</option>
										<option value="Bahasa Inggris">Bahasa Inggris</option>
									</select>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<?php
//edit data guru mapel
foreach ($guru as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_guru ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Masukkan Data Guru Mata Pelajaran</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" id="admin" action="<?= base_url('Admin/cGuruMapel/update/' . $value->id_guru) ?>" method="POST">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Guru</label>
										<input type="text" name="nama" value="<?= $value->nama_guru ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Admin" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputPassword1">No Telepon</label>
										<input type="text" name="no_hp" value="<?= $value->no_hp_guru ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Username</label>
										<input type="text" name="username" class="form-control" value="<?= $value->username_guru ?>" id="exampleInputPassword1" placeholder="Masukkan Username" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="text" name="password" class="form-control" value="<?= $value->password_guru ?>" id="exampleInputPassword1" placeholder="Masukkan Password" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputPassword1">NIP</label>
										<input type="text" name="nip" class="form-control" value="<?= $value->nip_guru ?>" id="exampleInputPassword1" placeholder="Masukkan NIP Guru" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Mata Pelajaran</label>
										<select class="form-control" name="mapel" required>
											<option value="">---Pilih Mata Pelajaran---</option>
											<option value="Pendidikan Agama" <?php if ($value->mapel == 'Pendidikan Agama') {
																					echo 'selected';
																				} ?>>Pendidikan Agama</option>
											<option value="Pendidikan Kewarganegaraan" <?php if ($value->mapel == 'Pendidikan Kewarganegaraan') {
																							echo 'selected';
																						} ?>>Pendidikan Kewarganegaraan</option>
											<option value="Bahasa Indonesia" <?php if ($value->mapel == 'Bahasa Indonesia') {
																					echo 'selected';
																				} ?>>Bahasa Indonesia</option>
											<option value="PJOK" <?php if ($value->mapel == 'PJOK') {
																		echo 'selected';
																	} ?>>PJOK</option>
											<option value="Seni Budaya" <?php if ($value->mapel == 'Seni Budaya') {
																			echo 'selected';
																		} ?>>Seni Budaya</option>
											<option value="Matematika" <?php if ($value->mapel == 'Matematika') {
																			echo 'selected';
																		} ?>>Matematika</option>
											<option value="IPA" <?php if ($value->mapel == 'IPA') {
																	echo 'selected';
																} ?>>IPA</option>
											<option value="Bahasa Inggris" <?php if ($value->mapel == 'Bahasa Inggris') {
																				echo 'selected';
																			} ?>>Bahasa Inggris</option>
										</select>
									</div>
								</div>
							</div>
						</div>


				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
<?php
}
?>
<!-- /.modal -->