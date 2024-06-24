$(document).ready(function() {
    $(".validity_date").on('change', function() {
        var level_id = $(this).data('level-id');
        var validity_date = $(this).val();
        console.log(level_id);
        console.log(validity_date);
    })
})