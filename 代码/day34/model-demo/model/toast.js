define(function(){
	class Toast{
		constructor(){}
		init(options){
			this.msg = options.msg;
			var that = this;
			this.msg.on("click",function(){
				that.create($(this))
			})
		}
		create(ele){
			if(!this.t){
				this.t = $("<div>");
				ele.parent().append(this.t);
				this.t.html(ele.html());
				this.t.css({
					width:100,
					height:100,
					border:"solid 1px black",
					position:"absolute",
					left:0,
					right:0,
					top:0,
					bottom:0,
					margin:"auto"
				})
			}else{
				this.t.html(ele.html());
				this.t.stop().show();
			}
			
			this.myhide()
		}
		myhide(){
			clearTimeout(this.timer)
			this.timer = setTimeout(()=>{
				this.t.stop().hide()
			},1000)
		}
	}
	
	return new Toast();
})