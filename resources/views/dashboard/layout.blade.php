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

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('/adminlte/plugins/jqvmap/jqvmap.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/adminlte/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/adminlte/css/style.css')}}">

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
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments fa-2x"></i>
          <span class="badge badge-danger navbar-badge" style="font-size: 15px">{{ $posts->count() }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            @foreach ($posts as $post)
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <div class="media-body @if ($post->important == 1) important @endif">

                            <h3 class="dropdown-item-title">
                               {{ $post->title }}
                               @if ($post->important == 1)
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                               @endif
                            </h3>
                            <p class="text-sm">{{ Str::limit($post->body, 35) }}</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
            @endforeach
            <div class="dropdown-divider"></div>
            <a href="{{ route('post.index') }}" class="dropdown-item dropdown-footer">See All Posts</a>
        </div>
      </li>
      @if((auth()->user()->role_id == 1 )||(auth()->user()->role_id == 2 ))
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell fa-2x"></i>
                <span class="badge badge-warning navbar-badge" style="font-size: 15.5px" >15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
      @endif
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-sm-inline-block">
            <img class="img-fluid" src="{{ asset('images/Plant-icon_32.png') }}" alt="plante">
        </li>
        <li class="nav-item d-sm-inline-block">{{ $herbs->count() }}</li>
        &nbsp; &nbsp;
        <li class="nav-item d-sm-inline-block"><img class="img-fluid"
                src="{{ asset('images/pills-5-icon_32.png') }}" alt="drugs">
        </li>
        <li class="nav-item d-sm-inline-block">{{ $drugs->count() }}</li>
        &nbsp; &nbsp;
        <li class="nav-item d-sm-inline-block"><img class="img-fluid"
                src="{{ asset('images/Refresh-bicolor-icon_32.png') }}" alt="target">
        </li>
        <li class="nav-item d-sm-inline-block">{{ $targets->count() }}</li>
        &nbsp; &nbsp;
        <li class="nav-item d-sm-inline-block"><img class="img-fluid"
                src="{{ asset('images/Document-icon_32.png') }}" alt="reference">
        </li>
        <li class="nav-item d-sm-inline-block">{{ $references->count() }}</li>
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
                    logout
                </a>
                <a class="dropdown-item" href="">
                    <i style="color: red" class="left fas fa-times-circle"></i>
                    désinscription
                </a>
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

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
       <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active" style="background-color:green;">
                        <i class="nav-icon fas fa-search-plus"></i>
                        <p>
                        RECHERCHE
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('hinteractions.hdi')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Plantes <span><i class="fas fa-arrows-alt-h fa-lg"></i></span> DCI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('hinteractions.hti')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Plantes <span><i class="fas fa-arrows-alt-h fa-lg"></i></span> Mécanismes</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link" style="background-color:green;">
                        <i class="nav-icon fas fa-compress-arrows-alt"></i>
                    <p>
                        INDEX
                        <i class="fas fa-angle-left right"></i>

                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('herbs.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Plantes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('drugs.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DCI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('targets.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cas Rapporté et Mécanisme</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (auth()->user()->role_id == 1)
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link" style="background-color:green;" >
                            <i class="fas fa-unlock-alt nav-icon"></i>
                            <p>
                            ADMIN
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('post.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Post</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link" style="background-color:#08AA8F;">
                                    <i class="fas fa-toolbox nav-icon"></i>
                                    <p>
                                        Manager
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Actions</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Drugs Families</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Forces</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Roles</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Target Types</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Users</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Pending Users</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link" style="background-color:green;" >
                            <i class="fas fa-database nav-icon"></i>
                            <p>
                            Gerer les données
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link" style="background-color:#08AA8F;">
                                    <i class="fas fa-toolbox nav-icon"></i>
                                    <p>
                                        Manager
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('drug.index')}}" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Drugs</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('herb.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Herbs</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('target.index') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Targets</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endif
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
            <h1 class="m-0 text-dark">{{ $title }}</h1>
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
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
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
<!-- Bootstrap 4 -->
<script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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
    @yield('dashboard-js')
    @include('sweetalert::alert')
    @include('cookieConsent::index')
</body>
</html>
