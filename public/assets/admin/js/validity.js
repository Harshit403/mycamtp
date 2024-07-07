$(document).ready(function() {
    $(".typeValidityBtn").on('click', function() {
        var html = '<div class="row">' + ''
        '<div class="col-md-12"><input type="text" id="admin_password" class=></div>' +
        '</div>';
        bootbox.dialog({
            messeage:
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