$(document).ready(function() {
    $('.herbForm').select2({
    	placeholder:"Veuillez choisir une ou plusieur forme de plante",
        theme: "classic"
    });
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
    	placeholder:"Veuillez choisir une ou plusieur target",
        theme: "classic"
    });

    $('#effectForm').selectpicker();
});

$(document).ready(function() {
    $('.referenceInteraction').select2({
        placeholder:"Veuillez choisir une ou plusieur références",
        theme: "classic"
    });

    $('#effectForm').selectpicker();
});

$(document).ready(function() {
    $('.effectInteraction').select2({
        placeholder:"Veuillez choisir un ou plusieur effet",
        theme: "classic"
    });

    $('#effectForm').selectpicker();
});



