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
					<legend style="color: #3a64a5; font-size: 160%; font-weight: bold" >Interactions...</legend>
                    <div class="alert alert-light alert-dismissible fade show text-danger">
                        <strong><i class="fa fa-info-circle info text-danger" id="required-msg"></i></strong> Champs obligatoires!
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <hr>
                    <br>
					<div class="form-row field_wrapper" id="countHerb">

                        <div class="form-group col-md-6" id="herb_div">
							<label class="form-check-label"><strong><h5>Plante <i class="fa fa-info-circle text-danger"></i></h5></strong></label>
							<select name="herb" id="herb" class="form-control custom-select" required>
							</select>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;
						<div class="form-group col-md-3">
                            <label class="form-check-label" for="inputState">ET</label>
                            <br>
							<div class="" style="margin-top: 8px;">
                                <input type="button" class="btn btn btn-light add_btn"  value="+"><br>
                            </div>
						</div>
                    </div>
                    <br>
                    <hr>
                    <div class="form-group ">
                        <strong class="text-info"><i class="fa fa-info-circle"></i> Veilliez choisir la meilleure méthode pour votre recherche: </strong>
                        <br>
                        <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="drug-name" name="drug-search" class="custom-control-input" value="name" checked>
                            <label class="custom-control-label" for="drug-name">Nom Des DCI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="atc" name="drug-search" class="custom-control-input" value="atc">
                            <label class="custom-control-label" for="atc">Classes ATC</label>
                        </div>
                        <br>
                    </div>
                    <div class="form-row field_wrapper" id="countDrug">
                        <div class="form-group col-md-6" id="drug_div">
							<label class="form-check-label"><strong><h5 class="drug-title">DCI <i class="fa fa-info-circle text-danger"></i></h5></strong></label>
							<select name="drug" id="drug" class="form-control custom-select" required>
							</select>
                        </div>&nbsp;&nbsp;&nbsp;
						<div class="form-group col-md-3">
                            <label class="form-check-label" for="inputState">ET</label>
                            <br>
							<div class="" style="margin-top: 8px;">
                                <input type="button" class="btn btn btn-light add_btn_drug"  value="+"><br>
                            </div>
						</div>
                    </div>
					<button type="button" id="go-search" class="btn btn-outline-success" style="border: 0; border-bottom: 1px solid green">Chercher <i class="fas fa-chevron-right"></i></button>
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
			</tbody>
		 </table>
	   </div>
	</div>
	</div>

	<div class="row" id="results">
          <div class="col-md-8">
                <hr>
                <div class="row">
                   <div class="col-md-6">
                       <h3 style="color: #3a64a5"> Cas Cliniques</h3>
                       <p class="text-danger">
                           Aucune étude ni cas référencé
                       </p>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md" id="non">
                        <h3 style="color: #3a64a5"> Interactions Potentielles</h3>
                        <div id="result">
                            <p class="text-danger d-none">
                                Aucune interaction référencée
                            </p>
                            <table id="result-table" class="table">
                                <thead>
                                <tr>
                                    <th class="herb">herb</th>
                                    <th class="target">Target</th>
                                    <th class="drug">drug</th>
                                </tr>
                                <tr>
                                    <th>Effets</th>
                                    <th></th>
                                    <th>Effets</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
          </div>
    </div>

@endsection

@section('getherbs')

<script>
	$(document).ready(function()
	{
	    // customiza select
        //$('#herb-select').formSelect();
        /*
            Permet de désactiver les options déjà choisies dans les autres listes déroulantes
        */
        var disable_option = function()
        {
                // enable all options
                $('option[disabled]').prop('disabled', false);

                $('select').each(function()
                {
                    $('select').not(this).find('option[value="' + this.value + '"]').prop('disabled', true);
                });

        }

            $('#countHerb').on('change', 'select',disable_option);


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
                /*
                    Permet de désactiver les options déjà choisies dans les autres listes déroulantes
                */
                disable_option();
            }else {
                $(this).val("Maximum 5 plantes").prop("disabled",true); // on desactive l'input +
            }
        });

        $(document).on("click", ".remove_btn", function() {
            // {{-- var test = document.getElementById('countHerb');
            // test.remove();
            // cpt--; --}}
            // alert("je suis la");

            $('body').on("click",'.remove_btn',function()
            {
                cpt--; // decrement field counter
                alert(cpt);
                $(this).closest(".col-md-3").prev(".col-md-6").remove();//supprimer le div qui précède le parent du bouton "-"
                $(this).closest(".col-md-3").remove();//supprimer le div parent du bouton "-"

                /*
                    Permet de désactiver les options déjà choisies dans les autres listes déroulantes
                */
                disable_option();
            });
        });

        $.ajax
        ({
            type: 'GET',
            url: '../hinteractions/hdi_get_herbs',
            dataType: 'json',
            success: function(retour)
            {
                //console.log(retour);
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

            selct += '<div class="form-group col-md-3" id="btnRemove">';
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
                data: {'name': 'drug'},
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

            $('input[type=radio][name=drug-search]').on('change', function() {
                //alert(this.value)
                if(this.value === 'atc')
                {
                    $('.drug-title').html('Famille de médicaments <i class="fa fa-info-circle text-danger"></i>');
                    $.ajax
                    ({
                        type: 'GET',
                        url: '../hinteractions/hdi_get_drugs',
                        dataType: 'json',
                        data: {'name': 'drugF'},
                        success: function(retour)
                        {
                            //console.log(retour);
                            let drugSelect = '';

                            drugSelect = '<select name="drug" id="drug-family" class="form-control custom-select" ></select>';
                            $('#drug').replaceWith(drugSelect);

                            let drugOptions = '';
                            drugOptions+="<option value='"
                                +0+
                                "'>Veuillez choisir un Famille de Médicaments"+
                                "</option>";
                            $.each(retour, function(i,drug) {

                                drugOptions+="<option value='"
                                    +drug.id+
                                    "'>"+drug.name+
                                    "</option>";
                            });

                            $('#drug-family').html(drugOptions);
                        }
                    });
                }else
                {
                    $('#drug-atc').remove();
                    $('.drug-title').html('DCI <i class="fa fa-info-circle text-danger"></i>');

                    let drug= '';
                    drug = '<select name="drug" id="drug" class="form-control custom-select" ></select>';

                    $('#drug-family').replaceWith(drug);
                    $.ajax
                    ({
                        type: 'GET',
                        url: '../hinteractions/hdi_get_drugs',
                        dataType: 'json',
                        data: {'name': 'drug'},
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
                }
            });

            // display the advanced drug familly
            $('div#countDrug').on('change', '#drug-family', function() {
                //alert(this.value)
                let id = this.value;
                $.ajax
                ({
                    type: 'GET',
                    url: '../dinteractions/hdi_get_drugs_families',
                    dataType: 'json',
                    data: {'family': id},
                    success: function(data)
                    {
                        console.log('ok');

                        let drugFamilySelect = '';
                        drugFamilySelect =  '<div class="form-group col-md-6" id="drug-atc">'+
                                                    '<label class="form-check-label"><strong><h5 class="drug-title">ATC <i class="fa fa-info-circle text-danger"></i></h5></strong></label>'+
                                                    '<select name="drug-family" id="drug-atc-select" class="form-control custom-select" ></select>'+
                                                '</div>';
                        if ($('#drug-atc').length === 0)
                            $(drugFamilySelect).insertAfter('#drug_div');

                        let drugAtcOptions = '';

                        drugAtcOptions+="<option value='"
                            +0+
                            "'>Veuillez choisir un ATC"+
                            "</option>";
                        $.each(data, function(i,family) {

                            drugAtcOptions += "<option value='"
                                +family.id+
                                "'>"+family.name+
                                "</option>";
                        });
                        $('#drug-atc-select').html(drugAtcOptions);
                    }
                });
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



