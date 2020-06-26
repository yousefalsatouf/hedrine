<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <br />
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">
                <img class="img-fluid" src="{{ asset('images/hedrine_petit.png') }}" alt="Logo Hedrine">
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->

        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments fa-2x"></i>
                    <span class="badge badge-danger navbar-badge" style="font-size: 15.5px">
                        {{ $posts->count() }}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    @foreach($posts as $post)

                            <a href="#" class="dropdown-item">
                                <!-- Message Start (les potes) -->
                                <div class="media">
                                    <div class="media-body @if ($post->important == 1)
                                        important
                                    @endif">
                                        <h3 class="dropdown-item-title">
                                            <b>{{ $post->title }}</b>
                                            @if ($post->important == 1)
                                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                            @endif
                                        </h3>
                                        <p class="text-sm">{{ Str::limit($post->body, 35) }}</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>
                                            {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>

                    @endforeach
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('post.index') }}" class="dropdown-item dropdown-footer">See All New Posts</a>
                </div>
            </li>
        </ul>

    <!-- Right navbar links  -->
    @if ((auth()->user()->role_id == 1 )||(auth()->user()->role_id == 2 ))
         <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell fa-2x"></i>
                    <span class="badge badge-danger navbar-badge" style="font-size: 15.5px">

                        {{-- $postsToValidate->count() --}}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    {{--
                        @foreach($postsToValidate as $post)

                        <a href="{{ route('post.validate',$post->id) }}" class="dropdown-item">
                            <!-- Message Start (les potes) -->

                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            <b>{{ $post->title }}</b>

                                        </h3>
                                        <p class="text-sm">{{ Str::limit($post->body, 35) }}</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>
                                            {{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}
                                            <span class="float-right text-sm text-danger">by {{ $post->users->name}}</span>
                                        </p>

                                        <div class="dropdown-divider"></div>
                                    </div>
                                </div>

                            <!-- Message End -->
                        </a>
                    @endforeach

                    --}}
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All New Posts</a>
                </div>
            </li>
        </ul>
    @endif


    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-sm-inline-block">
            <img class="img-fluid" src="{{ asset('images/Plant-icon_32.png') }}" alt="plante">
        </li>
        <li class="nav-item d-sm-inline-block">{{ $validatedHerb->count() }}</li>
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

    <div class="dropdown ml-auto">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" href="#">
            <i class="fas fa-user-circle"></i>
            {{ auth()->user()->firstname }} {{ auth()->user()->name }} ({{ auth()->user()->roles->name }})

        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ action('SessionController@destroy') }}">
                <i class="left fas fa-sign-out-alt"></i>
                Se déconnecter
            </a>
            @if(\Illuminate\Support\Facades\Auth::user()->role_id === 4)
                <a class="dropdown-item" href="{{route('unsubscribe', \Illuminate\Support\Facades\Auth::id())}}"><i style="color: red" class="left fas fa-times-circle"></i> Désinscription</a>
                <a class="dropdown-item" href="{{ route('userprofile.index') }}">
                    <i class="left fas fa-sign-out-alt"></i>
                    Mon compte
                </a>
            @endif
        </div>
    </div>
</nav>

