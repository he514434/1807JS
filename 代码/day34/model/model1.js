define(function(){
	
	class Model1{
		constructor(){
			this.name = "model1";
		}
		init(){
			console.log("init------" + this.name)
			console.log($)
		}
		show(msg){
			console.log("show------" + msg)
		}
	}
	
	
	return new Model1();
	
})
