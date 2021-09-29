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

window.addEventListener('scroll', function() {
    let header = document.querySelector('.nav-bar');
    header.classList.toggle('scrolling-active', window.scrollY > 0);
})

//   all ------------------
function initParadoxWay() {
    "use strict";

    if ($(".testimonials-carousel").length > 0) {
        var j2 = new Swiper(".testimonials-carousel .swiper-container", {
            preloadImages: false,
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            mousewheel: false,
            centeredSlides: true,
            pagination: {
                el: '.tc-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.listing-carousel-button-next',
                prevEl: '.listing-carousel-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                },

            }
        });
    }

    // bubbles -----------------


    setInterval(function() {
        var size = randomValue(sArray);
        $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
        $('.individual-bubble').animate({
            'bottom': '100%',
            'opacity': '-=0.7'
        }, 4000, function() {
            $(this).remove()
        });
    }, 350);

}

//   Init All ------------------
$(document).ready(function() {
    initParadoxWay();
});