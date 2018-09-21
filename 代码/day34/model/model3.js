define(function(){
	
	class Model3{
		constructor(){
			this.name = "model3";
		}
		init(){
			console.log("init------" + this.name)
			console.log($)
		}
		show(msg){
			console.log("show------" + msg)
		}
	}
	
	
//	return {
//		map:Map,
//		food:Food,
//		snake:Snake
//	};
	
	return new Model3();
	
})
