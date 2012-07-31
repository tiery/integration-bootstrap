/*
 * L plugin
 *
 * Require Base64
 *
 * "Area style"
 * <div data-l="area">
 *	<p>Lorem...</p>
 *	<a data-l="target" href="">the real link</a>
 * </div>
 *
 * OR
 *
 * "Encoded style"
 * <span data-l="aHR0cDovL3BhbHBpeC5jb20v" data-l-new>A not search robot friendly link</span>
 *
 */
 
(function ($) {

	'use strict';

	// Params
	var pluginName = 'pxL',
		defaults = {};

	// Plugin constructor
	var Plugin = function (element, options) {
	
		// DOM elements
		this.$element = $(element);
		this.$link = $('a[data-l="target"]:eq(0)', element);
		
		// Properties
		this.target = (typeof this.$element.data('l-new') !== 'undefined') ? '_blank' : '_self';
		
		// Go!
		this.init();
	};
	
	// Shortcut for Plugin object prototype
	Plugin.fn = Plugin.prototype;
	
	// Initialization logic
	Plugin.fn.init = function () {
		var that = this,
			attrType = that.$element.attr('data-l');
		
		if (attrType === 'target') {
			return;
		}
		
		if (attrType === 'area') {
			that.type = 'area';
		}
		else {
			that.type = 'encoded';
			that.$element.addClass('a');
		}
		
		// Events init
		that.events();
	};
	
	// Events
	Plugin.fn.events = function () {
		var that = this;
		that.$element.on('click', function(e) {
			if (e.target.nodeName.toLowerCase() !== 'a') {
				that.process();
			}
		});
	};
	
	// Process
	Plugin.fn.process = function(){
		var that = this,
			url = '';
		
		if (that.type === 'encoded') {
			console.log(that.$element.attr('data-l'));
			url = Base64.decode(that.$element.attr('data-l'));
		}
		else{
			url = that.$link.attr('href');
		}
		
		that.goto(url);
	};
	
	// GOTO
	Plugin.fn.goto = function(url) {
		var that = this;
		
		if (that.target === '_blank') {
			window.open(url);
		}
		else {
			window.location.href = url;
		}
	};
	 
	// Plugin wrapper around the constructor,
	// preventing against multiple instantiations
	$.fn[pluginName] = function (options) {
		return this.each(function () {
			// Check if 'this' is NOT an anchor element (i.e. <a>)
			if (this.nodeName.toLowerCase() !== 'a') {
				if (!$.data(this, 'plugin_' + pluginName)) {
					$.data(this, 'plugin_' + pluginName, new Plugin(this, options));
				}
			}
		});
	};

}(jQuery));