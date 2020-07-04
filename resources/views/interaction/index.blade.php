@extends('dashboard.layout')

@yield('content_title') {{--créé dans la view master_dashboard.blade.php --}}

@section('content_dashboard')
	<div class="row">
		<div class="col-md-1">

		</div>
       <div class="col-md-6 .offset-md-1 ">
           <form   action="" id="myInteractionForm">
            @csrf
				<fieldset class="form-group">
					<legend style="color: #e32; font-size: 160%; font-weight: bold" >Interactions...</legend>

					<div class="form-row field_wrapper" id="countHerb">

                        <div class="form-group col-md-6" id="herb_div">
							<label class="form-check-label"><strong><h5>Plante *</h5></strong></label>
							<select name="herb[]" id="herb" class="form-control">
							</select>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;
						<div class="form-group col-md-3">
                            <label class="form-check-label" for="inputState">ET</label>
                            <br>
							<div class="" style="margin-top: 8px;">

                                <input type="button" class="btn btn btn-warning add_btn"  value="+"><br>
                            </div>
						</div>
                    </div>
                <hr>
                    <div class="form-row field_wrapper" id="countDrug">

                        <div class="form-group col-md-6" id="drug_div">
							<label class="form-check-label"><strong><h5>DCI *</h5></strong></label>
							<select name="drug[]" id="drug" class="form-control" >
							</select>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;
						<div class="form-group col-md-3">
                            <label class="form-check-label" for="inputState">ET</label>
                            <br>
							<div class="" style="margin-top: 8px;">

                                <input type="button" class="btn btn btn-warning add_btn_drug"  value="+"><br>
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

	<div class="row" id="results" style="display: none">
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
				<div class="col-md-6" id="hinter">
					<h3 style="color: red"> Interactions Potentielles</h3>
				   <p>
					   Aucune interaction référencée
				   </p>
				</div>
			</div>
	  </div>
    </div>

@endsection

@section('getherbs')

<script>
	$(document).ready(function()
	{
        var disable_option = $('#countHerb').on('change', 'select',function()
            {
                alert("dans disable");
                // enable all options 
                $('option[disabled]').prop('disabled', false);
                
                $('select').each(function() 
                {
                    $('select').not(this).find('option[value="' + this.value + '"]').prop('disabled', true); 
                });
            

            });


		var maxField = 5; // Input fields increment limitation
        var herbOptions;
        var wrappering = $('.form-row.field_wrapper'); // Input field wrapper
        var addBtn = $('.add_btn'); // Add button selector
        var addBtnDrug = $('.add_btn_drug'); // Add button selector
        var removeBtn = $('.remove_btn'); // Add button selector

        var selct = '';

        selct += '<div class="form-group col-md-3 id="btnRemove">';
        selct += '<br>';
        selct += '<div class="" style="margin-top:9px;padding-left: 15px;">';
        selct += ' <input type="button" class="btn  btn-danger remove_btn" id="her" value="-"><br>';
        selct += '</div>';
        selct += '</div>';


        var cpt = 1; // Initial field counter is 1



        $(addBtn).click(function() {
            $(this).val("+"); // On met un getter sur l'input pour gerer le message d'erreure

            if(cpt < maxField) {
                $("#herb_div").clone().attr({'id': 'herb_div' + cpt}).appendTo('#countHerb') .after(selct); // Add field html
                cpt++; // Increment field counter
                disable_option();
            }else {
                $(this).val("Maximum 5 plantes").prop("disabled",true); // on desactive l'input +
            }
        });

        $(document).on("click", ".remove_btn", function() {
            {{-- var test = document.getElementById('countHerb');
            test.remove();
            cpt--; --}}
            alert("je suis la");
        });

		$.ajax
		({
			type: 'GET',
			url: '../hinteractions/hdi_get_herbs',
			dataType: 'json',
			success: function(retour)
			{
				console.log(retour);
				herbOptions = '';
				herbOptions+="<option value='"
							+0+
							"'>Veuillez choisir une plante"+
							"</option>";
				$.each(retour, function(i,herb) {

							herbOptions+="<option value='"
							+herb.id+
							"'>"+herb.name+
							"</option>";
						});

						$('#herb').html(herbOptions);

			}
        });


	});
</script>
@endsection
@section('getdrugs')

    <script>
        $(document).ready(function()
        {
            var maxField = 5; // Input fields increment limitation
            var drugOptions;
            var wrappering = $('.form-row.field_wrapper'); // Input field wrapper
            var addBtnDrug = $('.add_btn_drug'); // Add button selector
            var removeBtn = $('.remove_btn'); // Add button selector

            var selct = '';

            selct += '<div class="form-group col-md-3 id="btnRemove">';
            selct += '<br>';
            selct += '<div class="" style="margin-top:9px;padding-left: 15px;">';
            selct += ' <input type="button" class="btn  btn-danger remove_btn" id="her" value="-"><br>';
            selct += '</div>';
            selct += '</div>';


            

            var cpt = 1; // Initial field counter is 1

            $(addBtnDrug).click(function() {
                $(this).val("+"); // On met un getter sur l'input pour gerer le message d'erreure

                if(cpt < maxField) {
                    $("#drug_div").clone().attr({'id': 'drug_div' + cpt}).appendTo('#countDrug') .after(selct); // Add field html
                    cpt++; // Increment field counter
                    disable_option();
                    
                    
                }else {
                    $(this).val("Maximum 5 médicaments").prop("disabled",true); // on desactive l'input +
                }
            });

            


            

            $(document).on("click", ".remove_btn", function() {
                {{-- var test = document.getElementById('countHerb');
                test.remove();
                cpt--; --}}
                //alert("je suis la");
            });

            

            $.ajax
            ({
                type: 'GET',
                url: '../hinteractions/hdi_get_drugs',
                dataType: 'json',
                success: function(retour)
                {
                    console.log(retour);
                    drugOptions = '';
                    drugOptions+="<option value='"
                                +0+
                                "'>Veuillez choisir un médicament"+
                                "</option>";
                    $.each(retour, function(i,drug) {

                                drugOptions+="<option value='"
                                +drug.id+
                                "'>"+drug.name+
                                "</option>";
                            });

                        $('#drug').html(drugOptions);
                        

                }
            });

        });

        

    </script>
@endsection

@section('resultat')
    <script type="text/javascript">
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function()
        {
            $("#myInteractionForm").submit(function() {

                var herb_id = Number($('#herb').val().trim());
                alert("Doucement vas y Doucement pas encore fait pour l'ID " + herb_id);

                $.ajax({
                    type: 'post',
                    url: '{{ route("hinteractions.getHerbsById") }}',
                    dataType: 'json',
                    data: {
                        _token: CSRF_TOKEN,
                        id: id
                    },

                    success: function( data ) {
                        console.log(data);
                        if(data == true) {
                            alert('success : user logged in ');
                        }else {
                            alert('erreur data')
                        }
                       //$('#hinter').html(data.html);
                    },
                    error: function(){
                        alert("failure");
                    }
                });
                $('#results').show();
            });
        });
    </script>
@endsection



