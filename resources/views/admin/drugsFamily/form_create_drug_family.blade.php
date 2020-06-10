@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
    <div class="row">
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
                        <div class="col-md-8 offset-md-2 ">
                            <!-- general form elements -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <strong>
                                            @if(Route::currentRouteName() === 'drugsFamily.create')
                                                Ajouter un nouveau Drug Family
                                            @else
                                                Modification d'un Drug Family
                                            @endif
                                        </strong>
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                @php

                                @endphp
                                <form class=" justify-content-center" role="form" method="POST" action="@isset($drugFamily) {{ route('drugsFamily.update', $drugFamily->id) }} @else {{
								route('drugsFamily.store')}} @endisset">
                                    <div class="card-body">
                                        <div class="form-group">
                                            @isset($drugFamily) @method('PUT') @endisset
                                            @csrf
                                            <label for="name">Nom du Drug Family</label>
                                            <input type="text" class="form-control" id="name" name="name" required placeholder="Nom du DCI" value="{{isset($drugFamily) ? $drugFamily->name : ''}}">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="control-group">
                                            <div class="controls">
                                                <a class="btn btn-light" href="{{ route('drugsFamily') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des Drug Family</a>
                                                <button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
                                                    @if(Route::currentRouteName() === 'drugsFamily.create')
                                                        Ajouter un nouveau Drug Family
                                                    @else
                                                        Sauvegarder
                                                    @endif
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

