<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data User</h1>
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
							<h3 class="card-title">Informasi User</h3><br>
							<a href="<?= base_url('Admin/cUser/create') ?>" class="btn btn-warning btn-sm mt-3">Create New User</a>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama User</th>
										<th class="text-center">No Telepon</th>
										<th class="text-center">Alamat</th>
										<th class="text-center">NIP</th>
										<th class="text-center">Akun</th>
										<th class="text-center">Level User</th>
										<th class="text-center">Action</th>

									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($user as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?>.</td>

											<td><?= $value->nama_user ?></td>
											<td><?= $value->no_hp ?></td>
											<td><?= $value->alamat_user ?></td>
											<td><?= $value->nip ?></td>
											<td>Username : <span class="badge badge-warning"><?= $value->username ?></span><br>
												Password : <span class="badge bg-olive"><?= $value->password ?></span></td>
											<td><?php if ($value->level_user == '1') {
												?>
													<span class="badge badge-success">Admin</span>
												<?php
												} else if ($value->level_user == '2') {
												?>
													<span class="badge badge-warning">Wali Kelas</span>
												<?php
												} else {
												?>
													<span class="badge badge-danger">Kepala Sekolah</span>
												<?php
												} ?>
											</td>
											<td class="text-center">
												<a href="<?= base_url('Admin/cUser/edit_user/' . $value->id_user) ?>" class="btn btn-app btn-sm">
													<i class="fas fa-edit"></i> Edit
												</a>
												<a href="<?= base_url('Admin/cUser/delete_user/' . $value->id_user) ?>" class="btn btn-app btn-sm">
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
										<th class="text-center">Nama User</th>
										<th class="text-center">No Telepon</th>
										<th class="text-center">Alamat</th>
										<th class="text-center">NIP</th>
										<th class="text-center">Akun</th>
										<th class="text-center">Level User</th>
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