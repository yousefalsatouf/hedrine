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
                            <div class="card card-light">
                                <div class="card-header">
                                    <h3 class="card-title"> Ajouter une nouvelle Herb Target:</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class=" justify-content-center" role="form" method="POST" action="{{route('newHerbTarget.store')}}">
                                    <div class="card-body">
                                        <div class="alert alert-light alert-dismissible fade show text-danger">
                                            <strong><i class="fa fa-info-circle info text-danger" id="required-msg"></i></strong> Champs obligatoires!
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        </div>
                                        @csrf
                                        <div class="form-group">
                                            <label for="herb">Herbs : <i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>
                                            <select class="form-control" name="herb" required="" id="forms" >
                                                <option value="" selected> == Choix ==</option>
                                                @foreach ($herbs as $herb)
                                                    <option value="{{ $herb->id }}">{{ $herb->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="target">Targets : <i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>
                                            <select class="form-control" name="target" required="" id="forms" >
                                                <option value="" selected>== Choix ==</option>
                                                @foreach ($targets as $target)
                                                        <option value="{{ $target->id }}">{{ $target->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="force">Force : <i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>
                                            <select class="form-control" required="" name="force" id="forms" >
                                                <option value="" selected>== Choix ==</option>
                                                @foreach ($force as $f)
                                                    <option value="{{ $f->id }}">{{ $f->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="effects">Effects : <i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>
                                            <br>
                                            <b class="text-info"><i class="fa fa-info-circle info text-info" id="required-msg"></i>  Choisissez un ou plusieurs effets</b>
                                            <hr>
                                            <select class="form-control" required="" id="effectForm" name="effects[]" multiple>

                                                @foreach ($effects as $effect)
                                                        <option value="{{ $effect->id }}">{{ $effect->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="references">References : <i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>
                                            <br>
                                            <b class="text-info"><i class="fa fa-info-circle info text-info" id="required-msg"></i> Choisissez une ou plusieurs références</b>
                                            <hr>
                                            <select class="form-control" id="referencesForm" required="" style="height: 7rem" name="references[]" multiple>
                                                @foreach ($references as $reference)
                                                    <option value="{{ $reference->id }}" style="margin: 0.5rem auto" >{{ $reference->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="note">Note : <i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>
                                            <div class="w-100" >
                                                <textarea name="note" class="w-100"  required cols="60" rows="8" placeholder="Note ..."></textarea>
                                            </div>
                                        </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="control-group">
                                            <div class="controls">
                                                <a class="btn btn-light" href="{{ route('hinteraction.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des hinteractions</a>
                                                <button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-check-circle"></i>
                                                        Ajouter
                                                </button>
                                            </div>
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

