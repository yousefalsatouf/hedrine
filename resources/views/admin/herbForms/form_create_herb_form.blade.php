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
                                            @if(Route::currentRouteName() === 'herb_form.create')
                                                Ajouter un nouvelle forme de plante
                                            @else
                                                Modification d'une forme de plante
                                            @endif
                                        </strong>
                                    </h3>
                                </div>
                               <form class=" justify-content-center" role="form" method="POST" action="@isset($herb_form) {{ route('herb_form.update', $herb_form->id) }} @else {{
								route('herb_form.store')}} @endisset">
                                    <div class="card-body">
                                        <div class="form-group">
                                            @isset($herb_form) @method('PUT') @endisset
                                            @csrf
                                            <label for="name">Nom de la forme de plante</label>
                                            <input type="text" class="form-control" id="name" name="name" required placeholder="Nom de la forme de la plante" value="{{isset($herb_form) ? $herb_form->name : ''}}">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="control-group">
                                            <div class="controls">
                                                <a class="btn btn-light" href="{{ route('herb_form.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des formes de plante</a>
                                                <button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
                                                    @if(Route::currentRouteName() === 'herb_form.create')
                                                        Ajouter un nouvelle from de plante
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

