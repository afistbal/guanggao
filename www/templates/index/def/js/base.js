var Duomeng = function (){

    var UNDEF = "undefined", 
        OBJECT = "object", 
        win = window, 
        doc = document; 

    var EventUtil = {
        addHandler: function(element, type, handler) {
            if (element.addEventListener) {
                element.addEventListener(type, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent("on" + type, handler);
            } else {
                element["on" + type] = handler;
            }

            return element;
        },
        removeHandler: function(element, type, handler) {
            if (element.removeEventListener) {
                element.removeEventListener(type, handler, false);
            } else if (element.detachEvent) {
                element.detachEvent("on" + type, handler);
            } else {
                element["on" + type] = null;
            }

            return element;
       }
    }
    function addLoadEvent(fn) {
        if (typeof win.addEventListener != UNDEF) {
            win.addEventListener("load", fn, false);
        } 
        else if (typeof doc.addEventListener != UNDEF) {
            doc.addEventListener("load", fn, false);
        } 
        else if (typeof win.attachEvent != UNDEF) {
            win.attachEvent("onload", fn);
        } 
        else if (typeof win.onload == "function") {
            var fnOld = win.onload;
            win.onload = function() {
                fnOld();
                fn();
            };
        } 
        else {
            win.onload = fn;
        }
    }

    return {
        version: '0.0.0.1',
        getElementById: function (id) {
            return doc.getElementById(id);
        },
        addHandler: EventUtil.addHandler,    
        removeHandler: EventUtil.removeHandler
    };
}();

var User = {
    /*public 璺宠浆鍒版敞鍐岄〉闈紝鏃犲弬鏁�*/
    register: function() {
        location.href = '/passport/user/register';
    },
    /*public 鏇存柊閫氱煡鏍忔秷鎭暟*/   
    msgCount: function() {
        $.ajax({
            dataType:'json',
            url: '/passport/message/read/m/0',
            success: function(data) {
                  User.updateCount(data.data.count);
            }
        });
    },
    /*private 鏇存柊*/
    updateCount: function(count) {
         var countbox = $("#msgcount");
         if (0 == count) {
             countbox.hide();
         } else {
             countbox.show();
             countbox.text("(" + count + ")");
         }
     }
};



function GetXmlHttpObject()
{
  var xmlHttp=null;
  try
    {
    // Firefox, Opera 8.0+, Safari
    xmlHttp=new XMLHttpRequest();
    }
  catch (e)
    {
    // Internet Explorer
    try
      {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
      }
    catch (e)
      {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    }
  return xmlHttp;
}
var index=0;
function subnav_mover(el){
	if(el.className=="subnav_n"){
	        el.className="subnav_h";
	 }
}
function subnav_mout(el){
	if(el.className=="subnav_h"){
	        el.className="subnav_n";
    }

}
function getParameter() {
   var str = location.href;
   paramStr = str.substring(str.indexOf("?") + 1);
   parmeters = {};
   var param = paramStr.split("&");
   if (param.length > 1) {
	   for (var i = 0; i < param.length; i++) {
		   var p = param[i].split("=");
		   parmeters[p[0]] = p[1];
	   }
   } else {
	   var p = param[0].split("=");
	   parmeters[p[0]] = p[1];
   }
   if (location.href.indexOf("#") && !parmeters["t"]) { //鍏煎鑰佺増鏈殑#鏍煎紡鍐欐硶锛屼竴娈垫椂闂村悗浼氬幓鎺�
      var s = location.href.split("#")[1];
      parmeters["t"] = s;
   }
   return parmeters;
}




function parseSearch(){
      var tab,pos,search = location.search;
      search = search.match(/\d+-\d+/); 
       
      if(search){
            search = search.pop().split('-'); 
            tab = search.shift();
            pos = search.pop();

            if($('#t'+tab).length){
                change($('#t'+tab)[0]);
                if($("#t"+tab+"_c .title:eq("+ pos +")").length){
                    $('html, body').animate({
                             scrollTop: $("#t"+tab+"_c .title:eq("+ pos +")").offset().top
                    }, 500);
                }
            }
      } else{
            return ;
      } 
}


function block(id){
	    document.getElementById(id).style.display="block";       
}
function visible(id){
	document.getElementById(id).style.visibility="visible";
}
function hidden(id){
	document.getElementById(id).style.visibility="hidden";
}
function none(id){
	    document.getElementById(id).style.display="none";
}
function menu_act(id){
	    document.getElementById(id).className="menu f17px bold menu_act";
}
function menu_nor(id){
	    document.getElementById(id).className="menu f17px bold menu_nor";
}
var nav_classname;
function nav_mover(id1,id2){
	nav_classname=document.getElementById(id2).className;
	block(id1);
	menu_act(id2);
}
function nav_mout(id1,id2){
	none(id1);
	document.getElementById(id2).className=nav_classname;
}
function help_mover(el){
	if(el.className=="normal"){
	el.className="hover";
	}
}
function help_mout(el){
	if(el.className=="hover"){
	el.className="normal";
	}
}
var trace;
function mouse_over(el,act,nor){
	if(el.className==act){
		trace=el.id;
		return;
	}
	else{
		el.className=act;
	}
}
function mouse_out(el,act,nor){
	if(el.id==trace){
		el.className=act;
	}
	else{
		el.className=nor;
	}
}
window.onscroll = function() {
	if(document.getElementById("contact-said")){
	var _contact=document.getElementById("contact-said");
	var _scrolltop=document.documentElement.scrollTop || document.body.scrollTop;
	_contact.style.top=_scrolltop+230+'px';
	}
}

function getAjax(){
	var xmlHttp;
	try{
		xmlHttp=new XMLHttpRequest();
	}catch(e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}catch(e){
				 alert("鎮ㄧ殑娴忚鍣ㄤ笉鏀寔AJAX锛�");
				return false;
			}
		}
	}
	return xmlHttp;
}

/*function closeBox(){
	//$('#ls_win_hs').fadeOut();
	document.getElementById('ls_win_hs').style.display = 'none';
	$('#ls_win_box').fadeOut();
}*/



function IndexLogin(){
	var username = document.getElementById('username');
	var password = document.getElementById('password');
	var index_form = document.getElementById('login-form');
	
	this.submitFun = function(){
		var _this = this;
		$.post('user.php?action=loginSub', $(index_form).serialize(), function(data){
			if(data == 'true'){
				//window.location.reload();
				window.location = 'user.php';
			}else{
				var error = decodeURI(data);
				_this.showError(error);
			}
		});
		return false;
	}
	this.removeClass = function(obj){
		obj.className = '';
	}
	this.showError = function(msg){
		alert(msg);
	}
	this.hiddeError = function(){
		//hjaa_warn_box.innerHTML = '';
	}
}

function IndexLoginCheck(){
	var index_login_box1 = document.getElementById('index_login_box1');
	var index_login_box2 = document.getElementById('index_login_box2');
	this.checkLogin = function(){
		$.get('user.php?action=checkLogin', '', function(data){
			if(data != 'false'){
				$(index_login_box1).css('display', 'none');
				$(index_login_box2).css('display', 'block');
				var data = eval(data);
				$('#ind_username').html(data[0].username);
				$('#ind_money').html(data[0].money);
				$('#index_money_alltx').html(data[0].money_alltx);
				$('#index_last_login').html(data[0].last_login);
			}
		});
	}
}

function nav_lr_hidden(){
	var nav_login_register = document.getElementById('nav_login_register');
	this.navCheck = function(){
		$.get('user.php?action=checkLogin', '', function(data){
			if(data == 'false'){
				nav_login_register.style.display = 'none';
			}
		});
	}
}

//鑾峰彇閾炬帴鍙傛暟
function getQueryString(name)
{
    // 濡傛灉閾炬帴娌℃湁鍙傛暟锛屾垨鑰呴摼鎺ヤ腑涓嶅瓨鍦ㄦ垜浠鑾峰彇鐨勫弬鏁帮紝鐩存帴杩斿洖绌�
    if(location.href.indexOf("?")==-1 || location.href.indexOf(name+'=')==-1)
    {
        return '';
    }
 
    // 鑾峰彇閾炬帴涓弬鏁伴儴鍒�
    var queryString = location.href.substring(location.href.indexOf("?")+1);
 
    // 鍒嗙鍙傛暟瀵� ?key=value&key2=value2
    var parameters = queryString.split("&");
 
    var pos, paraName, paraValue;
    for(var i=0; i<parameters.length; i++)
    {
        // 鑾峰彇绛夊彿浣嶇疆
        pos = parameters[i].indexOf('=');
        if(pos == -1) { continue; }
 
        // 鑾峰彇name 鍜� value
        paraName = parameters[i].substring(0, pos);
        paraValue = parameters[i].substring(pos + 1);
 
        // 濡傛灉鏌ヨ鐨刵ame绛変簬褰撳墠name锛屽氨杩斿洖褰撳墠鍊硷紝鍚屾椂锛屽皢閾炬帴涓殑+鍙疯繕鍘熸垚绌烘牸
        if(paraName == name)
        {
            return unescape(paraValue.replace(/\+/g, " "));
        }
    }
    return '';
};

function setCookie(c_name,value,expiredays)
{
var exdate=new Date()
exdate.setDate(exdate.getDate()+expiredays)
document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}
function getCookie(c_name)
{
if (document.cookie.length>0)
  {
  c_start=document.cookie.indexOf(c_name + "=")
  if (c_start!=-1)
    { 
    c_start=c_start + c_name.length+1 
    c_end=document.cookie.indexOf(";",c_start)
    if (c_end==-1) c_end=document.cookie.length
    return unescape(document.cookie.substring(c_start,c_end))
    } 
  }
return ""
}