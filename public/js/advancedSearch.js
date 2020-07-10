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
                        let hcolor;
                        switch (type.hColor) {
                            case 'rouge': hcolor="red"; break;
                            case 'orange': hcolor="#FFCC33"; break;
                            case 'jaune': hcolor="#FFD700"; break;
                            case 'vert': hcolor="#ccff99"; break;
                            case 'mauve': hcolor="#ffccff"; break;
                            case 'brun': hcolor="#EEE8AA"; break;
                            case 'blanc': hcolor="white"; break;
                        }

                        let dcolor;
                        switch (type.dColor) {
                            case 'rouge': dcolor="red"; break;
                            case 'orange': dcolor="#FFCC33"; break;
                            case 'jaune': dcolor="#FFD700"; break;
                            case 'vert': dcolor="#ccff99"; break;
                            case 'mauve': dcolor="#ffccff"; break;
                            case 'brun': dcolor="#EEE8AA"; break;
                            case 'blanc': dcolor="white"; break;
                        }

                        bodyRows += "<tr>"+
                            "<td>"+type.hNotes+"</td>"+
                            "<td style='background-color:"+hcolor+"'>"+type.hForce+"</td>"+
                            "<td><strong>"+type.targetName+"</strong></td>"+
                            "<td>"+type.dNotes+"</td>"+
                           // "<td style='background-color:"+dcolor+"'>"+type.dForce+"</td>"+
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
                            case 'orange': color="#FFCC33"; break;
                            case 'jaune': color="#FFD700"; break;
                            case 'vert': color="#ccff99"; break;
                            case 'mauve': color="#ffccff"; break;
                            case 'brun': color="#EEE8AA"; break;
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
                            case 'orange': color="#FFCC33"; break;
                            case 'jaune': color="#FFD700"; break;
                            case 'vert': color="#ccff99"; break;
                            case 'mauve': color="#ffccff"; break;
                            case 'brun': color="#EEE8AA"; break;
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
