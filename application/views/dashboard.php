<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Info boxes -->
			<div class="row">
				<div class="col-12 col-sm-6 col-md-6">
					<div class="info-box">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">User</span>
							<span class="info-box-number">
								<?= $jml['user']->jml_user ?>
							</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-12 col-sm-6 col-md-6">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Siswa</span>
							<span class="info-box-number"> <?= $jml['siswa']->jml_siswa ?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->

				<!-- /.col -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Hasil Analisis</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Rangking</th>
										<th>Nama Siswa</th>
										<th>Hasil</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($hasil as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->hasil ?></td>

										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th>Rangking</th>
										<th>Nama Siswa</th>
										<th>Hasil</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>

		</div>
		<!--/. container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->