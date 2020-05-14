<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Accueil</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Administrer</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Gérer les données</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">{{ $posts->count() }}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        @foreach ($posts as $post )
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                <b>{{ $post->title }}</b>
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
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
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
  </ul>
  <div class="dropdown ml-auto">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" href="#">
        <i class="fas fa-user-circle"></i>
        {{ auth()->user()->firstname}} {{auth()->user()->name }}      </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ action('SessionController@destroy') }}">
          <i class="fas fa-sign-out-alt"></i>
            logout
        </a>
    </div>
  </div>
</nav>