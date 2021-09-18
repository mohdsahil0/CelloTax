$(document).ready(function() {
    $('#hambar').click(function() {
        $('#sidebar-menu').css({
            'transform': 'translateX(0px)',
        });
        $('#hambar').css({
            'display': 'none'
        });
    });

    $('#cros').click(function() {
        $('#sidebar-menu').css({
            'transform': 'translateX(-250px)',
        });
        $('#hambar').css({
            'display': 'block'
        });
    });
});

$(document).on('click', 'ul li', function() {
    $(this).addClass('active')
});