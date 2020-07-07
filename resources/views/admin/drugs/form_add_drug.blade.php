@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
	<div class="row">

		<div class="col-12">
			<section class="content">
				<div class="container-fluid">
                    <div class="row justify-content-end" style="padding-bottom: 0.75rem">
                        @if((auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3) )
                        <a class="btn btn-light" href="{{ route('drug.create') }}" role="button">Créer un nouveau médicament</a>
                    @endif
                    </div>
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
											@if(Route::currentRouteName() === 'drug.create')
												Ajouter un nouveau DCI
											@else
												Modification d un DCI
											@endif
										</strong>
									</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<form class=" justify-content-center" role="form" method="POST" action="@isset($drug) {{ route('drug.update', $drug->id) }} @else {{
								route('drug.store')}} @endisset">
									<div class="card-body">
										<div class="form-group">
											@isset($drug) @method('PUT') @endisset
											@csrf
											<label for="name">Nom du DCI</label>
											<input type="text" class="form-control" id="name" name="name" required placeholder="Veuillez indiquer un nom pour le DCI" value="{{isset($drug) ? $drug->name : ''}}">
										</div>
										<div class="form-group">
											<label for="drug_families_id">Famille</label>
											<select name="drug_families_id" class="form-control">
												@if(Route::currentRouteName() === 'drug.create')
													<option value="" disabled selected>Veuillez indiquer un famille pour le DCI </option>
												@foreach ($drug_families as $drug_familie)
													<option value="{{$drug_familie->id}}">{{$drug_familie->name}}</option>
												@endforeach
												@else
												<option></option>
													@foreach ($drug_families as $drug_familie)
														<option value="{{$drug_familie->id}}" @if($drug->drug_families_id == $drug_familie->id) selected @endif>{{$drug_familie->name}}</option>
													@endforeach
												@endif
											</select>
										</div>
										<div class="form-group">
											<label for="route_id">Route</label>
											<select name="route_id" class="form-control">
												@if(Route::currentRouteName() === 'drug.create')
													<option value="" disabled selected>Veuillez indiquer une route pour le DCI </option>
												@foreach ($routes as $route)
													<option value="{{$route->id}}">{{$route->name}}</option>
												@endforeach
												@else
													<option></option>
													@foreach ($routes as $route)
													<option value="{{$route->id}}" @if($drug->route_id == $route->id) selected @endif>{{$route->name}}</option>
												@endforeach
												@endif
											</select>
										</div>
										<div class="form-group">
											<label for="atc_level_4s_id">AtcLevel</label>
											<select name="atc_id" class="form-control">
												@if(Route::currentRouteName() === 'drug.create')
													<option value="" disabled selected>Veuillez indiquer un atc pour le DCI </option>
													@foreach ($atcs as $atc_level)
													<option value="{{$atc_level->id}}">{{$atc_level->name}}</option>
													@endforeach
												@else
													<option></option>
													@foreach ($atcs as $atc_level)
													<option value="{{$atc_level->id}}" @if($drug->atc_id == $atc_level->id) selected @endif>{{$atc_level->name}}</option>
												@endforeach
												@endif
											</select>
										</div>
                                        @if(\Illuminate\Support\Facades\Auth::user()->role_id <=2)
                                            <div class="form-group">
                                                <label for="is_validated"> <input type="checkbox" name="is_validated" id="is_validated" checked> Validé</label>
                                            </div>
                                        @endif
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
										<div class="control-group">
											<div class="controls">
												<a class="btn btn-light" href="{{ route('drug.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des DCI</a>
												<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
													@if(Route::currentRouteName() === 'drug.create')
														Ajouter un nouveau DCI
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

