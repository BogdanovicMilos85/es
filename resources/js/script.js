$(document).ready(function() {

    /* For the sticky navigation */


    /* Scroll on buttons */

    $('.js--scroll-to-bell').click(function() {
        $('html, body').animate({ scrollTop: $('.js--section-bell').offset().top }, 1000);
    });

    $('.js--scroll-to-gallery').click(function() {
        $('html, body').animate({ scrollTop: $('.js--section-gallery').offset().top }, 1000);
    });

    $('.js--scroll-to-corner').click(function() {
        $('html, body').animate({ scrollTop: $('.js--section-corner').offset().top }, 1000);
    });


    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });


    /* Animations on scroll */
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animated fadeInUp');
    }, {
        offset: '50%'
    });

    $('.js--wp-3').waypoint(function(direction) {
        $('.js--wp-3').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.js--wp-4').waypoint(function(direction) {
        $('.js--wp-4').addClass('animated pulse');
    }, {
        offset: '50%'
    });

    $('.js--wp-5').waypoint(function() {
        $('.js--wp-5').addClass('animated flash');
    });



    /* Back to UP button */

    $(window).on("scroll", function() {
        var odVrha = $(window).scrollTop();

        $("#topLink").toggleClass("down", (odVrha > 300));
    });

});

function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("header").style.marginLeft = "200px";
    document.getElementById("content").style.marginLeft = "200px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.8)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("header").style.marginLeft = "0";
    document.getElementById("content").style.marginLeft = "0";
}