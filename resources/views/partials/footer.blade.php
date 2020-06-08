 <!-- Main Footer -->
 	<footer class="main-footer">
 		<!-- Default to the left -->
    	<strong>Copyright &copy; 2020 <a href="https://hedrine.univ-grenoble-alpes.fr/">Hedrine</a>.</strong> All rights reserved.
 	</footer>
  	<!-- Control Sidebar -->
  	<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  	</aside>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- ChartJS -->
<script src="{{ asset('/adminlte/plugins/chart.js/Chart.min.js') }}"></script>


<!-- jQuery Knob Chart -->
<script src="{{ asset('/adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ asset('/adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('/adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>


<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>



<!-- DataTables -->
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminlte/js/adminlte.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminlte/js/adminlte.min.js') }}"></script>
<script src="{{ asset('/adminlte/js/demo.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminlte/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/adminlte/dist/js/demo.js') }}"></script>
<script type="text/javascript" src="{{asset('js/custom.js') }}"></script>
 @yield('dashboard-js')
 @include('sweetalert::alert')
  @include('cookieConsent::index')

</body>
</html>
