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
                  <p>Plantes <--> DCI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Plantes < - > Mécanismes</p>
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
                    <p>Plantes</p>
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
          <!-- partie admin -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active" style="background-color:green;" >
                
                <p>
                  <!-- icone users admin sur fontawesome (juste copier la classe et la coller) -->
                  <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                  
                  Admin
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Administrer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="posts/add_post_form" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter un poste</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Gérer les données</p>
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