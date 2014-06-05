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
      });

    }
  }

})(jQuery);
