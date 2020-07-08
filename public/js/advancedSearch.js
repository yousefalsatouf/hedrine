$(document).ready(function()
{
    // one to one searching ...

    $('#go-search').on('click', function () {
        let oneHerb = $('#herb').val();
        let oneDrug = $('#drug').val();
        //alert(oneDrug+" "+oneHerb)
        // send ajax

        $.ajax
        ({
            type: 'GET',
            url: '../oneHerb-oneDrug/results',
            dataType: 'json',
            data: {
                'herbId': oneHerb,
                'drugId': oneDrug
            },
            success: function(data)
            {

            }
        });

    });
});
