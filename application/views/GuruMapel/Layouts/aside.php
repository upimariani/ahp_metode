<aside class="main-sidebar sidebar-light-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<span class="brand-text font-weight-dark text-center"> Selamat Datang, Guru</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('asset/logo_smk.png') ?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">SMK Cendikia Utama</a>

				<small class="badge badge-success"><?= $this->session->userdata('mapel') ?></small>
			</div>

		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url('GuruMapel/cDashboardGuru') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'GuruMapel' && $this->uri->segment(2) == 'cDashboardGuru') {
																								echo 'active';
																							}  ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('GuruMapel/cNilaiSiswa') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'GuruMapel' && $this->uri->segment(2) == 'cNilaiSiswa') {
																							echo 'active';
																						}  ?>">
						<i class="nav-icon fas fa-user-graduate"></i>
						<p>
							Nilai Siswa
						</p>
					</a>
				</li>


				<li class="nav-item">
					<a href="<?= base_url('clogin/logout') ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>
							LogOut
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>