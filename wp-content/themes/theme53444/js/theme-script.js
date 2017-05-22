jQuery(document).ready(function() {
	jQuery(window).resize(
		function(){
			if(!jQuery('body').hasClass('cherry-fixed-layout')) {
				jQuery('.full-width-block, .parallax-slider').width(jQuery(window).width());
				jQuery('.full-width-block, .parallax-slider').css({width: jQuery(window).width(), "margin-left": (jQuery(window).width()/-2), left: "50%", "position": "relative"});
			};
			if(!jQuery('body').hasClass('cherry-fixed-layout')) {
				jQuery('.extra-size').width('1270');
			};
		}
	).trigger('resize');

	jQuery('input[type="submit"]').each(function(){
		if(!jQuery(this).hasClass('adminbar-button') && !jQuery(this).hasClass('search-form_is')) {
			jQuery(this).wrap('<span class="input-btn btn"><span></span></span>').removeClass('btn').removeClass('btn-primary');
		};
	});	
	jQuery('input[type="reset"]').each(function(){
		if(!jQuery(this).hasClass('adminbar-button') && !jQuery(this).hasClass('search-form_is')) {
			jQuery(this).wrap('<span class="input-btn btn gray"><span></span></span>').removeClass('btn').removeClass('btn-primary');
		};
	});

	jQuery('#search-header, #searchform').delegate('*', 'focus blur', function() {
		var elem = jQuery(this);
		setTimeout(function(){
			elem.parent().toggleClass('focused', elem.is(':focus'));
		})
	})

})