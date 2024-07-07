$(document).ready(function() {
    console.log('hellop');
    $(".typeValidityBtn").on('click', function() {
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