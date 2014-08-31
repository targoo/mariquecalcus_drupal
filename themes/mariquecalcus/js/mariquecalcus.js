/**
 * @file
 * Misc JQuery scripts in this file
 */

(function ($) {

  Drupal.behaviors.miscMariquecalus = {
    attach: function (context, settings) {

      $(document).ready(function($) {

       console.log('ready1');

        function bgscroll(){

          // 1 pixel row at a time
          current -= 1;

          // move the background with backgrond-position css properties
          $('#intro').css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px");

        }

        //Calls the scrolling function repeatedly.
        var scrollSpeed = 70;

         // set the default position
        var current = 0;

        // set the direction
        var direction = 'h';
        //setInterval(bgscroll, scrollSpeed);

          // Enable syntax.
        SyntaxHighlighter.all();

        console.log('ready2');

        $("#owl-example").owlCarousel();

        console.log('ready3');

        $("#owl-work").owlCarousel({
          slideSpeed : 300,
          paginationSpeed : 400,
          items : 2,
          autoPlay: true,
          itemsMobile: [769,1],
          itemsDesktopSmall : [979,2],
          itemsDesktop : [1199,2]
        });

        console.log('ready4');

      });

    }
  }

})(jQuery);
