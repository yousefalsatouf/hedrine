
@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
    <div class="row" id="new-x-target">
        <div class="col-12">
            <section class="content">
                <div class="container-fluid">
                    @if(session()->has('message'))
                        <div class="col s12">
                            <div class="card purple darken-3">
                                <div class="card-content white-text center-align">
                                    {{ session('message') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-8 offset-md-2 ">
                            <!-- general form elements -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title"> Ajouter une nouvelle Herb Target:</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class=" justify-content-center" role="form" method="POST" action="">
                                    <div class="card-body">
                                        <div class="alert alert-light alert-dismissible fade show text-danger">
                                            <strong><i class="fa fa-info-circle info text-danger" id="required-msg"></i></strong> champ obligatoire!
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        </div>
                                            {{--@isset($herb) @method('PUT') @endisset--}}
                                        @csrf
                                        <div class="form-group">
                                            <label for="herb_form">Herbs <i class="fa fa-info-circle info text-danger" id="required-msg"></i>: </label>
                                            <select class="form-control" required id="forms" >
                                                <option>== Choix ==</option>
                                                @foreach ($herbs as $herb)
                                                    @if(Route::currentRouteName() === 'newHerbTarget')
                                                        <option value="{{ $herb->id }}">{{ $herb->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="herb_form">Targets <i class="fa fa-info-circle info text-danger" id="required-msg"></i>: </label>
                                            <select class="form-control" required id="forms" >
                                                <option>== Choix ==</option>
                                                @foreach ($targets as $target)
                                                    @if(Route::currentRouteName() === 'newHerbTarget')
                                                        <option value="{{ $target->id }}">{{ $target->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="herb_form">Effects : </label>
                                            <select class="form-control" id="forms" >
                                                <option>== Choix ==</option>
                                                @foreach ($effects as $effect)
                                                    @if(Route::currentRouteName() === 'newHerbTarget')
                                                        <option value="{{ $effect->id }}">{{ $effect->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="herb_form">Force : </label>
                                            <select class="form-control" id="forms" >
                                                <option>== Choix ==</option>
                                                @foreach ($force as $f)
                                                    @if(Route::currentRouteName() === 'newHerbTarget')
                                                        <option value="{{ $f->id }}">{{ $f->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="herb_form">References : </label>
                                            <select class="form-control" id="forms" >
                                                <option>== Choix ==</option>
                                                @foreach ($references as $reference)
                                                    @if(Route::currentRouteName() === 'newHerbTarget')
                                                        <option value="{{ $reference->id }}">{{ $reference->title }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="herb_form">Note : </label>
                                            <div class="col-md-6">
                                                <textarea name="msg" required cols="80" rows="8" placeholder="Note ..."></textarea>
                                            </div>
                                        </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="control-group">
                                            <div class="controls">
                                                <a class="btn btn-light" href="{{ route('target.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des targets</a>
                                                <button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-check-circle"></i>
                                                        Ajouter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
        </div>
    </div>


@endsection

