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
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label for="firstname">Prénom</label>
													<input type="text" class="form-control" id="firstname" name="firstname" required placeholder="Prénom" value="{{isset($user) ? $user->firstname : ''}}">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													@isset($user) @method('PUT') @endisset
													@csrf
													<label for="name">Nom de l'utilisateur</label>
													<input type="text" class="form-control" id="name" name="name" required placeholder="Nom du user" value="{{isset($user) ? $user->name : ''}}">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label for="team">Équipe</label>
													<input type="text" class="form-control" id="team" name="team" required placeholder="Indiquez l'équipe" value="{{isset($user) ? $user->team : ''}}">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="email">Email</label>
													<input type="text" class="form-control" id="email" name="email" required placeholder="Veuillez indiquer l'email" value="{{isset($user) ? $user->email : ''}}">
												</div>
											</div>
										</div>
										 <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <strong>{{ $message }}</strong> --}}
                                    </span>
                                @enderror
                            </div>
                        </div>
										
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label for="tel1">Numéro portable</label>
													<input type="text" class="form-control" id="tel1" name="tel1" required placeholder="Veuillez indiquer le numéro portable" value="{{isset($user) ? $user->tel1 : ''}}">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="role_id">Route</label>
													<select name="role_id" class="form-control">
														@if(Route::currentRouteName() === 'user.create')
															<option></option>
														@foreach ($roles as $role)
															<option value="{{$role->id}}">{{$role->name}}</option>
														@endforeach
														@else
															<option></option>
															@foreach ($roles as $role)
															<option value="{{$role->id}}" @if($user->role_id == $role->id) selected @endif>{{$role->name}}</option>
														@endforeach
														@endif
													</select>
												</div>
											</div>
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

