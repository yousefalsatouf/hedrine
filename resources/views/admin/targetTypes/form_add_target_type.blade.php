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
											@if(Route::currentRouteName() === 'target_type.create')
												Ajouter un nouveau type de target
											@else
												Modification d'un type de target
											@endif
										</strong>
									</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<form class=" justify-content-center" role="form" method="POST" action="@isset($force) {{ route('type_target.update', $type_target->id) }} @else {{
								route('target_type.store')}} @endisset">
									<div class="card-body">
										<div class="form-group">
											@isset($target_type) @method('PUT') @endisset
											@csrf
											<label for="name">Nom du type de target</label>
											<input type="text" class="form-control" id="name" name="name" required placeholder="Nom du type de target" value="{{isset($target_type) ? $target_type->name : ''}}">
										</div>
										<div class="form-group">
											<label for="rank">Rank</label>
											<input type="number" class="form-control" id="rank" name="rank" required placeholder="Indiquez le rank" value="{{isset($target_type) ? $target_type->rank : ''}}">
										</div>
										<div class="form-group">
											<label for="description">Description</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Indiquez la description" value="{{isset($target_type) ? $target_type->description : ''}}">
										</div>
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
										<div class="control-group">
											<div class="controls">
												<a class="btn btn-light" href="{{ route('target_type.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des types de target</a>
												<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
													@if(Route::currentRouteName() === 'target_type.create')
														Ajouter un nouveau type de target
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

