<script>
    $(() => {
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

        $('#messageFormUp').submit((e) => {
            let that = e.currentTarget;
            e.preventDefault();
            $('#message').removeClass('is-invalid');
            $('.invalid-feedback').html('');
            toggleButtons();
            $.ajax({
                method: $(that).attr('method'),
                url: $(that).attr('action'),
                data: $(that).serialize()
            })
            .done((data) => {
                document.location.reload(true);
            })
            .fail((data) => {
                console.log(data);
            });
        });
    })
</script>
