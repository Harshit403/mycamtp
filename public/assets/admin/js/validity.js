$(document).ready(function() {
    $(".typeValidityBtn").on('click', function() {
        var html = '<div class="row">' + ''
        '<div class="col-md-12"><input type="text" id="admin_password" class="form-control"></div>' +
        '</div>';
        bootbox.dialog({
            messeage: html,
            closeButton: false,
            button
        })
        var type_id = $(this).data('type-id');
        $.ajax({
            url: baseUrl + 'admin/close-validity',
            type: 'POST',
            data: {
                type_id: type_id,
            },
            dataType: 'json',
            success: function() {

            }
        })
    });
});