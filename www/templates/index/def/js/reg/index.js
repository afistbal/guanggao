 $(document).ready(function() {

      //自动加载
	  $(".screenshots").roundabout({
            tilt: .6,
            btnPrev: ".ctr-r",
            btnNext: ".ctr-l",
            minScale: .6,
            maxScale: 1,
            minOpacity: 5,
            autoplay: !0,
            autoplayDuration:5e3,
            autoplayPauseOnHover: !0,

			autoplayCallback:function(){
			   	   var info=$(this).find('.roundabout-in-focus img').attr("info");
			       get_descinfo(info);	
			},
			btnPrevCallback:function(){
			   var info=$(this).find('.roundabout-in-focus img').attr("info");
			       get_descinfo(info);
			},
			btnNextCallback:function(){
			   var info=$(this).find('.roundabout-in-focus img').attr("info");
			       get_descinfo(info);
			},
			clickToFocusCallback:function(){
			   	   var info=$(this).find('.roundabout-in-focus img').attr("info");
			       get_descinfo(info);			
			},
			
        });



		//鼠标经过
        $(".ctr").on("mouseover",function() {
             $(".screenshots").roundabout("stopAutoplay");
        });
        
		//鼠标离开
		$(".ctr").on("mouseout",function() {
            $(".screenshots").roundabout("startAutoplay");
        });

       
 });
 function get_descinfo(info){
	   $("[id^=desc_]").hide();
	   $("#desc_"+info).show();
	}
