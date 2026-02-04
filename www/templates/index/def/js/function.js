/*棣栭〉banner*/
$(function(){
var timer=5000;
var showtime = 800;
var showbox = $("#banner_show");
var inbox = $(".bannger_inbox");
var movelist = $("#yq_banner_list");
var s;
var b = 0;
var size =inbox.size();
var play = 1;
function move(){
b++;
if(b>size-1){
b=0;
}
inbox.each(function(e){
inbox.eq(e).hide(0);
$("#banner_magbox"+e).hide();
movelist.find("a").eq(e).removeClass("hover");
if(e == b){
inbox.eq(b).fadeIn(showtime);
$("#banner_magbox"+b).show();
movelist.find("a").eq(b).addClass("hover");
}
});
}
s = setInterval(move,timer);
function stopp(obj){
$(obj).hover(function(){
if(play){
clearInterval(s);
play = 0;
}	  
},
function(){
if(!play){
s = setInterval(move,timer); 
play = 1;
}	
}		  
);
}
stopp(".banner_show");
$(".banner_btn_right").click(function(){
move(); 
});
$(".banner_btn_left").click(function(){
b--;
if(b<0){
b=size-1
}
inbox.each(function(e){
inbox.eq(e).hide(0);
movelist.find("a").eq(e).removeClass("hover");
if(e == b){
inbox.eq(b).fadeIn(showtime);
movelist.find("a").eq(b).addClass("hover");
}
}); 
});
movelist.find("a").click(function(){
var rel = $(this).attr("rel");
inbox.each(function(e){
inbox.eq(e).hide(0);
movelist.find("a").eq(e).removeClass("hover");
$("#banner_magbox"+e).hide(0);
if(e == rel){
inbox.eq(rel).fadeIn(showtime);
movelist.find("a").eq(rel).addClass("hover");
$("#banner_magbox"+rel).show(0);	
}
});
});
$(".bannger_inbox").each(function(e){
var inboxsize = $(".bannger_inbox").size();
inboxwimg = $(this).find("img").width();
$(".bannger_inbox").eq(e).css({"margin-left":(-1)*inboxwimg/2+"px","z-index":inboxsize-e});
});
/*
$(".banner").hover(
function(){
	$(".banner_pre_next").fadeIn();
	},function(){
		$(".banner_pre_next").fadeOut();
		})
		*/
});
/*棣栭〉banner over*/

/*FOCUSE*/

jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/*FOCUSE over*/


/*TAB鏍囩*/

function G_tab(tab_title,tab_text,column,auto_css,hover_css,default_type){
	/* 鏅€歍AB锛� tab_title,tab_text,column(TAB涓暟),auto_css(鏅€氶」鏍峰紡),hover_css(褰撳墠椤规牱寮�),default_type(榛樿鐑偣) */
	var _Delay = null;
	if(!hover_css){var hover_css=""}
	if(!auto_css){var auto_css=""}
	if(!default_type){var default_type=0}
	type_hover(default_type);
	for(var i = 0 ;i<column;i++){
		(function(i){
			$("#"+tab_title+i).bind("click", function(){
				type_hover(i);
			});
		})(i);
	}
	function type_hover(i){
		for(var id = 0;id<column;id++){
			$("#"+tab_text+id).hide();
			$("#"+tab_title+id).addClass(auto_css);
			$("#"+tab_title+id).removeClass(hover_css);
		};
		$("#"+tab_text+i).show();
		$("#"+tab_title+i).removeClass(auto_css);
		$("#"+tab_title+i).addClass(hover_css);
	};
};

/*TAB鏍囩over*/






/*鐐瑰嚮灞曞紑鍏抽棴鏁堟灉*/
function fetchInfo(obj){
if(jQuery(obj).siblings('dd').css('display')=='block') {
jQuery(obj).siblings('dd').hide();
jQuery(obj).removeClass('q_bg_selected');
jQuery(obj).addClass('q_bg');
jQuery(obj).find('span').html('+ 灞曞紑');
} else {
jQuery(obj).siblings('dd').show();
jQuery(obj).removeClass('q_bg');
jQuery(obj).addClass('q_bg_selected');
jQuery(obj).find('span').html('- 鏀惰捣');
}
} 

/*鍦ㄧ嚎瀹㈡湇*/
$(function(){
	$('#close_im').bind('click',function(){
		$('#main-im').css("height","0");
		$('#im_main').hide();
		$('#open_im').show();
	});
	$('#open_im').bind('click',function(e){
		$('#main-im').css("height","272");
		$('#im_main').show();
		$(this).hide();
	});
});


