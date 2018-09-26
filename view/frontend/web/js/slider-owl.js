/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'jquery',
    './slider',
    './owl/owl.carousel.min'
], function ($) {
    'use strict';

    $.widget('mage.mgkProductSlider_Owl', $.mage.mgkProductSlider, {
        options: {
            sliderClass: 'owl-carousel owl-theme',
        },

        /**
         * @private
         */
        _createSliderInstance: function ($el, options) {
            var self = this;

            options = $.extend({}, {
                autoplayHoverPause: true,
                responsiveClass:true,
                responsive: {
                    0: {
                        items: 1,
                        dots: false
                    },
                    600: {
                        items: options.items > 2 ? 3 : options.items
                    },
                    768: {}
                },
                onInitialize: function () {
                    self._showElement();
                }
            }, options);

            $el.owlCarousel(options);
        }
    });

    return $.mage.mgkProductSlider_Owl;
});
