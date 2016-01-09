
function main() {
    /* Toggles the site-menu using the menu hamburger for mobile screens */
    $('.navbar .navbar-toggle').click(function() {
        var target = $(this).data('target');
        $(target).slideToggle();
    });
    
    /* Changes current highlighted option in the site-menu */
    $('.navbar-collapse > ul > li').click(function() {
        $(this).parent().parent().slideUp();
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
    });
    
    /* Goes to previous slide in carousel */
    $('#arrow-prev').click(function() {
        var $currentSlide = $('.active-slide');
        var $prevSlide = $currentSlide.prev();
        var $currentDot = $('.active-dot');
        var $prevDot = $currentDot.prev();

        if ($prevSlide.length === 0) {
            $prevSlide = $('.slide').last();
            $prevDot = $('.dot').last();
        }

        $currentSlide.fadeOut(600).removeClass('active-slide');
        $prevSlide.fadeIn(600).addClass('active-slide');
        $currentDot.removeClass('active-dot');
        $prevDot.addClass('active-dot');
    });

    /* Goes to next slide in carousel */
    $('#arrow-next').click(function() {
        var $currentSlide = $('.active-slide');
        var $nextSlide = $currentSlide.next();
        var $currentDot = $('.active-dot');
        var $nextDot = $currentDot.next();

        if ($nextSlide.length === 0) {
            $nextSlide = $('.slide').first();
            $nextDot = $('.dot').first();
        }

        $currentSlide.fadeOut(600).removeClass('active-slide');
        $nextSlide.fadeIn(600).addClass('active-slide');
        $currentDot.removeClass('active-dot');
        $nextDot.addClass('active-dot');
    });
}

$(document).ready(main);