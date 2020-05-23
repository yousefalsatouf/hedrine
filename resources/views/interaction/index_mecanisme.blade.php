@extends('layouts.master_dashboard')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
	<div class="row">
		<div class="col-md-1"></div>
       <div class="col-md-5 .offset-md-1 ">
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
								<label class="form-check-label"><strong><h5>Mécanisme *</h5></strong></label>
								<select id="" class="form-control">
									<option> et/ou Choisir un mécanisme ...</option>
									@foreach ($targets as $item)
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
								<label class="form-check-label"><strong><h5>Mécanisme *</h5></strong></label>
								<select id="" class="form-control">
									<option> et/ou Choisir un mecanisme ...</option>
									@foreach ($targets as $item)
										<option>{{$item->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary" style="background-color: #62af56; border: 1px solid #62af56">
						Chercher &nbsp;&nbsp;<span><i class="fas fa-chevron-right "></i></span>
					</button>
				</fieldset>
		   </form>
	   </div>
	   <div class="col-md-3"></div>
	   <div class="col-md-2 text-center">
		   <h3 style="color: #777;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;font-size: 160%;font-weight: bold">Intensité d'interaction</h3>
		   <div class="table-responsive-sm">
			<table class="table table-bordered table-hover table-sm">
			   <tbody>
				   <tr style="background-color: #FF0000">
					   <th>Forte</th>
				   </tr>
				   <tr style="background-color: #FFCC33">
					   <th>Moyenne</th>
				   </tr>
				   <tr  style="background-color: #EEE8AA">
					   <th>Faible</th>
				   </tr>
				   <tr  style="background-color: #CCFF99">
					   <th>Aucune</th>
				   </tr>
				   <tr  style="background-color: #FFCCFF">
					   <th>Inconnue</th>
				   </tr>
				   <tr  style="background-color: #FF0000">
					   <th>G4</th>
				   </tr>
				   <tr  style="background-color: #F46207">
					   <th>G3</th>
				   </tr>
				   <tr  style="background-color: #FFCC33">
					   <th>G2</th>
				   </tr>
				   <tr  style="background-color: #EEE8AA"> 
					   <th>G1</th>
				   </tr>
				   <tr  style="background-color: #CCFF99">
					<th>G0</th>

				   </tr>

			   </tbody>
			</table>
		  </div>
	   </div>
	</div>
	
	<div class="row">
		<div class="col-md-1"></div>
      <div class="col-md-8">
		<hr>
			<div class="row">
               <div class="col-md-6">
				   <h1 style="color: red"> Cas Cliniques</h1>
				   <p>
					   Aucune étude ni cas référencé
				   </p>
			   </div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h1 style="color: red"> Interactions Potentielles</h1>
				   <p>
					   Aucune interaction référencée
				   </p>
				</div>
			 </div>
	  </div>
	</div>

@endsection

