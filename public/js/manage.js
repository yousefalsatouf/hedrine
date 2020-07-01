$(document).ready(function() {
    // show modal
    $(document).on('click', '.refuse-modal', function(e)
    {
        e.preventDefault();
        let that = $(e.currentTarget);
        let id = that.data('id');
        let user = that.data('user');

        $('#myModal-refuse-message').modal('show');

        $('#refuse-id').val(id);
        $('#refuse-user').val(user);
    });

    $(document).on('click', '.modify-modal', function(e)
    {
        e.preventDefault();
        let that = $(e.currentTarget);
        let id = that.data('id');
        let user = that.data('user');

        $('#myModal-modify-message').modal('show');

        $('#modif-id').val(id);
        $('#modif-user').val(user);
    });

    //approve an user
    $('.btn-success').click((e) => {
        e.preventDefault();
        let that = $(e.currentTarget);
        //console.log(that.data('url'))
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

    $('.modal-footer').on('click', '#modify', function(e)
    {

        $('#modify').hide();
        $('i#icon-modify').show();

        //console.log($("#modif-id").val())

        $.ajax({
            type: 'POST',
            url: 'admin/modifs',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#modif-id").val(),
                'user': $("#modif-user").val(),
                'msg': $('#modify--message').val()
            },
            success: function(data)
            {
                //console.log(data[0]);
                document.location.reload(true);
            },
            error: function (error) {
                console.log(error)
            }
        });
    });

    // refuse message went from here ...
    $('.modal-footer').on('click', '#refuse', function()
    {
        $('#refuse').hide();
        $('i#icon-refuse').show();

        $.ajax({
            type: 'POST',
            url: 'admin/refuse',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#refuse-id").val(),
                'user': $("#refuse-user").val(),
                'msg': $('#refuse-message').val()
            },
            success: function(data)
            {
                //console.log(data[0]);
                document.location.reload(true);
            },
            error: function (error) {
                console.log(error)
            }
        });
    });
});
