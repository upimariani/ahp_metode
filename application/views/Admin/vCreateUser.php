<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create New User</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Create User</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-6">
					<!-- jquery validation -->
					<div class="card card-primary">
						<div class="card-header">
							Masukkan Data User
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form role="form" id="admin" action="<?= base_url('Admin/cUser/create') ?>" method="POST">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputEmail1">Nama User</label>
											<input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Admin">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputPassword1">No Telepon</label>
											<input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="exampleInputPassword1">Alamat</label>
											<input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Username</label>
											<input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Username">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputPassword1">NIP</label>
											<input type="text" name="nip" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Username">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Level User</label>
											<select class="form-control" name="level">
												<option value="">---Pilih Level User---</option>
												<option value="1">Admin</option>
												<option value="2">Wali Kelas</option>
												<option value="3">Kepala Sekolah</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
								<a class="btn btn-danger" href="<?= base_url('Admin/cUser') ?>">Kembali</a>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-6">

				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>