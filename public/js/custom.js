$(document).ready(function() {
    $('.herbForm').select2({
    	placeholder:"choisissez une ou plusieur forme de plante"
    });

});

$(document).ready(function() {
    $('.referencesForm').select2({
        placeholder:"choisissez une ou plusieur forme de references",
        theme: "classic"
    });

    $('#effectForm').selectpicker();

});


$(document).ready(function() {
    $('.target').select2({
    	placeholder:"choisissez une ou plusieur target"
    });
});



