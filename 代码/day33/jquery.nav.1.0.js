;(function($){
	"use strict";
	
//	$.fn.nav = function(){
////		console.log(this)
//		this.children("ul").children("li").hover(function(){
//			$(this).addClass("active").children("ul").stop().slideDown(200).parent().siblings().removeClass("active").children("ul").stop().slideUp(200)
//		},function(){
//			$(this).removeClass("active").children("ul").stop().slideUp(200)
//		})
//		
//		this.find("li").find("li").hover(function(){
//			$(this).addClass("active").siblings().removeClass("active")
//		},function(){
//			$(this).removeClass("active")
//		})
//	}
	
	$.fn.extend({
		nav:function(){
			this.children("ul").children("li").hover(function(){
				$(this).addClass("active").children("ul").stop().slideDown(200).parent().siblings().removeClass("active").children("ul").stop().slideUp(200)
			},function(){
				$(this).removeClass("active").children("ul").stop().slideUp(200)
			})
			this.find("li").find("li").hover(function(){
				$(this).addClass("active").siblings().removeClass("active")
			},function(){
				$(this).removeClass("active")
			})
			return this
		}
	})


//	$.extend({
//		nav:function(ele){
//			ele.children("ul").children("li").hover(function(){
//				$(this).addClass("active").children("ul").stop().slideDown(200).parent().siblings().removeClass("active").children("ul").stop().slideUp(200)
//			},function(){
//				$(this).removeClass("active").children("ul").stop().slideUp(200)
//			})
//			ele.find("li").find("li").hover(function(){
//				$(this).addClass("active").siblings().removeClass("active")
//			},function(){
//				$(this).removeClass("active")
//			})
//		}
//	})
	
	$.nav = function(ele){
		ele.children("ul").children("li").hover(function(){
			$(this).addClass("active").children("ul").stop().slideDown(200).parent().siblings().removeClass("active").children("ul").stop().slideUp(200)
		},function(){
			$(this).removeClass("active").children("ul").stop().slideUp(200)
		})
		ele.find("li").find("li").hover(function(){
			$(this).addClass("active").siblings().removeClass("active")
		},function(){
			$(this).removeClass("active")
		})
		
		return jQuery;
	}
	
})(jQuery);