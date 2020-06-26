<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Hedrine | ULB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/jqvmap/jqvmap.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/adminlte/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/adminlte/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('/css/hedrine.css')}}">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/daterangepicker/daterangepicker.css')}}">

  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/summernote/summernote-bs4.css')}}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" style="margin-bottom: 47px">
        <a href="{{ route('home') }}" class="nav-link">
            <img class="img-fluid taille" src="{{ asset('images/hedrine_petit.png') }}" alt="Logo Hedrine">
        </a>
      </li>
    </ul>

    <!-- Right navbar links for All -->
    <ul class="navbar-nav ml-auto">

    </ul>
    <ul class="navbar-nav ml-auto">

    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <button class="btn btn-secondary" data-toggle="dropdown" href="#">
                <i class="fas fa-user-circle fa-2x"></i>
                {{ auth()->user()->firstname }} {{ auth()->user()->name }} ({{ auth()->user()->roles->name }})
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a class="dropdown-item" href="{{ action('SessionController@destroy') }}">
                    <i class="left fas fa-sign-out-alt"></i>
                    Se déconnecter
                </a>
                @if(\Illuminate\Support\Facades\Auth::user()->role_id === 4)
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unsubscribeModal"><i style="color: red" class="left fas fa-times-circle"></i> Désinscription</a>
                @endif
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->
    <!-- Modal -->
    <div class="modal fade" id="unsubscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-danger ">
                    <strong class="modal-titletext-light" id="exampleModalLabel"> Attention !</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <b class="text-danger">Votre compte et vos données vont supprimer !</b>
                    <strong> voulez-vous  vraiment désinscrire?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                    <a href="{{route('unsubscribe')}}" id="unsubscribe" style="border: 0; border-bottom: 1px solid red" class="btn btn-outline-danger">
                         Oui, Je confirme!
                    </a>
                </div>
            </div>
        </div>
    </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <br />
        <div class="text-center">
            <a href="https://www.ulb.be" class="d-block">
                <img src="{{ asset('images/ulb-icon.png') }}" class="img-circle" alt="Logo ULB">
            </a>
        </div>

        <!-- Sidebar Menu -->
       <nav class="mt-2 sidebar-nav">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active" style="background-color:green;">
                        <i class="nav-icon fas fa-search-plus"></i>
                        <p>
                          Plantes
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('userprofile.attente')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>En attente</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('userprofile.validated')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Active</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" style="background-color:green;">
                        <i class="nav-icon fas fa-compress-arrows-alt"></i>
                    <p>
                        Profile
                        <i class="fas fa-angle-left right"></i>

                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-fw fa-at"></i>
                                <p>Email</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-fw fa-database"></i>
                                <p>Mes données</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: #fff">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content_dashboard')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> 2020 <a href="https://www.ulb.be">Hedrine-ULB</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">

    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script>
    $(document).ready(function(){
        $('#MybtnModal').click(function(){
            $('#Mymodal').modal('show');
        });
    });
</script>


<!-- Bootstrap 4 -->
<script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('/adminlte/plugins/chart.js/Chart.min.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('/adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/adminlte/dist/js/adminlte.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>


<!-- JP Ajout css et js pour le crud des herbs avec ses forms -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="{{ asset('/js/quickEdit.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/manage.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/custom.js') }}" type="text/javascript"></script>

    @include('sweetalert::alert')
    @include('cookieConsent::index')


    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
    <!-- Recaptha -->
    @yield('dashboard-js')
    @yield('script')
</body>
</html>
