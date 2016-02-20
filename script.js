$(document).ready(function() {
    $('#button').click(function() {
        $('div').each(function() {
            $(this).css('background',randomColor());
        });
    });
});
