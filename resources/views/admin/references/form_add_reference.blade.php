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
											@if(Route::currentRouteName() === 'reference.create')
												Ajouter un nouveau DCI
											@else
												Modification d'un DCI
											@endif
										</strong>
									</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<form class=" justify-content-center" role="form" method="POST" action="@isset($reference) {{ route('reference.update', $reference->id) }} @else {{
								route('reference.store')}} @endisset">
									<div class="card-body">
										<div class="form-group">
											@isset($reference) @method('PUT') @endisset
											@csrf
											<label for="title">Titre</label>
											<input type="text" class="form-control" id="title" name="title" required placeholder="Titre de la reference" value="{{isset($reference) ? $reference->title : ''}}">
										</div>
										<div class="form-group">
											<label for="authors">Authors</label>
											<input type="text" class="form-control" id="authors" name="authors" required placeholder="Nom de l'auteur" value="{{isset($reference) ? $reference->authors : ''}}">
										</div>
										<div class="form-group">
											<label for="year">Année</label>
											<input type="text" class="form-control" id="year" name="year" required placeholder="Année de la référence" value="{{isset($reference) ? $reference->year : ''}}"> 
										</div>
										<div class="form-group">
											<label for="edition">Edition</label>
											<input type="text" class="form-control" id="edition" name="edition" required placeholder=" de la référence" value="{{isset($reference) ? $reference->edition : ''}}">
										</div>
										<div class="form-group">
											<label for="url">URL</label>
											<input type="text" class="form-control" id="url" name="url" required placeholder="URL de la référence" value="{{isset($reference) ? $reference->url : ''}}">
										</div>
										<div class="form-group">
											<label for="user_id">Users</label>
											<select name="user_id" class="form-control">
												@if(Route::currentRouteName() === 'reference.create')
													<option></option>
												@foreach ($users as $user)
													<option value="{{$user->id}}">{{$user->name}}</option>
												@endforeach
												@else
												<option></option>
													@foreach ($users as $user)
														<option value="{{$user->id}}" @if($reference->user_id == $user->id) selected @endif>{{$user->name}}</option>
													@endforeach
												@endif


											</select>
										</div>
										<div class="form-group">
											<label for="route_id">Route</label>
											<select name="route_id" class="form-control">
												@if(Route::currentRouteName() === 'drug.create')
													<option></option>
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
											<label for="atc_level_4s_id">AtcLevel4</label>
											<select name="atc_level_4s_id" class="form-control">
												@if(Route::currentRouteName() === 'drug.create')
													<option></option>
													@foreach ($atc_level_4s as $atc_level_4)
													<option value="{{$atc_level_4->id}}">{{$atc_level_4->name}}</option>
													@endforeach
												@else
													<option></option>
													@foreach ($atc_level_4s as $atc_level_4)
													<option value="{{$atc_level_4->id}}" @if($drug->atc_level_4s_id == $atc_level_4->id) selected @endif>{{$atc_level_4->name}}</option>
												@endforeach
												@endif
											</select>
										</div>
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

