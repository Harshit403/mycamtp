$(document).ready(function() {
    $(document).ajaxStart(function() {
        $("#overlay").fadeIn(300);
    });
    $(document).ajaxStop(function() {
        setTimeout(function() {
            $("#overlay").fadeOut(300);
        }, 500);
    });
})