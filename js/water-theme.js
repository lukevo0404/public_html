"use strict";
(function($) {
    /*global jQuery $*/
    // on-ready trigger
    $(document).ready(function() {
        // trigger parallax hover
        var scene = document.getElementById('scene');

       

        // jQuery Ripples
        if (typeof $.fn.ripples == 'function') {
            try {
                $('.ripple').ripples({
                    resolution: 500,
                    perturbance: 0.04
                });
            } catch (e) {
                $('.error').show().text(e);
            }
        }

        // at the end trigger window scroll and resize event
        $(window).trigger('resize').trigger('scroll');
    });

}(jQuery));

