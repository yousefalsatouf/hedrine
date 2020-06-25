$(document).ready(function() {

    const toggleButtons = () => {
        $('#icon').toggle();
        $('#buttons').toggle();
    };

    $('.alert-success button').click(() => {
        $('.alert-success').addClass('d-none').removeClass('show');
    });
    $('.alert-warning button').click(() => {
        $('.alert-warning').addClass('d-none').removeClass('show');
    });

    $('.btn-danger').click((e) => {
        e.preventDefault();
        $('#id').val($(e.currentTarget).attr('data-id'));
        $('#messageModal').modal();
    });

    $('.btn-warning').click((e) => {
        e.preventDefault();
        $('#id').val($(e.currentTarget).attr('data-id'));
        $('#messageUpdateModal').modal();
    });

    //approve an user
    $('.btn-success').click((e) => {
        e.preventDefault();
        //let that = $(e.currentTarget);
        console.log(that.data('url'),)
        //alert(that.data('url'));
        that.hide();
        that.closest('td').find('i.fa-spinner').show();
        $.ajax({
            type: 'POST',
            url: that.data('url'),
            data: {
                'id': that.data('id'),
            },
            success: function(data)
            {
                //console.log(data);
                document.location.reload(true);
            },
            error: function (error) {
                console.log(error)
            }
        });

    });

    // modification message to send ...
    $('#message-form-update').submit((e) => {
        let that = $(e.currentTarget);

        e.preventDefault();
        $('#message').removeClass('is-invalid');
        $('.invalid-feedback').html('');
        toggleButtons();

        $.ajax({
            type: 'POST',
            url: $('#message-form-update').data('url'),
            data: {
                //'_token': $('input[name=_token]').val(),
                'id': $("#modifs-id").val(),
                'msg': $('#modifs-message').val()
            },
            success: function(data)
            {
                //console.log(data);
                document.location.reload(true);
            },
            error: function (error) {
                console.log(error)
            }
        });
    });


    // refuse message went from here ...
    $('#refuse-form-message').submit((e) => {
        e.preventDefault();
        let that = $(e.currentTarget);
        //console.log($('#refuse-form-message').data('url'))
        //console.log(that.attr('action'))
        $('#refuse-message').removeClass('is-invalid');
        $('.invalid-feedback').html('');
        toggleButtons();
        $('#send').hide();
        $('i#icon-refuse').show();
        //console.log($('#refuse-message').val());

         $.ajax({
            type: that.attr('method'),
            url: that.attr('action'),
            data: {
                //'_token': $('input[name=_token]').val(),
                'id': $('#refuse-btn-id').data('id'),
                'msg': $('#refuse-message').val(),
            },
            success: function(data)
            {
                console.log(data);
                document.location.reload(true);
            },
            error: function (error) {
               console.log(error)
            }
        });
    });
});
