$(document).ready(function() {
    $('#forms').selectpicker();
});

$(document).ready(function() {
    $('#referencesForm').select2({
        placeholder:"Veuillez choisir une ou plusieur références",
        theme: "classic"
    });

    $('#effectForm').selectpicker();

});

$(document).ready(function() {
    $('.target').selectpicker()
});

$(document).ready(function() {
    $('.referenceInteraction').select2({
        placeholder:"Veuillez choisir une ou plusieur références",
        theme: "classic"
    });
});

$(document).ready(function() {
    $('.effectInteraction').select2({
        placeholder:"Veuillez choisir un ou plusieur effet",
        theme: "classic"
    });
});

/* DEBUT code pour checkbox de is_validated pour active ou desactiver les user */

$(document).ready(function(){
$("input[type=checkbox]").on('click', function(){
    $("input[type=hidden]").attr("value", $(this).attr("id"));
    $(".display p").text($("input[type=hidden]").val());
});
});

/* FIN code pour checkbox de is_validated pour active ou desactiver les user */




