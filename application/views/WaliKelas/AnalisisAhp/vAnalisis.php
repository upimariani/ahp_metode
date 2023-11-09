<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Hasil Analisis Perhitungan Metode AHP</h1>
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
							<h3 class="card-title">Informasi Hasil Analisis Perhitungan Metode AHP</h3><br>
							<a href="<?= base_url('WaliKelas/cAnalisisAhp/create') ?>" class="btn btn-warning mt-3"><i class="fas fa-calculator"></i> Penilaian Siswa</a>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">Nama Siswa</th>
										<th class="text-center">Angkatan Siswa</th>
										<th class="text-center">Tanggal Proses</th>
										<th class="text-center">Penilaian</th>
										<th class="text-center">Hasil</th>
										<th class="text-center">Approved</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($analisis as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->angkatan ?></td>
											<td><?= $value->tgl_proses ?></td>
											<td>Kehadiran: <?= $value->p_kehadiran ?><br>
												Sikap: <?= $value->p_sikap ?><br>
												Raport: <?= $value->p_raport ?>
											<td><?= $value->hasil ?></td>
											<td><?php if ($value->approved == '0') {
												?>
													<span class="badge badge-danger">Dalam Proses Approve</span>
												<?php
												} else {
												?>
													<span class="badge badge-success">Sudah Approve</span>
												<?php
												} ?>
											</td>
											<td class="text-center">
												<button class="btn btn-app btn-sm" data-toggle="modal" data-target="#modal-default<?= $value->id_ahp ?>">
													<i class="fas fa-edit"></i> Edit
												</button>
											</td>
										</tr>
									<?php
									}
									?>

								</tbody>
								<tfoot>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">Nama Siswa</th>
										<th class="text-center">Angkatan Siswa</th>
										<th class="text-center">Tanggal Proses</th>
										<th class="text-center">Penilaian</th>
										<th class="text-center">Hasil</th>
										<th class="text-center">Approved</th>
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
$no = 1;
foreach ($analisis as $key => $value) {
?>
	<form action="<?= base_url('WaliKelas/cAnalisisAhp/edit_ahp/' . $value->id_ahp) ?>" method="POST">
		<div class="modal fade" id="modal-default<?= $value->id_ahp ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Perhitungan</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInputPassword1">Penilaian Kehadiran</label>
								<input type="text" value="<?= $value->p_kehadiran ?>" name="kehadiran" class="form-control" placeholder="Masukkan Penilaian Kehadiran">
								<?= form_error('kehadiran', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInputPassword1">Penilaian Sikap</label>
								<input type="text" value="<?= $value->p_sikap ?>" name="sikap" class="form-control" placeholder="Masukkan Penilaian Sikap">
								<?= form_error('sikap', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInputPassword1">Penilaian Raport</label>
								<input type="text" value="<?= $value->p_raport ?>" name="raport" class="form-control" placeholder="Masukkan Penilaian Raport">
								<?= form_error('raport', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	</form>
<?php } ?>