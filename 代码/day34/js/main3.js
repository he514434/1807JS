
require.config({
	baseUrl:"model",
	paths:{
		jq:"../libs/jquery",
		m1:"model1",
		m2:"model2",
		m3:"model3"
	}
})

require(["jq","m1","m2","m3"],function(_,m1,m2,m3){
			
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