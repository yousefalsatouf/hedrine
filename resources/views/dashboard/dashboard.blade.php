@include('/dashboard/partials/header')
<div class="wrapper">

  <!-- Navbar -->
  @include('/dashboard/partials/nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('/dashboard/partials/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <div class="col-4 mx-auto">
                <img src="/images/plantes.jpg" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-3 offset-md-2">
                <img src="/images/interaction_drte.jpg" alt="">  
              </div>
              <div class="col-4 offset-md-2">
                <img src="/images/interaction_gche.jpg" alt="">  
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-3">
                <img src="/images/dci.jpg" alt="">  
              </div>
              <div class="col-4 offset-md-5">
                <img src="/images/mecanismes_hl.jpg" alt="">  
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
  </div>
  <!-- /.content-wrapper -->

  @include('/dashboard/partials/footer')

 