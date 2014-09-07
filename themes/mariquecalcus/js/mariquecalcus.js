/**
 * @file
 * Misc JQuery scripts in this file
 */

(function ($) {

    "use strict";

    var current = -200;

    var increment = 1;

    function bgscroll(){

        // Set the direction.
        var direction = 'h';

        if (current >= 0) {
            increment = -1;
        }
        if (current <= -200) {
            increment = 1;
        }
        // 1 pixel row at a time
        current = current + increment;

        // move the background with backgrond-position css properties
        //$('.bgscroll').css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px");

    }

    $(document).ready(function($) {

        //Calls the scrolling function repeatedly.
        var scrollSpeed = 70;

        setInterval(bgscroll, scrollSpeed);

        // Enable syntax.
        SyntaxHighlighter.all();

        $("#owl-example").owlCarousel();

        $("#owl-work").owlCarousel({
            slideSpeed : 300,
            paginationSpeed : 400,
            items : 2,
            autoPlay: true,
            itemsMobile: [769,1],
            itemsDesktopSmall : [979,2],
            itemsDesktop : [1199,2]
        });

    });

})(jQuery);
