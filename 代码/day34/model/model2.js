define(function(){
	
	class Model2{
		constructor(){
			this.name = "model2";
		}
		init(){
			console.log("init------" + this.name)
			console.log($)
		}
		show(msg){
			console.log("show------" + msg)
		}
	}
	
	
	return new Model2();
	
})
