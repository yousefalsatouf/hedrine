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
											@if(Route::currentRouteName() === 'role.create')
												Ajouter un nouveau rôle
											@else
												Modification d'un rôle
											@endif
										</strong>
									</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<form class=" justify-content-center" role="form" method="POST" action="@isset($role) {{ route('role.update', $role->id) }} @else {{
								route('role.store')}} @endisset">
									<div class="card-body">
										<div class="form-group">
											@isset($role) @method('PUT') @endisset
											@csrf
											<label for="name">Nom du role</label>
											<input type="text" class="form-control" id="name" name="name" required placeholder="Veuillez indiquer un nom pour role" value="{{isset($role) ? $role->name : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Description</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Veuillez indiquer une description pour rôle" value="{{isset($role) ? $role->description : ''}}">
										</div>
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
										<div class="control-group">
											<div class="controls">
												<a class="btn btn-light" href="{{ route('role.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des roles</a>
												<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
													@if(Route::currentRouteName() === 'role.create')
														Ajouter un nouveau role
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

