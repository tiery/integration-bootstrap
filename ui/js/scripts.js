/*
 * Scripts Initializr
 * Wait for DOM ready
 */

$(function () {
	$('[data-l]').pxL();
	PX.mobilizr();
	PX.retinaizr();
	// Debug & demos
	$('#templates li').clone().prependTo('#main-nav');
});

/*
 * Popins
 **/
 
/*
$(function(){
	
	// Default options
	var defaults = {
		transition: 'none',
		opacity: .85,
		initialWidth: 50,
		initialHeight: 50,
		close: 'X',
		onClosed: function(){
			// Hide close button
			$(document.getElementById('cboxClose')).css('visibility', 'hidden');
		}
	};
	
	// LOGIN
	var loginOpts = {
		onComplete: function(){
			
			// Display close button
			$(document.getElementById('cboxClose')).css('visibility', 'visible');
			
			// pxForm
			$('[data-form="element"]', document.getElementById('cboxContent')).pxForm({
				success: function(){
					this.$element.html('Success!');
					var refreshTimer = setTimeout(function(){
						clearTimeout(refreshTimer);
						window.location.reload();
					}, 3000);
				}
			}).filter(':first').find('input:eq(0)').focus();
			
			// Toggle sign in/forgot password
			$('.call-box-password').on('click', function(){
				boxToggle('#box-password', '#box-sign-in');
				$.colorbox.resize();
				$('#box-password').find('input:eq(0)').focus();
			});
			$('.call-box-sign-in').on('click', function(){
				boxToggle('#box-sign-in', '#box-password');
				$.colorbox.resize();
				$('#box-sign-in').find('input:eq(0)').focus();
			});
		}
	};
	$('.call-popin-login').colorbox(
		$.extend({}, defaults, loginOpts)
	);
});
*/