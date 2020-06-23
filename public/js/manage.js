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
    $('.btn-success').click((e) => {
        e.preventDefault();
        let that = $(e.currentTarget);
        that.hide();
        that.closest('td').find('i.fa-spinner').show();
        $.post(that.attr('href'))
            .done((data) => {
                document.location.reload(true);
            })
            .fail(() => {
                $('.alert-warning').removeClass('d-none').addClass('show');
                that.show();
                that.closest('td').find('i.fa-spinner').hide();
            });
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

    $('#messageForm').submit((e) => {
        let that = e.currentTarget;
        e.preventDefault();
        $('#refuse-message').removeClass('is-invalid');
        $('.invalid-feedback').html('');
        toggleButtons();
        $('#send').hide();
        $('i#icon-refuse').show();
        $.ajax({
            type: 'POST',
            url: '/admin/refuse',
            data: {
                'id': $("#id").val(),
                'msg': $('#refuse-message').val()
            },
            success: function(data)
            {
                //console.log(data);
                document.location.reload(true);
            },
            error: function (error) {
                toggleButtons();
                if(data.status == 422) {
                    $.each(data.responseJSON.errors, function (i, error) {
                        $(document)
                            .find('[name="' + i + '"]')
                            .addClass('is-invalid')
                            .next()
                            .append(error[0]);
                    });
                } else {

                    $('#messageUpdateModal').modal('hide');
                    $('.alert-warning').removeClass('d-none').addClass('show');
                }
            }
        });
    });
});
