<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Hasil Analisis Perhitungan Metode AHP Periode Angkatan <?= $angkatan ?> Kelas <?= $kelas ?></h1><br>
					<button type="button" class="btn btn-success" onclick="window.print()"><i class="fas fa-print"></i> Print</button>

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
							<h3 class="card-title">Informasi Hasil Analisis Perhitungan Metode AHP Periode Angkatan <?= $angkatan ?> Kelas <?= $kelas ?></h3><br>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">Nama Siswa</th>
										<th class="text-center">Angkatan Siswa</th>
										<th class="text-center">Tanggal Proses</th>
										<th class="text-center">Penilaian</th>
										<th class="text-center">Hasil</th>
										<th class="text-center">Approved</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($view_periode as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?>.</td>
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
