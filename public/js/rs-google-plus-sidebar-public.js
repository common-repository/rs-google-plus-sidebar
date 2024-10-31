(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(document).ready( function(){
		$("div.first-wrapper").hover(
		    function () {
		        $(this).addClass('open');
		        if(typeof $("div.second-wrapper").offset() != 'undefined') { 
			    	$("div.second-wrapper").hide();
			    }
			    if(typeof $("div.third-wrapper").offset() != 'undefined') { 
			    	$("div.third-wrapper").hide();
			    }
		    },
		    function () {
		        $(this).removeClass('open');
		        if(typeof $("div.second-wrapper").offset() != 'undefined') { 
			    	$("div.second-wrapper").delay(1000).show(0);
			    }
			    if(typeof $("div.third-wrapper").offset() != 'undefined') { 
			    	$("div.third-wrapper").delay(1000).show(0);
			    }
		    }
		);
		$("div.second-wrapper").hover(
		    function () {
		        $(this).addClass('open');
		        if(typeof $("div.first-wrapper").offset() != 'undefined') { 
			    	$("div.first-wrapper").hide();
			    }
			    if(typeof $("div.third-wrapper").offset() != 'undefined') { 
			    	$("div.third-wrapper").hide();
			    }
		    },
		    function () {
		        $(this).removeClass('open');
		        if(typeof $("div.first-wrapper").offset() != 'undefined') { 
			    	$("div.first-wrapper").delay(1000).show(0);
			    }
			    if(typeof $("div.third-wrapper").offset() != 'undefined') { 
			    	$("div.third-wrapper").delay(1000).show(0);
			    }
		    }
		);
		$("div.third-wrapper").hover(
		    function () {
		        $(this).addClass('open');
		        if(typeof $("div.first-wrapper").offset() != 'undefined') { 
			    	$("div.first-wrapper").hide();
			    }
			    if(typeof $("div.second-wrapper").offset() != 'undefined') { 
			    	$("div.second-wrapper").hide();
			    }
		    },
		    function () {
		        $(this).removeClass('open');
		        if(typeof $("div.first-wrapper").offset() != 'undefined') { 
			    	$("div.first-wrapper").delay(1000).show(0);
			    }
			    if(typeof $("div.second-wrapper").offset() != 'undefined') { 
			    	$("div.second-wrapper").delay(1000).show(0);
			    }
		    }
		);
	});
})( jQuery );
