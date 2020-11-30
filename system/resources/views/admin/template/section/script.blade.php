<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ url('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ url('public/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('public/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Select2 -->
<script src="{!! asset('plugins/select2/js/select2.full.min.js')!!}"></script>

<!-- AdminLTE App -->
<script src="{!! asset('dist/js/adminlte.min.js') !!}"></script>
<script>
	//DataTables
	$(".table-datatable").DataTable();

	$(function () {
		//Initialize Select2 Elements
    	$('.select2').select2()
	})	
</script>