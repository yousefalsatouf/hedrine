<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <br />
    <div class="text-center">
      <img src="{{ asset('images/ulb-icon.png') }}" alt="Logo ULB">
    </div>
    
      

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active" style="background-color:green;" >
              <i class="nav-icon fas fa-search-plus"></i>
              <p>
                Recherche
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Plante <-> DCI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Plante <-> Mécanisme</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active" style="background-color:green;">
                <i class="nav-icon fas fa-compress-arrows-alt"></i>
                <p>
                  Index
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="herb" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Plante</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="drug" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>DCI</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="target" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cas Rapporté et Mécanisme</p>
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