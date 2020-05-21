<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Administration</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.4/css/adminlte.min.css">
  @yield('css')
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Hedrine</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <x-menu-item 
            :href="route('admin')" 
            icon="tachometer-alt" 
            :active="currentRouteActive('admin')">
            Administration
          </x-menu-item>
          <br>
          <br>
          <br>
          <li class="nav-item has-treeview {{ menuOpen(
            'post.edit','post.index','post.details'
            ) }}">
            <a href="#" class="nav-link {{ currentRouteActive(
              'post.edit','post.index','post.details'
              ) }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Add
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <x-menu-item :href="route('post.index')" :sub=true :active="currentRouteActive('post.index','post.edit', 'post.update','post.details')">
                Posts
              </x-menu-item>
              {{-- <x-menu-item :href="route('post.edit')" :sub=true :active="currentRouteActive('post.edit', 'post.update')">
                Actions
              </x-menu-item>
              <x-menu-item :href="route('post.edit')" :sub=true :active="currentRouteActive('post.edit', 'post.update')">
                Drugs Families
              </x-menu-item>
              <x-menu-item :href="route('post.edit')" :sub=true :active="currentRouteActive('post.edit', 'post.update')">
                Forces
              </x-menu-item>
              <x-menu-item :href="route('post.edit')" :sub=true :active="currentRouteActive('post.edit', 'post.update')">
                Roles
              </x-menu-item>
              <x-menu-item :href="route('post.edit')" :sub=true :active="currentRouteActive('post.edit', 'post.update')">
                Target Types
              </x-menu-item>
              <x-menu-item :href="route('post.edit')" :sub=true :active="currentRouteActive('post.edit', 'post.update')">
                Users
              </x-menu-item>
              <x-menu-item :href="route('post.edit')" :sub=true :active="currentRouteActive('post.edit', 'post.update')">
                Pending Users
              </x-menu-item> --}}
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Search
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <x-menu-item :href="route('post.index')" :sub=true :active="currentRouteActive('post.index','post.edit', 'post.update')">
                Drug/Target interactions
              </x-menu-item>
              <x-menu-item :href="route('post.index')" :sub=true :active="currentRouteActive('post.index','post.edit', 'post.update')">
                Herb/Target interactions
              </x-menu-item>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <x-menu-item :href="route('post.index')" :sub=true :active="currentRouteActive('post.index','post.edit', 'post.update')">
                Drug/Target interactions
              </x-menu-item>
              <x-menu-item :href="route('post.index')" :sub=true :active="currentRouteActive('post.index','post.edit', 'post.update')">
                Herb/Target interactions
              </x-menu-item>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <x-menu-item :href="route('post.index')" :sub=true :active="currentRouteActive('post.index','post.edit', 'post.update')">
                Drugs
              </x-menu-item>
              <x-menu-item :href="route('post.index')" :sub=true :active="currentRouteActive('post.index','post.edit', 'post.update')">
                Herbs
              </x-menu-item>
              <x-menu-item :href="route('post.index')" :sub=true :active="currentRouteActive('post.index','post.edit', 'post.update')">
               Targets
              </x-menu-item>
              <x-menu-item :href="route('post.index')" :sub=true :active="currentRouteActive('post.index','post.edit', 'post.update')">
                References
              </x-menu-item>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">{{ $title }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          @yield('main')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright ici.</strong>
  </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.4/js/adminlte.min.js"></script>
@yield('js')
</body>
</html>