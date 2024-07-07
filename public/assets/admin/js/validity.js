$(document).ready(function() {
    console.log('hellop');
    $(".typeValidityBtn").on('click', function() {
        var type_id = $(this).data('type-id');
        console.log(type_id);
    });
});