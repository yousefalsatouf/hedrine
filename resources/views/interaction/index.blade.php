@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
	<div class="row">
		<div class="col-md-1">

		</div>
       <div class="col-md-6 .offset-md-1 ">
           <form action="">
				<fieldset class="form-group">
					<legend style="color: #e32; font-size: 160%; font-weight: bold" >Interactions...</legend>

					<div class="form-row field_wrapper">

                        <div class="form-group col-md-6">
							<label class="form-check-label"><strong><h5>Plante *</h5></strong></label>
							<select name="herb" id="herb" class="form-control">
							</select>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;
						<div class="form-group col-md-3">
                            <label class="form-check-label" for="inputState">ET</label>
                            <br>
							<div class="" style="margin-top: 8px;">
                                <a href="#" class="btn btn btn-warning add_btn">+</a>
                            </div>
						</div>
                    </div>



					<button type="submit" class="btn btn-primary" style="background-color: #62af56; border: 1px solid #62af56">Chercher <i class="fas fa-chevron-right"></i></button>
				</fieldset>
		   </form>
	   </div>
	   <div class="col-md-3"></div>
	   <div class="col-md-2 text-center">
		<h3 style="color: #777;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;font-size: 160%;font-weight: bold">Intensité d interaction</h3>
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
				   <h3 style="color: red"> Cas Cliniques</h3>
				   <p>
					   Aucune étude ni cas référencé
				   </p>
			   </div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3 style="color: red"> Interactions Potentielles</h3>
				   <p>
					   Aucune interaction référencée
				   </p>
				</div>
			 </div>
	  </div>
    </div>

@endsection



