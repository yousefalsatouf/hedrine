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
        <!-- JPM DEBUT du contenant Recherche et ses contenus -->
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
              <a href="{{ route('hinteractions.hdi')}}" class="nav-link">
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
        <!-- JPM FIN du contenant Recherche et ses contenus -->
          
        <!-- JPM DEBUT du contenant Index et ses contenus -->
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
              <a href="{{ route('herbs.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                Plantes
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
        <!-- JPM FIN du contenant Index et ses contenus -->

        <!-- DEBUT POUR COMPTE ADMINISTRATION-->
        @if(auth()->user()->role_id == 1 )
           
          <!-- JPM DEBUT DU CONTENANT ADMINSTRER -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active" style="background-color:green;">
              <i class="fas fa-unlock-alt nav-icon"></i>
              <p>
                Administrer
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
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Manage
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Actions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Drugs Families</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forces</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roles</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                        <p>Target Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Users</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pending Users</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- JPM FIN DU CONTENANT ADMINSTRER -->

          <!-- JPM DEBUT DU GERER LES DONNEES -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active" style="background-color:green;">
              <i class="fas fa-database nav-icon"></i>
              <p>
                Gérer les données
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
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                    <a href="{{route('drug.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Drugs</p>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a href="{{ route('herb.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Herbs</p>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a href="{{ route('target.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Targets</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- JPM FIN DU CONTENANT GARER LES DONNEES -->
        @endif
        <!-- JPM FIN POUR COMPTE ADMINSTRATION-->
      </ul>
    </nav>
  </div>
</aside>

