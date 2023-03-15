<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Informasi Siswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Siswa</li>
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
							<h3 class="card-title">Informasi Siswa</h3><br>
							<a href="<?= base_url('WaliKelas/cSiswa/create') ?>" class="btn btn-warning mt-3">Create New Siswa</a>

						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">NIS</th>
										<th class="text-center">Nama Siswa</th>
										<th class="text-center">Kelas</th>
										<th class="text-center">Jenis Kelamin</th>
										<th class="text-center">Tempat, Tanggal Lahir</th>
										<th class="text-center">Alamat</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($siswa as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nis ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->ttl ?></td>
											<td><?= $value->alamat ?></td>
											<td class="text-center">
												<a href="<?= base_url('WaliKelas/cSiswa/edit/' . $value->id_siswa) ?>" class="btn btn-app btn-sm">
													<i class="fas fa-edit"></i> Edit
												</a>
												<a href="<?= base_url('WaliKelas/cSiswa/delete/' . $value->id_siswa) ?>" class="btn btn-app btn-sm">
													<i class="fas fa-trash"></i> Delete
												</a>
											</td>
										</tr>
									<?php
									}
									?>

								</tbody>
								<tfoot>
									<th class="text-center">No.</th>
									<th class="text-center">NIS</th>
									<th class="text-center">Nama Siswa</th>
									<th class="text-center">Kelas</th>
									<th class="text-center">Jenis Kelamin</th>
									<th class="text-center">Tempat, Tanggal Lahir</th>
									<th class="text-center">Alamat</th>
									<th class="text-center">Action</th>
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