<!-- Main Footer -->
<footer class="main-footer">
	<strong>SPK | SMK CENDEKIA UTAMA</strong>
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.0.5
	</div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/demo.js"></script>
<!-- jquery-validation -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<script>
	$(function() {
		// Summernote
		$('.textarea').summernote()
	})
</script>
<script>
	$(function() {
		//Initialize Select2 Elements
		$('.select2').select2()

		//Date range picker
		$('#reservationdate').datetimepicker({
			format: 'YYYY-MM-DD'
		});
	})
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('#admin').validate({
			rules: {
				nama: {
					required: true
				},
				no_hp: {
					required: true,
					number: true,
					minlength: 11,
					maxlength: 13
				},
				alamat: {
					required: true
				},
				username: {
					required: true
				},
				password: {
					required: true
				},
				nip: {
					required: true
				},
				level: {
					required: true
				}

			},
			messages: {
				nama: {
					required: "Masukkan Nama Admin"
				},
				no_hp: {
					required: "Masukkan No Telepon",
					minlength: "No Telepon Minimal 11 angka",
					maxlength: "No Telepon Maksimal 13 angka"

				},
				alamat: {
					required: "Masukkan Alamat Admin"
				},
				username: {
					required: "Masukkan Username"
				},
				password: {
					required: "Masukkan Password"
				},
				nip: {
					required: "Masukkan Password"
				},
				level: {
					required: "Masukkan Password"
				},
			},
			errorElement: 'span',
			errorPlacement: function(error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
	});
</script>

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