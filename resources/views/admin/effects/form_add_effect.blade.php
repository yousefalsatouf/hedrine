@extends('dashboard.layout')

@yield('content_title') {{-- créé dans la view master_dashboard.blade.php --}}
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
											@if(Route::currentRouteName() === 'effect.create')
												Ajouter un nouvel effect
											@else
												Modification d'un effect
											@endif
										</strong>
									</h3>
								</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form class=" justify-content-center" role="form" method="POST" action="@isset($effect) {{ route('effect.update', $effect->id) }} @else {{route('effect.store')}} @endisset">
								<div class="card-body">
									<div class="form-group">
										@isset($effect) @method('PUT') @endisset
										@csrf
										<label for="name">Nom de l'effet</label>
										<input type="text" class="form-control" id="name" name="name" required placeholder="Nom de l'effet" value="{{isset($effect) ? $effect->name : ''}}">
									</div>
									
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<div class="control-group">
										<div class="controls">
											<a class="btn btn-light" href="{{ route('effect.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des effets</a>
											<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
												@if(Route::currentRouteName() === 'effect.create')
													Ajouter un nouvel effet
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
			</section>
		</div>
    </div>
@endsection

