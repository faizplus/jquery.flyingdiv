(function( $ ){
	'use strict';
	
	$.fn.autoImageCaption = function(options){
		
		var opt = $.extend(true,{},{
			wrapper:{'tag':'div','class':'img-wrap'},
			caption:{'tag':'span','class':'caption'},
			bgColor:null,
			color:null
		}, options);
		
		return this.each(function(){
		
			var $img = $(this);
			
			if($img.parent('.'+opt.wrapper.class).length === 0){
				$img
					.wrap('<'+opt.wrapper.tag+' class="'+opt.wrapper.class+'"></'+opt.wrapper.tag+'>')
					.after('<'+opt.caption.tag+' class="'+opt.caption.class+'">'+$img.attr('title')+'</'+opt.caption.tag+'>');
					
				// $img.wrap('');
			}
			
			if(opt.bgColor){
				$img.parent().css('background-color',opt.bgColor);
			}
			
			if(opt.color){
				$img.siblings('.'+ opt.caption.class).css('color',opt.color);
			}
			
		});
	};
	
}( jQuery ));