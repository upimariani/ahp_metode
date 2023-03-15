<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMK CINDEKIA UTAMA</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body style="background-image: url('asset/1.jpg'); " class="hold-transition login-page">
	<div class="container">
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<div class="login-logo">
					<a href="#"><b>INFORMASI SISWA TERBAIK</b></a><br>
					<h4><strong>SMK CINDEKIA UTAMA</strong></h4>
					</a>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Informasi Siswa/Siswi Terbaik</h3>

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
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
						<!-- /.card -->
					</div>
					<!-- /.col -->
				</div>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
	<!-- jquery-validation -->
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-validation/additional-methods.min.js"></script>
	<!-- DataTables -->
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script>
		$(function() {
			$("#example1").DataTable({
				"responsive": true,
				"autoWidth": false,
			});
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
	</script>
</body>

</html>