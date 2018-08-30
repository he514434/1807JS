//获取样式
function getStyle(ele,attr){
	if(ele.currentStyle){
		return ele.currentStyle[attr];
	}else{
		return getComputedStyle(ele,false)[attr];
	}
}
//阻止事件冒泡
function stopBubble(e){
	if(e.stopPropagation){
		e.stopPropagation()
	}else{
		e.cancelBubble = true;
	}
}
//添加事件监听
function addEvent(ele,type,callback){
	if(ele.addEventListener){
		ele.addEventListener(type,callback,false)
	}else if(ele.attachEvent){
		ele.attachEvent("on"+type,callback)
	}else{
		ele["on"+type] = callback;
	}
}
//删除事件监听
function removeEvent(ele,type,callback){
	if(ele.removeEventListener){
		ele.removeEventListener(type,callback,false)
	}else if(ele.detachEvent){
		ele.detachEvent("on"+type,callback)
	}else{
		ele["on"+type] = null;
	}
}
//事件委托
function eveEnt(achild,callback){
	return function(eve){
		var e = eve || window.event
		var target = e.target || e.srcElement;
		for(var i=0;i<achild.length;i++){
			if(target === achild[i]){
				callback.bind(target)();
			}
		}
	}
}