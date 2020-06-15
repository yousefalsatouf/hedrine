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
											@if(Route::currentRouteName() === 'force.create')
												Ajouter une nouvelle Force
											@else
												Modification d'une Force'
											@endif
										</strong>
									</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<form class=" justify-content-center" role="form" method="POST" action="@isset($force) {{ route('force.update', $force->id) }} @else {{
								route('force.store')}} @endisset">
									<div class="card-body">
										<div class="form-group">
											@isset($force) @method('PUT') @endisset
											@csrf
											<label for="name">Nom de la force </label>
											<input type="text" class="form-control" id="name" name="name" required placeholder="Nom de la force" value="{{isset($force) ? $force->name : ''}}">
										</div>

										<div class="form-group">
											@isset($force) @method('PUT') @endisset
											@csrf
											<label for="color">Coleur de la force </label>
											<input type="text" class="form-control" id="color" name="color" required placeholder="Color de la force" value="{{isset($force) ? $force->color : ''}}">
										</div>

										<div class="form-group">
											<label for="visible">Rank</label>
											<select class="form-control" id="exampleFormControlSelect1" name="visible">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
											</select>
										</div>

										<div class="form-group">
											<label for="visible">Visible</label>
											<select class="form-control" id="exampleFormControlSelect1" name="visible">
												<option>0</option>
												<option>1</option>
											</select>
										</div>
									</div>
								</div> 
									<!-- /.card-body -->
									<div class="card-footer">
										<div class="control-group">
											<div class="controls">
												<a class="btn btn-light" href="{{ route('force.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des forces</a>
												<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
													@if(Route::currentRouteName() === 'force.create')
														Ajouter un nouvelle force
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

