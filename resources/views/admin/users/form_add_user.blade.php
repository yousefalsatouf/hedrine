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

