$(document).ready(function() {

    var maxField = 5; // Input fields increment limitation
    var addBtn = $('.add_btn'); // Add button selector
    var wrapper = $('.form-row.field_wrapper'); // Input field wrapper


        var selct = '';
        selct += '<div class="form-group col-md-6">';
        selct += '<label class="form-check-label"><strong><h5>Plante *</h5></strong></label>';
        selct += '<select name="herbName[]" id="" class="form-control"><option>Choisir une plante ...</option>';
        selct += '@foreach ($herbs as $item)<option>{{json-decode($item->name)}}</option>@endforeach';
        selct += '</select>';
        selct += '</div>';
        selct += '&nbsp;&nbsp;&nbsp;&nbsp;';
        selct += '<div class="form-group col-md-3';
        selct += '<br>';
        selct += '<div class="" style="margin-top: 8px;">';
        selct += '<a  href="#" class="btn btn btn-danger remove_btn">-</a>';
        selct += '</div>';
        selct += '</div>';

     var cpt = 1; // Initial field counter is 1

     $(addBtn).click(function() {
         if(cpt < maxField) {
             cpt++; // Increment field counter
             $(wrapper).append(selct); // Add field html
         }
     });

     $(wrapper).on('click', 'remove_btn',function(e) {
         e.preventDefault();
         alert('je suis la '); //Remove field html
         x--; //decrement field counter
     })
});



