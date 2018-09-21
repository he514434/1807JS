;(function($){
	"use strict";
	
//	$.fn.extend({
//		init:function(){
//			
//		}
//	})
	
	$.fn.myinit = function(){
		
//		console.log(this)

		this.on("click",function(){
			$(this).css({
				width:200,
				height:"40px",
				background:"red"
			})
			$(this).html("点了一下");
		})
	}
	
	
})(jQuery);
