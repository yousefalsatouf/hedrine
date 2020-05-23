@extends('layouts.master_dashboard')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
	<div class="row">
		<div class="col-md-1">

		</div>
       <div class="col-md-6 .offset-md-1 ">
           <form action="">
				<fieldset class="form-group">
					<legend style="color: #e32; font-size: 160%; font-weight: bold" >Interactions...</legend>

					<div class="row">
                        <div class="col-6">
                            <div class="form-group">
								<label class="form-check-label"><strong><h5>Plante *</h5></strong></label>
								<select id="" class="form-control">
									<option>Choisir une plante ...</option>
									@foreach ($herbs as $item)
										<option>{{$item->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label class="form-check-label"><strong><h5>DCI</h5></strong></label>
								<select id="" class="form-control">
									<option> et/ou Choisir une DCI ...</option>
									@foreach ($drugs as $item)
										<option>{{$item->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-6">
                            <div class="form-group">
								<label class="form-check-label"><strong><h5>Plante *</h5></strong></label>
								<select id="" class="form-control">
									<option>Choisir une plante ...</option>
									@foreach ($herbs as $item)
										<option>{{$item->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label class="form-check-label"><strong><h5>DCI</h5></strong></label>
								<select id="" class="form-control">
									<option> et/ou Choisir une DCI ...</option>
									@foreach ($drugs as $item)
										<option>{{$item->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary" style="background-color: #62af56; border: 1px solid #62af56">Chercher <i class="fas fa-chevron-right"></i></button>
				</fieldset>
		   </form>
	   </div>
	</div>

@endsection

