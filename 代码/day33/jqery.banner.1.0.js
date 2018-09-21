;(function($){
	"use strict";
	
	$.fn.banner = function(options){
		this.LOCAL = {
//			在list功能中,表示要走的;
//			在btn功能中,表示要进来的;
			index:0,
//			在btn功能中,表示要走的
			iPrev:options.items.length-1
		};
		this.LOCAL.items = options.items;
		
		this.LOCAL.autoPlay = options.autoPlay===false ? false : true;
		this.LOCAL.moveTime = options.moveTime || 300;
		this.LOCAL.delayTime = options.delayTime || 3000;
		
//		list
//		console.log(options.list)
		var that = this;
		if(options.list != undefined && options.list.length > 0){
			options.list.eq(0).css("background","red")
			options.list.on("click",function(){
//				if(that.LOCAL.index == $(this).index()){
//					console.log("不动")
//				}
				if(that.LOCAL.index < $(this).index()){
//					console.log("左")
					that.LOCAL.listMove($(this).index(),1);
				}
				if(that.LOCAL.index > $(this).index()){
//					console.log("右")
					that.LOCAL.listMove($(this).index(),-1);
				}
				that.LOCAL.index = $(this).index();
				options.list.eq(that.LOCAL.index).css({background:"red"}).siblings().css("background","")
			})
		}
		this.LOCAL.listMove = function(index,i){
//			this.index		//要走的
//			index			//要进来的
			options.items.eq(this.index).css({
				left:0
			}).stop().animate({
				left:-options.items.eq(0).width() * i
			}).end().eq(index).css({
				left:options.items.eq(0).width() * i
			}).stop().animate({
				left:0
			})
		}
		
//		btn
		if(options.left != undefined && options.right != undefined && options.left.length > 0 && options.right.length > 0){
			options.left.on("click",function(){
				if(that.LOCAL.index == 0){
					that.LOCAL.index = options.items.length-1;
					that.LOCAL.iPrev = 0;
				}else{
					that.LOCAL.index--;
					that.LOCAL.iPrev = that.LOCAL.index+1;
				}
				
				that.LOCAL.btnMove(1)
				console.log(that.LOCAL.iPrev,that.LOCAL.index)
			})
			options.right.on("click",function(){
				if(that.LOCAL.index == options.items.length-1){
					that.LOCAL.index = 0;
					that.LOCAL.iPrev = options.items.length-1;
				}else{
					that.LOCAL.index++;
					that.LOCAL.iPrev = that.LOCAL.index - 1;
				}
				
				that.LOCAL.btnMove(-1)
				console.log(that.LOCAL.iPrev,that.LOCAL.index)
			})
		}
		this.LOCAL.btnMove = function(i){
//			this.index		//进来的
//			this.iPrev		//走的
			options.items.eq(this.iPrev).css({
				left:0
			}).stop().animate({
				left:options.items.eq(0).width()*i
			}).end().eq(this.index).css({
				left:-options.items.eq(0).width()*i
			}).stop().animate({
				left:0
			})
			
			options.list.eq(this.index).css({background:"red"}).siblings().css("background","")
		}
		
//		auto
		
		
		
	}
	
	
})(jQuery);