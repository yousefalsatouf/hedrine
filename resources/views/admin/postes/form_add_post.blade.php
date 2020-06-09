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
											@if(Route::currentRouteName() === 'post.create')
												Ajouter un nouveau poste
											@else
												Modification d un post
											@endif
										</strong>
									</h3>
								</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form class=" justify-content-center" role="form" method="POST" action="@isset($post) {{ route('post.update', $post->id) }} @else {{route('post.store')}} @endisset">
								<div class="card-body">
									<div class="form-group">
										@isset($post) @method('PUT') @endisset
										@csrf
										<label for="title">Titre du poste</label>
										<input type="text" class="form-control" id="title" name="title" required placeholder="Titre du poste" value="{{isset($post) ? $post->title : ''}}">
									</div>
									<div class="form-group">
										<label for="body">Message du poste</label>
										<textarea rows="10" cols="15" class="form-control" id="body" name="body" placeholder="Texte du poste" required>{{ isset($post) ? $post->body : ''}}</textarea>
                                    </div>

                                    <div class="form-group form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input"  name="important" id="important" value="1" @if (old('important',isset($post) ? $post->important : 0 )) checked

                                        @endif>

                                        <label for="important" class="form-check-label"> Important ? </label>

                                    </div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<div class="control-group">
										<div class="controls">
											<button type="submit" class="btn btn-success"><i class="fas fa-location-arrow"></i>
												@if(Route::currentRouteName() === 'post.create')
													Ajouter un nouveau poste
												@else
												 Sauvegarder
												@endif
											</button>
											<a class="btn btn-primary" href="{{ route('post.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des postes</a>
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

