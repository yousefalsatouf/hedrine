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
											@if(Route::currentRouteName() === 'dinteraction.create')
												Ajouter un nouveau DCI
											@else
												Modification d'un DCI
											@endif
										</strong>
									</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<form class=" justify-content-center" role="form" method="POST" action="@isset($dinteraction) {{ route('dinteraction.update', $dinteraction->id) }} @else {{
								route('dinteraction.store')}} @endisset">
									<div class="card-body">
										<div class="form-group">
											@isset($drug) @method('PUT') @endisset
											@csrf
											<label for="drug_id">Drug Name</label>
												<select name="drug_id" class="form-control">
													@if(Route::currentRouteName() === 'dinteraction.create')
														<option value="" disabled selected>Veuillez indiquer un nom pour le DCI </option>
													@foreach ($drugs as $drug)
														<option value="{{$drug->id}}">{{$drug->name}}</option>
													@endforeach
													@else
													<option></option>
														@foreach ($drugs as $drug)
															<option value="{{$drug->id}}" @if($dinteraction->drug_id == $drug->id) selected @endif>{{$drug->name}}</option>
														@endforeach
													@endif
												</select>
										</div>
										<div class="form-group">
											<label for="target_id">Target Name</label>
											<select name="target_id" class="form-control">
												@if(Route::currentRouteName() === 'dinteraction.create')
													<option value="" disabled selected>Veuillez indiquer une route pour le DCI </option>
												@foreach ($targets as $target)
													<option value="{{$target->id}}">{{$target->name}}</option>
												@endforeach
												@else
													<option></option>
													@foreach ($targets as $target)
													<option value="{{$target->id}}" @if($dinteraction->target_id == $target->id) selected @endif>{{$target->name}}</option>
												@endforeach
												@endif
											</select>
										</div>

										<div class="form-group">
											<label for="herb_form">Effects</label>
											<select class="form-control herbForm" id="forms" name="forms[]" multiple >
												@foreach ($effects as $effect)
													{{-- @if(Route::currentRouteName() === 'dinteraction.create')
								            		<option value="{{ $effect->id }}" {{ in_array($effect->id, old('forms') ?: []) ? 'selected' : '' }}>{{ $effect->name }}</option>
								            		@else --}}
								            		<option style="color:black" value="{{ $effect->id }}" {{ in_array($effect->id, old('forms') ?: $dinteraction->effects->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $effect->name }}
								            		</option>
								            		{{-- @endif --}}
								            	@endforeach
								            </select>
										</div>
										<div class="form-group">
											<label for="force_id">Force</label>
											<select name="force_id" class="form-control">
												<option></option>
												@foreach ($forces as $force)
													<option value="{{$force->id}}" @if($dinteraction->force_id == $force->id) selected @endif>{{$force->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<label for="notes">Notes du poste</label>
											<textarea rows="10" cols="15" class="form-control" id="notes" name="notes" placeholder="Veuillez introduire une note pour la target" required>{{ isset($dinteraction) ? $dinteraction->notes : ''}}</textarea>
										</div>
										<div class="form-group">
											<label for="herb_form">Références</label>
											<select class="form-control herbForm" id="forms" name="forms[]" multiple >
												@foreach ($references as $reference)
													{{-- @if(Route::currentRouteName() === 'dinteraction.create')
								            		<option value="{{ $effect->id }}" {{ in_array($effect->id, old('forms') ?: []) ? 'selected' : '' }}>{{ $effect->name }}</option>
								            		@else --}}
								            		<option style="color:black" value="{{ $reference->id }}" {{ in_array($reference->id, old('forms') ?: $dinteraction->references->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $reference->name }}
								            		</option>
								            		{{-- @endif --}}
								            	@endforeach
								            </select>
										</div>
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
										<div class="control-group">
											<div class="controls">
												<a class="btn btn-light" href="{{ route('dinteraction.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des DCI</a>
												<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
													@if(Route::currentRouteName() === 'dinteraction.create')
														Ajouter un nouvelle intarection drug
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

