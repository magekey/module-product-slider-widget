/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'jquery'
], function ($) {
    'use strict';

    $.widget('mage.mgkProductSlider', {
        options: {
        	sliderSelector: null,
            sliderClass: '',
            sliderOptions: {}
        },

        /** @inheritdoc */
        _create: function () {
        	if (this.options.sliderSelector) {
            	this._createSlider();
            }
        },

        /**
         * @private
         */
        _createSlider: function () {
        	var self = this,
                $el,
        		sliderOptions = self.options.sliderOptions;
            
            $el = self.element
            	.find(self.options.sliderSelector)
                .addClass(self.options.sliderClass);

            this._createSliderInstance($el, sliderOptions);
        },

        /**
         * @private
         */
        _createSliderInstance: function ($el, options) {
            return;
        },

        /**
         * @private
         */
        _showElement: function () {
            this.element.css('visibility', 'visible');
        },
    });

    return $.mage.mgkProductSlider;
});
