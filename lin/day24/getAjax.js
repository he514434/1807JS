function getAjax(url,data){
    var p = new Promise(function(success,failed){
        var str = "";
        for(var i in data){
            str += i+"="+data[i]+"&";
        }
        url += "?"+str+"_t="+new Date().getTime();
        var ajax = new XMLHttpRequest();
        ajax.open("GET",url);
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4 && ajax.status == 200){
                success(ajax.responseText);
            }else if(ajax.readyState == 4 && ajax.status != 200){
                failed(ajax.status);
            }
        }
        ajax.send(null);
    });
    return p;
}

function postAjax(url,data){
    var p = new Promise(function(success,failed){
        var str = "";
        for(var i in data){
            str += i+"="+data[i]+"&";
        }
        str = str.slice(0,str.length-1);
        url+= "?_t="+new Date().getTime();
        var ajax = new XMLHttpRequest();
        ajax.open("POST",url,true);
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4 && ajax.status == 200){
                success(ajax.responseText);
            }else if(ajax.readyState == 4 && ajax.status != 200){
                failed(ajax.status);
            }
        }
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        ajax.send(str);
    });
    return p;
}


function jsonP(url,data){
    var p = new Promise(function(success){
        var str = "";
        for(var i in data){
            str += i+"="+data[i]+"&";
        }
        url += "?"+str.slice(0,str.length-1);
        var script = document.createElement("script");
        script.src = url;
        document.body.appendChild(script);
        window[data[data._fnName]] = function(res){
            success(res);
        }
    });
    return p;
}








