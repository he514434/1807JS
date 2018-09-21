require(["model/model1","model/model2","model/model3"],function(m1,m2,m3){
			
	console.log(m1)
	console.log(m2)
	console.log(m3)
	
	m1.init()
	m2.init()
	m3.init()
	
	m1.show(m1.name)
	m2.show(m2.name)
	m3.show(m3.name)
	
	m3.show(m1.name)
	m2.show(m3.name)
	m1.show(m2.name)
	
})