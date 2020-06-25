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
											Modification d'une Interaction Plante
										</strong>
									</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<form class=" justify-content-center" role="form" method="POST" action="@isset($hinteraction) {{ route('hinteraction.update', $hinteraction->id) }} @else {{
								route('hinteraction.store')}} @endisset">
									<div class="card-body">
										<div class="form-group">
											@isset($hinteraction) @method('PUT') @endisset
											@csrf
											<label for="herb_id">Herb Name</label>
												<select name="herb_id" class="form-control">
													<option></option>
													@foreach ($herbs as $herb)
														<option value="{{$herb->id}}" @if($hinteraction->herb_id == $herb->id) selected @endif>{{$herb->name}}</option>
													@endforeach
												</select>
										</div>
										<div class="form-group">
											@isset($hinteraction) @method('PUT') @endisset
											@csrf
											<label for="target_id">Target Name</label>
											<select name="target_id" class="form-control">
												<option></option>
												@foreach ($targets as $target)
													<option value="{{$target->id}}" @if($hinteraction->target_id == $target->id) selected @endif>{{$target->name}}</option>
												@endforeach
											</select>
										</div>

										<div class="form-group">
											@isset($hinteraction) @method('PUT') @endisset
											@csrf
											<label for="herb_form">Effects</label>
											<select class="form-control effectInteraction" id="effects" name="effects[]" multiple >
												@foreach ($effects as $effect)
													<option style="color:black" value="{{ $effect->id }}" {{ in_array($effect->id, old('effects') ?: $hinteraction->effects->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $effect->name }}
								            		</option>
								            		{{-- @endif --}}
								            	@endforeach
								            </select>
										</div>
										<div class="form-group">
											@isset($hinteraction) @method('PUT') @endisset
											@csrf
											<label for="force_id">Force</label>
											<select name="force_id" class="form-control">
												<option></option>
												@foreach ($forces as $force)
													<option value="{{$force->id}}" @if($hinteraction->force_id == $force->id) selected @endif>{{$force->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											@isset($hinteraction) @method('PUT') @endisset
											@csrf
											<label for="notes">Notes de l'interaction</label>
											<textarea rows="10" cols="15" class="form-control" id="notes" name="notes" placeholder="Veuillez introduire une note pour la target" required>{{ isset($hinteraction) ? $hinteraction->notes : ''}}</textarea>
										</div>
										<div class="form-group">
											@isset($hinteraction) @method('PUT') @endisset
											@csrf
											<label for="herb_form">Références</label>
											<select class="form-control referenceInteraction" id="references" name="references[]" multiple >
												@foreach ($references as $reference)
													<option style="color:black" value="{{ $reference->id }}" {{ in_array($reference->id, old('references') ?: $hinteraction->references->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $reference->title }}
								            		</option>
								            	@endforeach
								            </select>
										</div>
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
										<div class="control-group">
											<div class="controls">
												<a class="btn btn-light" href="{{ route('hinteraction.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des Interactions Plantes</a>
												<button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-location-arrow"></i>
													Sauvegarder
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

