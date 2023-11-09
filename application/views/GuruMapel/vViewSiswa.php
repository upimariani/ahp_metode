<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Nilai <?= $this->session->userdata('mapel') ?> Siswa Kelas <?= $kelas ?> Angkatan <?= $angkatan ?> </h1><br>
					<button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Nilai Siswa</button>
					<button type="button" data-toggle="modal" data-target="#modal-excel" class="btn btn-warning"><i class="fas fa-plus"></i> Tambah Nilai Upload Excel</button>

				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Nilai Siswa</li>
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
							<h3 class="card-title">Informasi Kelas Angkatan Siswa</h3><br>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">NIS</th>
										<th class="text-center">Nama Siswa</th>
										<th class="text-center">Tempat, Tanggal Lahir</th>
										<th class="text-center">Jenis Kelamin</th>
										<th class="text-center">Kelas</th>
										<th class="text-center">Angkatan Siswa</th>
										<th class="text-center">Nilai</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($view_nilai as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nis ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->ttl ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->angkatan ?></td>
											<td><?= $value->nilai ?></td>
											<td class="text-center">
												<button type="button" data-toggle="modal" data-target="#modal-edit<?= $value->id_nilai ?>" class="btn btn-app btn-sm"><i class="fas fa-edit"></i> Edit</button>


												<a href="<?= base_url('GuruMapel/cNilaiSiswa/delete/' . $value->id_nilai . '/' . $value->kelas . '/' . $value->angkatan) ?>" class="btn btn-app btn-sm">
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
										<th class="text-center">No.</th>
										<th class="text-center">NIS</th>
										<th class="text-center">Nama Siswa</th>
										<th class="text-center">Tempat, Tanggal Lahir</th>
										<th class="text-center">Jenis Kelamin</th>
										<th class="text-center">Kelas</th>
										<th class="text-center">Angkatan Siswa</th>
										<th class="text-center">Nilai</th>
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
<?php
foreach ($view_nilai as $key => $value) {
?>
	<div class="modal fade" id="modal-edit<?= $value->id_nilai ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Perbaharui Data Nilai <?= $this->session->userdata('mapel') ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" action="<?= base_url('GuruMapel/cNilaiSiswa/update/' . $value->id_nilai . '/' . $value->kelas . '/' . $value->angkatan) ?>" method="POST">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputPassword1">Nilai <?= $this->session->userdata('mapel') ?></label>
										<input type="text" name="nilai" value="<?= $value->nilai ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nilai Siswa" required>
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

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Masukkan Data Nilai <?= $this->session->userdata('mapel') ?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form role="form" action="<?= base_url('GuruMapel/cNilaiSiswa/nilai/' . $kelas . '/' . $angkatan) ?>" method="POST">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label for="exampleInputPassword1">Nama Siswa</label>
									<select class="form-control" name="siswa_nilai" required>
										<option value="">---Pilih Siswa---</option>
										<?php
										foreach ($siswa as $key => $value) {
										?>
											<option value="<?= $value->nama_siswa ?>"><?= $value->nama_siswa ?></option>
										<?php
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label for="exampleInputPassword1">Nilai <?= $this->session->userdata('mapel') ?></label>
									<input type="text" name="nilai" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nilai Siswa" required>
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
<div class="modal fade" id="modal-excel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Masukkan Data Nilai <?= $this->session->userdata('mapel') ?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form role="form" action="<?= base_url('GuruMapel/cNilaiSiswa/nilaiexcel/' . $kelas . '/' . $angkatan) ?>" enctype="multipart/form-data" method="POST">
				<div class="modal-body">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label for="exampleInputPassword1">Nilai <?= $this->session->userdata('mapel') ?></label>
									<input type="file" class="form-control" name="fileExcel" accept=".xls, .xlsx" required>
									<?= form_error('file', '<div class="text-danger">', '</div>') ?>
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