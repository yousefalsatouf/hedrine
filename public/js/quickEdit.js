$(document).ready(function() {
    $(document).on('click', '.edit-modal', function()
    {
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Quick Edit');
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#s').val($(this).data('sciname'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function()
    {
        //alert('clicked');
        //console.log($("#n").val());
        $.ajax({
            type: 'POST',
            url: '/admin/quickEdit',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#n').val(),
                'sciname': $("#s").val()
            },
            success: function(data)
            {
                let id = data[0].id;
                let name = data[0].name;
                let sciname = data[0].sciname;

                $('.herb-name-'+id).text(name);
                $('.herb-sciname-'+id).text(sciname);
            },
            error: function (error) {
                console.log(error)
            }
        });
    });
});
