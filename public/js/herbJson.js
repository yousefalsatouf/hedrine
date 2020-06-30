$(document).ready(function() {
    var herbOptions;
    var addBtn = $('.add_btn'); // Add button selector



     $(addBtn).click(function() {
         alert('je suis la pr tester getJson');
     });


    $.getJSON("/hinteractions/hdi",function(result){
        $.each(result, function(i,herb) {

            herbOptions+="<option value='"
            +herb.name+
            "'>"
            "</option>";
        });

        $('#herb').html(herbOptions);

    });


});
