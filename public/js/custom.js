$(document).ready(function() {
    // $('.herbForm').select2({
    // 	placeholder:"Veuillez choisir une ou plusieur forme de plante"
    // });
    $('.herbForm').selectpicker();

});

$(document).ready(function() {
    $('.referencesForm').select2({
        placeholder:"Veuillez choisir une ou plusieur forme de references",
        theme: "classic"
    });

    $('#effectForm').selectpicker();

});


$(document).ready(function() {
    $('.target').select2({
    	placeholder:"Veuillez choisir une ou plusieur target"
    });
});



