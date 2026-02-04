$(document).ready(function() {
	// menu
	$(".nav").movebg({
		width:100/*滑块的大小*/,
		extra:40/*额外反弹的距离*/,
		speed:300/*滑块移动的速度*/,
		rebound_speed:400/*滑块反弹的速度*/
	});
	// slide
	$(".slideInner").slide({
		slideContainer: $('.slideInner a'),
		effect: 'easeOutCirc',
		autoRunTime: 3000,
		slideSpeed: 1000,
		nav: true,
		autoRun: true,
		prevBtn: $('a.prev'),
		nextBtn: $('a.next')
	});
	// tablist
	$('.tabbox .content ul').width(600*$('.tabbox .content li').length+'px');
	$(".tabbox .tab a").mouseover(function(){
		$(this).addClass('on').siblings().removeClass('on');
		var index = $(this).index();
		number = index;
		var distance = -600*index;
		$('.tabbox .content ul').stop().animate({
			left:distance
		});
	});

	var auto = 3;  //等于1则自动切换，其他任意数字则不自动切换
	if(auto ==1){
		var number = 0;
		var maxNumber = $('.tabbox .tab a').length;
		function autotab(){
			number++;
			number == maxNumber? number = 0 : number;
			$('.tabbox .tab a:eq('+number+')').addClass('on').siblings().removeClass('on');
			var distance = -600*number;
			$('.tabbox .content ul').stop().animate({
				left:distance
			});
		}
		var tabChange = setInterval(autotab,3000);
		//鼠标悬停暂停切换
		$('.tabbox').mouseover(function(){
			clearInterval(tabChange);
		});
		$('.tabbox').mouseout(function(){
			tabChange = setInterval(autotab,3000);
		});
	}
	// tabhelp
	$('.tab_title span').click(function(){
		$(this).addClass("current").siblings().removeClass();
		$(".tab_content > .helplist").hide().eq($('.tab_title span').index(this)).show();
	});
	// folding
	$(".helplist dl dt").click(function(){
		$(this).parent().find("dd").slideToggle();
	})
});