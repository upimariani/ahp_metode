<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-8">
					<h1>Hasil Analisis Perhitungan Metode AHP Per Periode</h1>
				</div>
				<div class="col-sm-4">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Metode AHP</li>
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
							<h3 class="card-title">Periode Angkatan Siswa Terbaik</h3><br>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">Kelas</th>
										<th class="text-center">Angkatan</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($periode as $key => $value) {
									?>
										<tr>
											<td class="text-center"><?= $no++ ?>.</td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->angkatan ?></td>
											<td class="text-center">


												<a href="<?= base_url('KepalaSekolah/cPerPeriode/view_data/' . $value->kelas . '/' . $value->angkatan) ?>" class="btn btn-app btn-sm">
													<i class="fas fa-info"></i> View
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
										<th class="text-center">Kelas</th>
										<th class="text-center">Angkatan</th>
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
