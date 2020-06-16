
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
						<!-- left column -->
						<div class="col-md-8 offset-md-2 ">
						<!-- general form elements -->
						<div class="card card-success">
							<div class="card-header">
								<h3 class="card-title">
									<strong>
										@if(Route::currentRouteName() === 'herb.create')
											Ajouter un nouvelle plante
										@else
										Modification d'une plante
										@endif
									</strong>
								</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
						<form class=" justify-content-center" role="form" method="POST" action="@isset($herb) {{ route('herb.update', $herb->id) }} @else {{
							route('herb.store')}} @endisset">
								<div class="card-body">
									<div class="form-group">
										@isset($herb) @method('PUT') @endisset
										@csrf
										<label for="name">Nom d'une plante</label>
										<input type="text" class="form-control" id="title" name="name" required placeholder="Nom d'une plante" value="{{isset($herb) ? $herb->name : ''}}">
									</div>
									<div class="form-group">
										<label for="sciname">Sciname</label>
										<input type="text" class="form-control" id="sciname" name="sciname" required placeholder="Nom du sciname" value="{{isset($herb) ? $herb->sciname : ''}}">
									</div>
									<div class="form-group">
										<label for="herb_form">Formes d'une plante</label>
										<select class="form-control herbForm" id="forms" name="forms[]" multiple >
											@foreach ($herb_forms as $herb_form)
												@if(Route::currentRouteName() === 'herb.create')
							            		<option value="{{ $herb_form->id }}" {{ in_array($herb_form->id, old('forms') ?: []) ? 'selected' : '' }}>{{ $herb_form->name }}</option>
							            		@else
							            		<option value="{{ $herb_form->id }}" {{ in_array($herb_form->id, old('forms') ?: $herb->herb_forms->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $herb_form->name }}
							            		</option>
							            		@endif
							            	@endforeach 
	        									
	 									</select>
									</div>

										
									{{-- <div class="form-group">
										<label for="target">Target</label>
										<select class="form-control target" id="targets" name="targets[]" multiple >
											@foreach ($targets as $target)
												@if(Route::currentRouteName() === 'herb.create')
							            		<option value="{{ $target->id }}" {{ in_array($target->id, old('targets') ?: []) ? 'selected' : '' }}>{{ $target->name }}</option>
							            		@else
							            		<option value="{{ $target->id }}" {{ in_array($target->id, old('targets') ?: $herb->targets->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $target->name }}
							            		</option>
							            		@endif
							            	@endforeach
							            </select>
									</div> --}}

								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<div class="control-group">
										<div class="controls">
											<a class="btn btn-light" href="{{ route('herb.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des plantes</a>
											<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
												@if(Route::currentRouteName() === 'herb.create')
													Ajouter un nouvelle plante
												@else
												 Sauvegarder
												@endif
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

