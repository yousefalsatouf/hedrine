@include('/partials/header')
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    @include('../partials/nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('/partials/sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #fff">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="m-O text-dark"> {{ $title }}</h1>
              {{-- <h1 class="">@yield('content_title')</h1> <!--affiche le mot plantes ou dci--> --}}
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          @yield('content_dashboard') 
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
  </div>
  <!-- /.Main content -->
  @include('../partials/footer')
   <!-- page script -->
