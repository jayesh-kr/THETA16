// JavaScript Document

/*$(document).ready(function(){


	$("#flagship1").click(function(){
		$(".banner-in>div").slideUp("slow").delay(900);
		//$(".eventbanner").slideUp("slow").delay(1800);
		$("#flagshipbanner").slideDown(1000);
		$(".menu li a").removeClass("selected");
		 $(this).addClass("selected");

	});
	
	
	$("#event1").click(function(){
		$(".banner-in>div").slideUp("slow").delay(900);
	//	$(".flagshipbanner").slideUp("slow").delay(1800);
		$(".eventbanner").slideDown(1000);
		$(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	});
	
	
	$(".eventimg").hover(function(){
		
		var thumbOver = $(this).find("img").attr("src");
		$(this).find("a.thumb").css({'background' : 'url(' + thumbOver + ') no-repeat center bottom'});
		$(this).find("span").stop().fadeTo('normal', 0 , function() {
			$(this).hide() //Hide the image after fade
		}); 
		

	}, function(){
			$(this).find("span").stop().fadeTo('normal', 1).show();

		});
});*/



$(document).ready(function(){


	$("#flagship1").click(function(){
		$(".banner-in>div").animate({top:'-458px'},"slow");
		//$(".eventbanner").slideUp("slow").delay(1800);

		$("#flagshipbanner").animate({top:'0'},"slow");

		$(".menu li a").removeClass("selected");
		 $(this).addClass("selected");

	});
	
	
	$("#event1").click(function(){
		$(".banner-in>div").animate({top:'-458px'},"slow", "swing");
	//	$(".flagshipbanner").slideUp("slow").delay(1800);

		$(".eventbanner1").animate({top:'0'},"slow", "swing");
		
		$(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	});
	

	$("#event").click(function(){
		$(".banner-in>div").animate({top:'-458px'},"slow", "swing");
	//	$(".flagshipbanner").slideUp("slow").delay(1800);

		$(".eventbanner").animate({top:'0'},"slow", "swing");
		
		$(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	});

	$("#event2").click(function(){
		$(".banner-in>div").animate({top:'-458px'},"slow", "swing");
	//	$(".flagshipbanner").slideUp("slow").delay(1800);

		$(".eventbanner2").animate({top:'0'},"slow", "swing");
		
		$(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	});
	

	$("#event3").click(function(){
		$(".banner-in>div").animate({top:'-458px'},"slow", "swing");
	//	$(".flagshipbanner").slideUp("slow").delay(1800);

		$(".eventbanner3").animate({top:'0'},"slow", "swing");
		
		$(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	});
	

	$("#event4").click(function(){
		$(".banner-in>div").animate({top:'-458px'},"slow", "swing");
	//	$(".flagshipbanner").slideUp("slow").delay(1800);

		$(".eventbanner4").animate({top:'0'},"slow", "swing");
		
		$(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	});
	

	$("#event5").click(function(){
		$(".banner-in>div").animate({top:'-458px'},"slow", "swing");
	//	$(".flagshipbanner").slideUp("slow").delay(1800);

		$(".eventbanner5").animate({top:'0'},"slow", "swing");
		
		$(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	});
	
	


	
	



	
/*-----------------------   script for event images hover effect   -----------------------------*/
	$(".eventimg").hover(function(){
		
		var thumbOver = $(this).find("img").attr("src");
		$(this).find("a.thumb").css({'background' : 'url(' + thumbOver + ') no-repeat center bottom'});
		$(this).find("span").stop().fadeTo('normal', 0 , function() {
			$(this).hide() //Hide the image after fade
		}); 
		

	}, function(){
			$(this).find("span").stop().fadeTo('normal', 1).show();

		});
});

/*	$(".eventimg").hover(function(){
		$(this).find("span").fadeOut("slow"); 

	}, function(){
			$(this).find("span").fadeIn("slow");

		});*/







$(document).ready(function(){
						   
	$("#event1").click(function(){
					
		var positionTopEvent = $(".event").position().top;
		var positionTopEvent1 = $(".event1").position().top;
		var positionTopEvent2 = $(".event2").position().top;
		var positionTopEvent3 = $(".event3").position().top;
		var positionTopEvent4 = $(".event4").position().top;
		var positionTopEvent5 = $(".event5").position().top;
		if(positionTopEvent1==0)
		{
			$(".banner-in-page").animate({height:'0'},"slow"); 
			$(".event1").animate({top:'-458px'},"slow");
			$(".menu li a").removeClass("selected");

		}
		else
		{
			if(positionTopEvent==0)
			{
				$(".event").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent2==0)
			{
				$(".event2").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent3==0)
			{
				$(".event3").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent4==0)
			{
				$(".event4").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent5==0)
			{
				$(".event5").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event1").animate({top:'0'},"slow");
		 $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");

		}
		
		 
		
		 
	});
	
	$("#event").click(function(){
					
		var positionTopEvent = $(".event").position().top;
		var positionTopEvent1 = $(".event1").position().top;
		var positionTopEvent2 = $(".event2").position().top;
		var positionTopEvent3 = $(".event3").position().top;
		var positionTopEvent4 = $(".event4").position().top;
		var positionTopEvent5 = $(".event5").position().top;
		if(positionTopEvent==0)
		{
			$(".banner-in-page").animate({height:'0'},"slow"); 
			$(".event").animate({top:'-458px'},"slow");
			$(".menu li a").removeClass("selected");

		}
		else
		{
			if(positionTopEvent1==0)
			{
				$(".event1").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent2==0)
			{
				$(".event2").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent3==0)
			{
				$(".event3").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent4==0)
			{
				$(".event4").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent5==0)
			{
				$(".event5").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event").animate({top:'0'},"slow");
		 $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");

		}
		
		 
		
		 
	});
	
	$("#event2").click(function(){
					
		var positionTopEvent = $(".event").position().top;
		var positionTopEvent1 = $(".event1").position().top;
		var positionTopEvent2 = $(".event2").position().top;
		var positionTopEvent3 = $(".event3").position().top;
		var positionTopEvent4 = $(".event4").position().top;
		var positionTopEvent5 = $(".event5").position().top;
		if(positionTopEvent2==0)
		{
			$(".banner-in-page").animate({height:'0'},"slow"); 
			$(".event2").animate({top:'-458px'},"slow");
			$(".menu li a").removeClass("selected");

		}
		else
		{
			if(positionTopEvent==0)
			{
				$(".event").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent1==0)
			{
				$(".event1").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent3==0)
			{
				$(".event3").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent4==0)
			{
				$(".event4").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent5==0)
			{
				$(".event5").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event2").animate({top:'0'},"slow");
		 $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");

		}
		
		 
		
		 
	});
	
	$("#event3").click(function(){
					
		var positionTopEvent = $(".event").position().top;
		var positionTopEvent1 = $(".event1").position().top;
		var positionTopEvent2 = $(".event2").position().top;
		var positionTopEvent3 = $(".event3").position().top;
		var positionTopEvent4 = $(".event4").position().top;
		var positionTopEvent5 = $(".event5").position().top;
		if(positionTopEvent3==0)
		{
			$(".banner-in-page").animate({height:'0'},"slow"); 
			$(".event3").animate({top:'-458px'},"slow");
			$(".menu li a").removeClass("selected");

		}
		else
		{
			if(positionTopEvent==0)
			{
				$(".event").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent2==0)
			{
				$(".event2").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent1==0)
			{
				$(".event1").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent4==0)
			{
				$(".event4").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent5==0)
			{
				$(".event5").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event3").animate({top:'0'},"slow");
		 $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");

		}
		
		 
		
		 
	});
	
	$("#event4").click(function(){
					
		var positionTopEvent = $(".event").position().top;
		var positionTopEvent1 = $(".event1").position().top;
		var positionTopEvent2 = $(".event2").position().top;
		var positionTopEvent3 = $(".event3").position().top;
		var positionTopEvent4 = $(".event4").position().top;
		var positionTopEvent5 = $(".event5").position().top;
		if(positionTopEvent4==0)
		{
			$(".banner-in-page").animate({height:'0'},"slow"); 
			$(".event4").animate({top:'-458px'},"slow");
			$(".menu li a").removeClass("selected");

		}
		else
		{
			if(positionTopEvent==0)
			{
				$(".event").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent2==0)
			{
				$(".event2").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent3==0)
			{
				$(".event3").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent1==0)
			{
				$(".event1").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent5==0)
			{
				$(".event5").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event4").animate({top:'0'},"slow");
		 $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");

		}
		
		 
		
		 
	});

		$("#event5").click(function(){
					
		var positionTopEvent = $(".event").position().top;
		var positionTopEvent1 = $(".event1").position().top;
		var positionTopEvent2 = $(".event2").position().top;
		var positionTopEvent3 = $(".event3").position().top;
		var positionTopEvent4 = $(".event4").position().top;
		var positionTopEvent5 = $(".event5").position().top;
		if(positionTopEvent5==0)
		{
			$(".banner-in-page").animate({height:'0'},"slow"); 
			$(".event5").animate({top:'-458px'},"slow");
			$(".menu li a").removeClass("selected");

		}
		else
		{
			if(positionTopEvent==0)
			{
				$(".event").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent2==0)
			{
				$(".event2").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent3==0)
			{
				$(".event3").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent4==0)
			{
				$(".event4").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}

			if(positionTopEvent1==0)
			{
				$(".event1").animate({top:'-458px'},"slow");
				$(".banner-in-page").animate({height:'0'},"slow"); 
			}
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event5").animate({top:'0'},"slow");
		 $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");

		}
		
		 
		
		 
	});
	

	

	});





/*$(document).ready(function(){
						   
	$("#flagship").click(function(){
								  
		
		var bannerHeight=0;
		if($(".banner-in-page").height()==0)
		{	
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".flagship").animate({top:'0'},"slow");
		}
		else
		{
		$(".banner-in-page>div").animate({top:'-458px'},"slow");
		$(".banner-in-page").animate({height:'0'},"slow"); 
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".flagship").animate({top:'0'},"slow");

		}
		 
		 $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
		 
	});
	
	$("#event").click(function(){
		var bannerHeight=0;
		if($(".banner-in-page").height()==0)
		{	
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event").animate({top:'0'},"slow");
		}
		else
		{
		$(".banner-in-page>div").animate({top:'-458px'},"slow");
		$(".banner-in-page").animate({height:'0'},"slow"); 
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event").animate({top:'0'},"slow");

		}
		 
		  $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	 
	});

	$("#event1").click(function(){
		var bannerHeight=0;
		if($(".banner-in-page").height()==0)
		{	
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event1").animate({top:'0'},"slow");
		}
		else
		{
		$(".banner-in-page>div").animate({top:'-458px'},"slow");
		$(".banner-in-page").animate({height:'0'},"slow"); 
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event1").animate({top:'0'},"slow");

		}
		 
		  $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	 
	});

	$("#event2").click(function(){
		var bannerHeight=0;
		if($(".banner-in-page").height()==0)
		{	
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event2").animate({top:'0'},"slow");
		}
		else
		{
		$(".banner-in-page>div").animate({top:'-458px'},"slow");
		$(".banner-in-page").animate({height:'0'},"slow"); 
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event2").animate({top:'0'},"slow");

		}
		 
		  $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	 
	});

	$("#event3").click(function(){
		var bannerHeight=0;
		if($(".banner-in-page").height()==0)
		{	
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event3").animate({top:'0'},"slow");
		}
		else
		{
		$(".banner-in-page>div").animate({top:'-458px'},"slow");
		$(".banner-in-page").animate({height:'0'},"slow"); 
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event3").animate({top:'0'},"slow");

		}
		 
		  $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	 
	});

	$("#event4").click(function(){
		var bannerHeight=0;
		if($(".banner-in-page").height()==0)
		{	
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event4").animate({top:'0'},"slow");
		}
		else
		{
		$(".banner-in-page>div").animate({top:'-458px'},"slow");
		$(".banner-in-page").animate({height:'0'},"slow"); 
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event4").animate({top:'0'},"slow");

		}
		 
		  $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	 
	});

	
	$("#event5").click(function(){
		var bannerHeight=0;
		if($(".banner-in-page").height()==0)
		{	
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event5").animate({top:'0'},"slow");
		}
		else
		{
		$(".banner-in-page>div").animate({top:'-458px'},"slow");
		$(".banner-in-page").animate({height:'0'},"slow"); 
		$(".banner-in-page").animate({height:'458px'},"slow"); 
		$(".event5").animate({top:'0'},"slow");

		}
		 
		  $(".menu li a").removeClass("selected");
		 $(this).addClass("selected");
	 
	});

	


	
	});*/