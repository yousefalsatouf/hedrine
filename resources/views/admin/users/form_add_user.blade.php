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
											@if(Route::currentRouteName() === 'user.create')
												Ajouter un nouveau user
											@else
												Modification d'un user
											@endif
										</strong>
									</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<form class=" justify-content-center" role="form" 
										method="POST" action="@isset($user) {{ route('user.update', $user->id) }} @else {{route('user.store')}} @endisset">
									<div class="card-body">
										<div class="form-group">
											@isset($user) @method('PUT') @endisset
											@csrf
											<label for="name">Nom du user</label>
											<input type="text" class="form-control" id="name" name="name" required placeholder="Nom du user" value="{{isset($user) ? $user->name : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Firstname</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Description" value="{{isset($user) ? $user->firstname : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Team</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Description" value="{{isset($user) ? $user->team : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Numéro portable</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Description" value="{{isset($user) ? $user->tel1 : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Numéro Fixe</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Description" value="{{isset($user) ? $user->tel2 : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Email</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Description" value="{{isset($user) ? $user->email : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Firstname</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Description" value="{{isset($user) ? $user->email_verified_at : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Password</label>
											<input type="password" class="form-control" id="description" name="description" required placeholder="Description" value="{{isset($user) ? $user->password : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Firstname</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Description" value="{{isset($user) ? $user->is_actif : ''}}">
										</div>
										<div class="form-group">
											<label for="Description">Is Actif</label>
											<input type="text" class="form-control" id="description" name="description" required placeholder="Description" value="{{isset($user) ? $user->is_actif : ''}}">
										</div>
										
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
										<div class="control-group">
											<div class="controls">
												<a class="btn btn-light" href="{{ route('user.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des users</a>
												<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
													@if(Route::currentRouteName() === 'user.create')
														Ajouter un nouveau user
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

