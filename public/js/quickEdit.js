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
            type: 'post',
            url: '/admin/quickEdit',
            dataType: "json",
            contentType : "application/json",
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'id': $("#fid").val(),
                'name': $('#n').val(),
                'sciname': $("#s").val()
            },
            success: function(data)
            {
              console.log(data)
            },
        });
    });
});
