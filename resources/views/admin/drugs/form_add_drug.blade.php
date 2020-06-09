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
											@if(Route::currentRouteName() === 'drug.create')
												Ajouter un nouveau DCI
											@else
												Modification d'un DCI
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
											<label for="name">Nom du DC</label>
											<input type="text" class="form-control" id="name" name="name" required placeholder="Nom du DCI" value="{{isset($drug) ? $drug->name : ''}}">
										</div>
										<div class="form-group">
											<label for="drug_families_id">Famille</label>
											<select name="drug_families_id" class="form-control">
												<option></option>
												@foreach ($drug_families as $drug_familie)
													<option value="{{$drug_familie->id}}">{{$drug_familie->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<label for="route_id">Route</label>
											<select name="route_id" class="form-control">
												<option></option>
												@foreach ($routes as $route)
													<option value="{{$route->id}}">{{$route->name}}</option>
												@endforeach
											</select>
										</div>
										{{-- <div class="form-group">
											<label for="atc_level_4s_id">AtcLevel4</label>
											<select name="atc_level_4s_id" class="form-control">
												<option></option>
												@foreach ($atc_level_4s as $atc_level_4)
													<option value="{{$atc_level_4->id}}" @if($drug->atc_level_4s_id == $atc_level_4->id) selected @endif>{{$atc_level_4->name}}</option>
												@endforeach
											</select>
										</div> --}}
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-success"><i class="fas fa-location-arrow"></i>
													@if(Route::currentRouteName() === 'drug.create')
														Ajouter un nouveau DCI
													@else
														Sauvegarder
													@endif
												</button>
												<a class="btn btn-primary" href="{{ route('drug.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des DCI</a>
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

