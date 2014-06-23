/**
 * @file
 * Misc JQuery scripts in this file
 */

(function ($) {

  Drupal.behaviors.miscMariquecalus = {
    attach: function (context, settings) {

      $(document).ready(function($) {
          SyntaxHighlighter.all();

        $("#owl-example").owlCarousel();

        $("#owl-work").owlCarousel({
          slideSpeed : 300,
          paginationSpeed : 400,
          items : 2,
          autoPlay: true,
          itemsMobile: [769,1],
          itemsDesktopSmall : [979,2],
          itemsDesktop : [1199,2],
        });

      });

    }
  }

})(jQuery);
