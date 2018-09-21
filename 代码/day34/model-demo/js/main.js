require.config({
	baseUrl:"model",
	paths:{
		tab:"tab",
		toast:"toast",
		jq:"../libs/jquery"
	}
})

require(["jq","tab","toast"],function(_,tab,toast){
	
	tab.init({
		btn:$(".cont ul li"),
		msg:$(".msg p")
	})
	
	toast.init({
		msg:tab.msg
	})
	
	
})


