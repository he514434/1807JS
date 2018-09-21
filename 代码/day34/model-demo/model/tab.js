define(function(){
	class Tab{
		constructor(){
			this.index = 0;
		}
		init(options){
			this.btn = options.btn;
			this.msg = options.msg;
			
			var that = this;
			this.btn.on("click",function(){
				that.changeIndex($(this))
			})
		}
		changeIndex(ele){
			this.index = ele.index()
			this.display();
		}
		display(){
			this.btn.css({background:""}).eq(this.index).css({background:"red"});
			
			this.msg.css({display:"none"}).eq(this.index).css({display:"block"});
		}
	}
	
	return new Tab()
})