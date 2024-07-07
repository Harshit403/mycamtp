$(document).ready(function() {
    $(".typeValidityBtn").on('click', function() {
        var type_id = $(this).data('type-id');
        var html = '<div class="row">' + ''
        '<div class="col-md-12"><input type="text" id="admin_password" class="form-control"></div>' +
        '</div>';
        bootbox.dialog({
            messeage: html,
            closeButton: false,
            button: {
                cancel: {
                    label: 'Cancel',
                    className: 'btn btn-sm btn-danger',
                },
                ok: {
                    label: 'Cancel',
                    className: 'btn btn-sm btn-danger',
                    callback: function() {
                        var admin_password = $.trim($(this).find('#admin_password').val());
                        $.ajax({
                            url: baseUrl + 'admin/close-validity',
                            type: 'POST',
                            data: {
                                type_id: type_id,
                                admin_password: admin_password,
                            },
                            dataType: 'json',
                            success: function(res) {
                                bootbox.alert({
                                    messeage: res.message,
                                    closeButton: false,
                                })
                            }
                        })
                    }
                }
            }
        })

    });
});