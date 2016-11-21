window.onload = function() {
	
};

jQuery(window).scroll(function (event) {
    var scl = $(window).scrollTop();
    if (!jQuery("body").hasClass("tablet")) {
	    if (scl <= 339) {
	    	var newScroll = 339 - scl;
	    	$('#tabs').css('margin-top', newScroll.toString().concat('px'));
	    	$('#sidebar').css('position', 'absolute');
	    	$('#sidebar').css('margin-top', '50px');
	    }
	    else {
	    	$('#tabs').css('margin-top', '0');
	    	$('#sidebar').css('position', 'fixed');
	    	$('#sidebar').css('margin-top', '-290px');		//check value and its math
	    }
	    if (scl <= 400) {
	    	$('#header').css('background-position', ('0px ').concat(((scl / 2) - 20).toString().concat('px')));		//fix jumping to top issue, along with lack of matching origonal
	    }
	}
});

var fluid = {
	MIN_WIDTH_PORTRAIT: 640,
	MIN_WIDTH_LANDSCAPE: 640,
	ORIENTATION_PORTRAIT: 1,
	ORIENTATION_LANDSCAPE: 2,
	opts: {},
	last_resize: 0,
	init: function(opts) {
		this.opts = opts;
		jQuery(window).resize(function() {
			fluid.resize();
		});	
		this.resize();
		
		var last_orientation = this.get_orientation();
		setInterval(function() {
			var o = fluid.get_orientation();
			if (o != last_orientation) {
				last_orientation = o;
				fluid.orientation_change();	
			}
		}, 250); 
	},
	
	orientation_change: function() {
		jQuery('#viewport').attr('content','width=device-width');
		this.resize();
	},
	
	get_orientation: function() {
		if (typeof window.orientation == 'undefined')
			return this.ORIENTATION_PORTRAIT;
		var o = window.orientation;
		if (o == 0 || o == 180 || o == -180)
			return this.ORIENTATION_PORTRAIT;
		else
			return this.ORIENTATION_LANDSCAPE;
	},
	
	resize: function() {
		var body = jQuery('body');
		var width = jQuery(window).width();
		
		var min_width = this.get_orientation() == this.ORIENTATION_PORTRAIT ? this.MIN_WIDTH_PORTRAIT : this.MIN_WIDTH_LANDSCAPE;
		
		if (width < min_width) {
			var z = jQuery(window).width() / min_width;
			jQuery('#viewport').attr('content', 'width=' + min_width + ', initial-scale=' + z + ", maximum-scale=" + z + ", user-scalable=no");
		}
		for (var w in this.opts) {
			var c = this.opts[w];
			if (width < w)
				body.addClass(c);
			else
				body.removeClass(c);
		}
		
		if (width > 1025)
			body.addClass('desktop');
		else
			body.removeClass('desktop');
		
	}
};
jQuery(function() {
	//consider adaptive home slider before changing break points
	if(!jQuery('body').hasClass('no-adaptive'))
		fluid.init({
			1900: 'super-adapt',
			1400: 'adaptive',
			1000: 'tablet',
			680: 'mobile'
		});
});

/*
var fluid = {
	/*
	 * One set of triggers fire for portrait, the other for landscape
	 * The triggers come in pairs - detected width: forced width if less than detected
	 *
	triggers: {
		portrait: {
			680: 640,
			1000: 940,
			1100: 1050	
		},
		landscape: {
			680: 640,
			1000: 940,
			1100: 1050	
		}
	},
	ORIENTATION_PORTRAIT: 'portrait',
	ORIENTATION_LANDSCAPE: 'landscape',
	opts: {},
	last_resize: 0,
	body: '',
	
	init: function(opts) {
		this.opts = opts;
		this.body = jQuery('body');
		jQuery(window).resize(function() {
			fluid.resize();
		});	
		this.resize();
		
		
		var last_orientation = this.getOrientation();
		if(screen.width < 1024 && last_orientation == 'portrait')
			jQuery('body').addClass('portrait');
		else
			jQuery('body').removeClass('portrait');
		setInterval(function() {
			var o = fluid.getOrientation();
			if (o != last_orientation) {
				fluid.orientationChange();
				last_orientation = o;
				if(screen.width < 1024 && last_orientation == 'portrait')
					jQuery('body').addClass('portrait');
				else
					jQuery('body').removeClass('portrait');
			}
		}, 250); 
	},
	
	orientationChange: function() {
		//location.reload();
		jQuery('#viewport').attr('content','width=device-width');
		this.resize();
	},
	
	getOrientation: function() {
		if (typeof window.orientation == 'undefined')
			return this.ORIENTATION_PORTRAIT;
		var o = window.orientation;
		if (o == 0 || o == 180 || o == -180)
			return this.ORIENTATION_PORTRAIT;
		else
			return this.ORIENTATION_LANDSCAPE;
	},
	
	getCurrentLayout: function(){
		var me = this;
		var classes = me.body.attr('class');
		if(classes == undefined)
			classes = '';
		if(classes.indexOf('mobile') >= 0)
			return 'mobile';
		else if(classes.indexOf('sub-tablet') >= 0)
			return 'sub-tablet';
		else if(classes.indexOf('tablet') >= 0)
			return 'tablet';
		else
			return 'desktop';
		
	},
	
	resize: function() {
		var width = jQuery(window).width();
		var orientation = this.getOrientation();
		
		for (var trigger_width in this.triggers[orientation]) {
			if (width < trigger_width) {
				jQuery('#viewport').attr('content', 'width=' + this.triggers[orientation][trigger_width]);
				break;	
			}
		}
				
		for (var w in this.opts) {
			var c = this.opts[w];
			if (width < w){
				jQuery('body').addClass(c);
			}
			else{
				jQuery('body').removeClass(c);
			}
		}
		jQuery(window).trigger('fluid_resize');
	}
};

jQuery(function(){
	var currentLayout = '';
	jQuery(window).on('fluid_resize', function(){
		var newLayout = fluid.getCurrentLayout();
		if(newLayout == 'tablet' && (currentLayout == 'mobile' || currentLayout == 'sub-tablet') && jQuery('#header').hasClass('active-nav')){
			jQuery('#mobile-nav .menu-button').click();
		}
		currentLayout = newLayout;
	});
	fluid.init({
		680: 'mobile',
		1000: 'sub-tablet',
		1100: 'tablet'
	});
});
*/