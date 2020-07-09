$(document).ready(function()
{
    $('#both-results').hide();
    $('#one-result').hide();
    $('#result .result').hide();
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
                if (oneHerb != 0 && oneDrug != 0)
                {
                    let herbName = data.herb[0];
                    let drugName = data.drug[0];
                    let bodyRows = '';
                    console.log(data.result)
                    $('.herb-name').text(herbName);
                    $('.drug-name').text(drugName);
                    //console.log(data.result)
                    $.each(data.result, function(i, type)
                    {
                        let color;
                        switch (type.hColor) {
                            case 'rouge': color="red"; break;
                            case 'orange': color="#FF8C00"; break;
                            case 'jaune': color="#FFD700"; break;
                            case 'vert': color="#8FBC8F"; break;
                            case 'mauve': color="#b87b8d"; break;
                            case 'brun': color="#FAEBD7"; break;
                            case 'blanc': color="white"; break;
                        }

                        bodyRows += "<tr>"+
                            "<td>"+type.hNotes+"</td>"+
                            "<td style='background-color:"+color+"'>"+type.hForce+"</td>"+
                            "<td><strong>"+type.targetName+"</strong></td>"+
                            "<td>"+type.dNotes+"</td>"+
                            "<td>test dinteractions force here</td>"+
                            "</tr>";
                    });

                    $('#both-results tbody').html(bodyRows);
                    $('#both-results').show();

                }else if (oneHerb != 0 )
                {
                    let herbName = data.herb[0];
                    //console.log(thead)
                    let bodyRows = '';
                    //console.log(data)
                    $('.type-name').text(herbName);

                    $.each(data.result, function(i, herbs)
                    {
                        let color;
                        switch (herbs.color) {
                            case 'rouge': color="red"; break;
                            case 'orange': color="#FF8C00"; break;
                            case 'jaune': color="#FFD700"; break;
                            case 'vert': color="#8FBC8F"; break;
                            case 'mauve': color="#b87b8d"; break;
                            case 'brun': color="#FAEBD7"; break;
                            case 'blanc': color="white"; break;
                        }
                        bodyRows += "<tr>"+
                            "<td>"+herbs.notes+"</td>"+
                            "<td style='background-color:"+color+"'>"+herbs.forceName+"</td>"+
                            "<td>"+herbs.targetName+"</td>"+
                            "</tr>";
                    });

                    $('#one-result tbody').html(bodyRows);
                    $('#one-result').show();

                }else if (oneDrug != 0 )
                {
                    let drugName = data.drug[0];
                    let bodyRows = '';
                    //console.log(data.result)
                    $('.type-name').text(drugName);
                    $.each(data.result, function(i, drugs)
                    {
                        let color;
                        switch (drugs.color) {
                            case 'rouge': color="red"; break;
                            case 'orange': color="#FF8C00"; break;
                            case 'jaune': color="#FFD700"; break;
                            case 'vert': color="#8FBC8F"; break;
                            case 'mauve': color="#b87b8d"; break;
                            case 'brun': color="#FAEBD7"; break;
                            case 'blanc': color="white"; break;
                        }
                        bodyRows += "<tr>"+
                            "<td>"+drugs.notes+"</td>"+
                            "<td style='background-color:"+color+"'>"+drugs.forceName+"</td>"+
                            "<td>"+drugs.targetName+"</td>"+
                            "</tr>";
                    });

                    $('#one-result tbody').html(bodyRows);
                    $('#one-result').show();

                }
            }
        });

    });
});
