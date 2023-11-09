<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Nilai <?= $this->session->userdata('mapel') ?> </h1><br>
					<!-- <button type="button" class="btn btn-success" onclick="window.print()"><i class="fas fa-print"></i> Print</button> -->

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
				<div class="col-6">
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
										<th class="text-center">Kelas</th>
										<th class="text-center">Angkatan Siswa</th>
										<th class="text-center">View</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($periode as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->angkatan ?></td>
											<td>
												<a href="<?= base_url('GuruMapel/cNilaiSiswa/viewupload/' . $value->kelas . '/' . $value->angkatan) ?>" class="btn btn-app btn-sm">
													<i class="fas fa-eye"></i> View
												</a>
												<!-- <a href="<?= base_url('GuruMapel/cNilaiSiswa/view_siswa/' . $value->kelas . '/' . $value->angkatan) ?>" class="btn btn-app btn-sm">
													<i class="fas fa-eye"></i> View
												</a> -->
											</td>
										</tr>

									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">Kelas</th>
										<th class="text-center">Angkatan Siswa</th>
										<th class="text-center">View</th>
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