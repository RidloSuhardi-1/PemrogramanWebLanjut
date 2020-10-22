$(document).ready(function($) {
    $('#imgName').bind('input', function() {
        $('#imgHolder').attr('src', $(this).val());
    });
});