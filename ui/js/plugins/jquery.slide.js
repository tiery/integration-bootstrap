/*
 * Slider plgin
 */
(function ($) {

    'use strict';

    // Params
    var pluginName = 'pxSlider',
        defaults = {
            transitionDuration: 500,
            sDisabled: 'disabled',
            sCurrent: 'current',
            autoplay: false,
            delay: 3
        },
        
        // Touch support
        touchSupport = !!('ontouchstart' in window) || !!(window.DocumentTouch && document instanceof DocumentTouch),
        actionEvent = (touchSupport) ? 'pxFasTouch' : 'click';

    // Plugin constructor
    var Plugin = function (element, options, i) {
        
        // Plugin exposed to window
        window[pluginName + i] = this;
        
        // DOM elements
        this.$element     = $(element).attr('data-plugin-id', pluginName + i);
        this.$wrap        = this.$element.find('[data-slider="wrap"]');
        this.$slider      = this.$element.find('[data-slider="slider"]');
        this.$items       = $('> *', this.$slider);
        this.$controls    = this.$element.find('[data-slider="controls"]');
        this.$controlPrev = this.$controls.filter('[data-slider-controls="prev"]');
        this.$controlNext = this.$controls.filter('[data-slider-controls="next"]');
        
        // Properties
        this.nMin     = 0;
        this.nMax     = this.$items.length - 1;
        this.wItem    = this.$items.filter(':eq(0)').outerWidth();
        this.wSlider  = this.$items.length * this.wItem;
        this.setPlay  = false;
        this.operande = 1;
        
        // TODO DEBUG IE STACKOVERFLOW when this.$items.length > 10 /!\
        
        // Options
        var opts = $.extend({}, options, this.$element.data('slider-options')); // element options -> plugin init options
        this.opts = $.extend({}, defaults, opts); // options -> default
        
        // Go!
        this.init();
    };
    
    // Shortcut for Plugin object prototype
    Plugin.fn = Plugin.prototype;
    
    // Initialization logic
    Plugin.fn.init = function () {
        var that = this;
        that.$element.data('current', 0).data('status', 'wait');
        
        // Disable right arrow
        that.$controls.filter(':eq(0)').addClass(that.opts.sDisabled);
        
        // Add current class on first item
        that.$items.filter(':eq(0)').addClass(that.opts.sCurrent)

        // Set slider width
        that.$slider.width(that.wSlider);
        
        // Set layout dimensions (responsive way)
        that.relayout();
        
        // Events init
        that.events();
        
        // Autoplay?
        if (that.opts.autoplay) {
            that.setPlay = true;
            that.autoplay();
        }
    };
    
    Plugin.fn.relayout = function () {
        var that = this;
        
        // Number of visible items
        that.wWrap = that.$wrap.outerWidth();
        that.nVisible = Math.floor(that.wWrap / that.wItem);
        
        // Slider left limit
        that.limit = that.wSlider - that.nVisible * that.wItem;
        that.slideLimits();
    };
    
    Plugin.fn.slideLimits = function () {
        var that = this;
        that.iMin = Math.abs(parseInt(that.$slider.css('margin-left'), 10)) / that.wItem;
        that.iMax = that.iMin + that.nVisible - 1;
    };
    
    // Evenements
    Plugin.fn.events = function () {
        var that = this;
        
        // Action process (click/touch on arrows)
        that.$controls[actionEvent](function(){
            that.process(this);
        });
        
        // Rollover on element
        if (that.opts.autoplay) {
            that.$element.hover(
                function(){
                    that.stop();
                },
                function(){
                    that.autoplay();
                }
            );
        }
        
        // Relayout process
        $(window).on('resize', function(){
            that.relayout();
        });
        $(window).on('orientationchange', function(){
            that.relayout();
        });
    };
    
    // Action process
    Plugin.fn.process = function (handler) {
        var that = this,
            dir = '-',
            delta = that.wItem,
            value = 0;
        
        that.stop();
        if (that.$element.data('status') === 'animate' || $(handler).hasClass('disabled')) {
            return;
        }
        if ($(handler).data('slider-controls') === 'prev') {
            dir = '+';
        }
        value = dir + '=' + delta;
        that.transition(value);
    };
    
    // Basic goto function
    Plugin.fn.goTo = function(index) {
        var that = this,
            pos = 'stop';
        
        if (index < 0 || index > that.nMax) {
            return;
        }
        
        if (index < that.iMin && index >= 0) {
            pos = - index * that.wItem;
        }
        else if (index > that.iMax && index <= that.nMax) {
            pos = -index * that.wItem;
            if (Math.abs(pos) > that.limit) {
                pos = -that.limit;
            }
        }
        that.transition(pos);
        that.updCurrent(index);
    };
    
    // Transition
    Plugin.fn.transition = function (pos) {
        var that = this;
        if (pos === 'stop') {
            return;
        }
        
        // Update slider status
        that.$element.data('status', 'animate');
        
        // Animation
        that.$slider.animate({ 'margin-left': pos }, that.opts.transitionDuration, function(){
            that.postProcess();
        });
    };
    
    // Action post process
    Plugin.fn.postProcess = function () {
        var that = this,
            pos = Math.abs(parseInt(that.$slider.css('margin-left'), 10));

        // Enabled/Disabled controls
        if (pos <= 0) {
            that.$controlPrev.addClass(that.opts.sDisabled);
        }
        else {
            that.$controlPrev.removeClass(that.opts.sDisabled);
        }
        if (pos >= that.limit) {
            that.$controlNext.addClass(that.opts.sDisabled);
        }
        else{
            that.$controlNext.removeClass(that.opts.sDisabled);
        }
        
        // Update slider index limit
        that.slideLimits();
        
        // Update slider status
        that.$element.data('status', 'wait');
        
        // Autoplay?
        if (that.setPlay) {
            that.autoplay();
        }
    };
    
    // Auto process
    Plugin.fn.autoplay = function () {
        var that = this,
            delay = that.opts.delay * 1000;
        that.timer = setTimeout(function(){
            clearTimeout(that.timer);
            that.play();
        }, delay);
    };
    
    // Play process
    Plugin.fn.play = function () {
        var that = this,
            current = parseInt(that.$element.data('current'), 10),
            next;
        
        that.setPlay = true;
        
        if (current === that.nMax && that.operande > 0) {
            that.operande = -1;
        }
        else if (current === 0 && that.operande < 0) {
            that.operande = 1;
        }
        
        next = current + 1 * that.operande;
        that.goTo(next);
    };
    
    // Stop process
    Plugin.fn.stop = function () {
        var that = this;
        that.setPlay = false;
        clearTimeout(that.timer);
    };
    
    // Update current
    Plugin.fn.updCurrent = function (index) {
        var that = this;
        that.$element.data('current', index);
        that.$items.removeClass(that.opts.sCurrent).filter(':eq(' + index + ')').addClass(that.opts.sCurrent);
    };
    
    // Plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function (options) {
        return this.each(function (i) {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName, new Plugin(this, options, i));
            }
        });
    };

}(jQuery));