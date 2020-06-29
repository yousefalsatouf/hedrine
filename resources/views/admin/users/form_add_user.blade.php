
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
										Modification d'une plante 
									</strong>
								</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
						<form class=" justify-content-center" role="form" method="POST" action="@isset($user) {{ route('user.update', $user->id) }} @else {{
							route('user.store')}} @endisset">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												@isset($user) @method('PUT') @endisset
												@csrf
												<label for="firstname">Prnom</label>
												<input type="text" class="form-control" id="firstname" name="firstname" required placeholder="Veuillez indiquer un prénom pour l'utilisateur" value="{{isset($user) ? $user->firstname : ''}}">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label for="name">Nom</label>
												<input type="text" class="form-control" id="name" name="name" required placeholder="Veuillez indiquer un nom pour l'utilisateur" value="{{isset($user) ? $user->name : ''}}">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label for="tel1">Numéro Téléphome</label>
												<input type="text" class="form-control" id="tel1" name="tel1" required placeholder="Veuillez indiquer un numéro pour l'utilisateur" value="{{isset($user) ? $user->tel1 : ''}}">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label for="email">Email</label>
												<input type="text" class="form-control" id="email" name="email" required placeholder="Veuillez indiquer un email pour l'utilisateur" value="{{isset($user) ? $user->email : ''}}">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label for="team">Team</label>
												<input type="text" class="form-control" id="team" name="team" required placeholder="Veuillez indiquer une équipe pour l'utilisateur" value="{{isset($user) ? $user->team : ''}}">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label for="role_id">Roles</label>
												<select name="role_id" class="form-control">
													<option></option>
													@foreach ($roles as $role)
														<option value="{{$role->id}}" @if($user->role_id == $role->id) selected @endif>{{$role->name}}</option>
													@endforeach
														
												</select>
											</div>
										</div>
									</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<div class="control-group">
										<div class="controls">
											<a class="btn btn-light" href="{{ route('user.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des utilisateurs</a>
											<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
												Sauvegarder
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

