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

function toggle() {
    var blur = document.getElementById('home');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
}

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        stagePadding: 150,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,

            },
            1000: {
                items: 1,

            }
        }

    })
});