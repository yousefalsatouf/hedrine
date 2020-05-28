@extends('layouts.master_dashboard')

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
										<input type="text" class="form-control" id="name" name="name" required placeholder="Titre du target" value="{{isset($target) ? $target->name : ''}}">
									</div>
									<div class="form-group">
										<label for="long_name">Long nom du target</label>
										<input type="text" class="form-control" id="long_name" name="long_name" required placeholder="Long nom du target" value="{{isset($target) ? $target->long_name : ''}}">
									</div>
									<div class="form-group">
										<label for="notes">Notes du poste</label>
										<textarea rows="10" cols="15" class="form-control" id="notes" name="notes" placeholder="Note du poste" required>{{ isset($post) ? $post->notes : ''}}</textarea>
									</div>
									<div class="form-group">
										<label for="target_type_id">Type target</label>
										<select name="target_type_id" class="form-control">
											<option></option>
											@foreach ($target_types as $target_type)
												<option value="{{$target_type->id}}">{{$target_type->name}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<div class="control-group">
										<div class="controls">
											<button type="submit" class="btn btn-success"><i class="fas fa-location-arrow"></i>
												@if(Route::currentRouteName() === 'target.create')
													Ajouter un nouveau target
												@else
												 Sauvegarder
												@endif
											</button>
											<a class="btn btn-primary" href="{{ route('target.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des targets</a>
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

