<footer class="main-footer">
            <strong>Copyright &copy; 2019-2020<a href="">NewsCMS</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block"><b>Version</b> 0.1</div>
        </footer>
    </div>
    <!-- ./wrapper -->
</body>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('/js/pages/dashboard3.js') }}"></script>
<script src="{{ asset('/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript">
	$('#receivingDate').daterangepicker({
		singleDatePicker: true,
		// showDropdowns: true,
		startDate: new Date(),
		minDate:new Date(),
		// minDate: '06/01/2013',
		// maxDate: '06/30/2015',      
		format: 'YYYY-MM-DD',
		timePicker: true,
		timePicker24Hour: true,
		// timePickerIncrement: 10,
		autoUpdateInput: true,
		locale: { 
			cancelLabel: 'Clear',
			format: 'YYYY-MM-DD HH:mm'
		}  
	});
	
	$('#reportingDate').daterangepicker({
		singleDatePicker: true,
		// showDropdowns: true,
		startDate: new Date(),
		minDate:new Date(),
		// minDate: '06/01/2013',
		// maxDate: '06/30/2015',      
		format: 'YYYY-MM-DD',
		timePicker: true,
		timePicker24Hour: true,
		// timePickerIncrement: 10,
		autoUpdateInput: true,
		locale: { 
			cancelLabel: 'Clear',
			format: 'YYYY-MM-DD HH:mm'
		}  
	});

	$('#dateOfBirth').daterangepicker({
		singleDatePicker: true,
		// showDropdowns: true,
		startDate: new Date(),
		minDate:new Date(),
		// minDate: '06/01/2013',
		// maxDate: '06/30/2015',      
		format: 'YYYY-MM-DD',
		timePicker: true,
		timePicker24Hour: true,
		// timePickerIncrement: 10,
		autoUpdateInput: true,
		locale: { 
			cancelLabel: 'Clear',
			format: 'YYYY-MM-DD HH:mm'
		}  
	});
	$('#publishDate').daterangepicker({
		singleDatePicker: true,
		// showDropdowns: true,
		startDate: new Date(),
		minDate:new Date(),
		// minDate: '06/01/2013',
		// maxDate: '06/30/2015',      
		format: 'YYYY-MM-DD',
		timePicker: true,
		timePicker24Hour: true,
		// timePickerIncrement: 10,
		autoUpdateInput: true,
		locale: { 
			cancelLabel: 'Clear',
			format: 'YYYY-MM-DD HH:mm'
		}  
	});
</script>
</body>
</html>