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



window.addEventListener('scroll', function() {
    let header = document.querySelector('.nav-bar');
    header.classList.toggle('scrolling-active', window.scrollY > 0);
})


$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: false,
        navigation: true,
        navigationText: ["", ""],
        autoPlay: true
    });
});

// ------- Form Validation-------

function formfunc() {
    var contact = document.getElementById("regnumber").value;
    if (contact == "") {
        alert("Please fill Mobile Number!");
        return false;
    }
    if (isNaN(contact)) {
        alert("Only Numbers are Allowed");
        return false;
    }
    if (contact.length < 10) {
        alert("Mobile Number must be atleast 10 digits");
        return false;
    }
    if (contact.length > 10) {
        alert("Mobile Number must be only 10 digits");
        return false;
    }

}