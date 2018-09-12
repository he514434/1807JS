//getAjax(url,{}).then(function(res){
//	console.log(res)
//})
function getAjax(url,data){
	var p = new Promise(function(success){
		var str = ""
		for(var i in data){
			str = str + i + "=" + data[i] + "&";
		}
		var d = new Date();
		url = url + "?" + str + "_t=" + d.getTime();
		var ajax = new XMLHttpRequest();
		ajax.open("GET",url)
		ajax.onreadystatechange = function(){
			if(ajax.readyState == 4 && ajax.status == 200){
				success(ajax.responseText)
			}
		}
		ajax.send(null);
	})
	return p;
}
//postAjax(url,{}).then(function(res){
//	console.log(res)
//})
function postAjax(url,data){
	var p = new Promise(function(success){
		var str = ""
		for(var i in data){
			str = str + i+"="+data[i] + "&";
		}
		str = str.slice(0,str.length-1);
		var d = new Date();
		url = url + "?_t="+d.getTime();
		var ajax = new XMLHttpRequest();
		ajax.open("POST",url,true);
		ajax.onreadystatechange = function(){
			if(ajax.readyState == 4 && ajax.status == 200){
				success(ajax.responseText)
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send(str);
	})
	return p;
}
//jsonp(url,{}).then(function(res){
//	console.log(res)
//})
function jsonp(url,data){
	var p = new Promise(function(success){
		var str = ""
		for(var i in data){
			str = str + i + "=" + data[i] + "&";
		}
		url = url + "?" + str.slice(0,str.length-1);
		var script = document.createElement("script")
		script.src = url;
		document.body.appendChild(script);
		
		window[data[data._fnName]] = function(res){
			success(res)
		}
	})
	return p;
}


