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
            sliderClass: 'owl-carousel',
        },

        /**
         * @private
         */
        _createSliderInstance: function ($el, options) {
            var self = this;

            options = $.extend({}, {
                autoplayHoverPause: true,
                onInitialize: function () {
                    self._showElement();
                }
            }, options);

            $el.owlCarousel(options);
        }
    });

    return $.mage.mgkProductSlider_Owl;
});
