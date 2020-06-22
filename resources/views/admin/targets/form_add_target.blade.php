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
										@if(Route::currentRouteName() === 'target.create')
											Ajouter un nouveau target
										@else
										Modification d'un target
										@endif
									</strong>
								</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form class=" justify-content-center" role="form" method="POST" action="@isset($target) {{ route('target.update', $target->id) }} @else {{
								route('target.store')}} @endisset">
								<div class="card-body">
									<div class="form-group">
										@isset($target) @method('PUT') @endisset
										@csrf
										<label for="name">Nom du Target</label>
										<input type="text" class="form-control" id="name" name="name" required placeholder="Veuillez indiquer un nom pour le target" value="{{isset($target) ? $target->name : ''}}">
									</div>
									<div class="form-group">
										<label for="long_name">Long nom du target</label>
										<input type="text" class="form-control" id="long_name" name="long_name" required placeholder="Veuillez indiquer un long nom pour la target" value="{{isset($target) ? $target->long_name : ''}}">
									</div>
									<div class="form-group">
										<label for="notes">Notes du poste</label>
										<textarea rows="10" cols="15" class="form-control" id="notes" name="notes" placeholder="Veuillez introduire une note pour la target" required>{{ isset($target) ? $target->notes : ''}}</textarea>
									</div>
									<div class="form-group">
										<label for="target_type_id">Type target</label>
										<select name="target_type_id" class="form-control" placeholder="Veuillez indiquer un type de target pour la target ">
											@if(Route::currentRouteName() === 'target.create')
												<option value="" disabled selected>Veuillez indiquer un type de target pour la target </option>
												@foreach ($target_types as $target_type)
												<option value="{{$target_type->id}}">{{$target_type->name}}</option>
												@endforeach
											@else
												<option></option>
												@foreach ($target_types as $target_type)
													<option value=" {{$target_type->id}}" @if($target->target_type_id == $target_type->id) selected @endif>{{$target_type->name}}</option>
												@endforeach
											@endif
										</select>
									</div>
								</div>
									<!-- /.card-body -->
								<div class="card-footer">
									<div class="control-group">
										<div class="controls">
											<a class="btn btn-light" href="{{ route('target.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des targets</a>
											
											<button type="submit" class="btn btn-outline-success 
												float-right"><i class="fas fa-location-arrow"></i>
													@if(Route::currentRouteName() === 'target.create')
														Ajouter un nouveau target
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

