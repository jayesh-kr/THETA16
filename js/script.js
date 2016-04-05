





$(document).ready(function(){
	
	$(".envinsion").hover(function () {
        $(this).find(".hoverdiv").animate({height:"188px"}, 350);
		$(this).find('p').fadeIn("slow");
    }, function(){
		$(this).find('.hoverdiv').animate({height:"50px"}, 350);
		$(".hoverdiv").find('p').fadeOut("slow");
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
	
});


$(window).load(function()
  {
	  
    $(".header-inner").animate({margin:"0px auto", opacity:"1"}, "slow");
	$(".inner-banner").animate({margin:"15px auto", opacity:"1"}, "slow");

    $(".header").animate({margin:"0px auto", opacity:"1"}, "slow");
	$(".banner").animate({margin:"0px auto", opacity:"1"}, "slow");

});

<!-- scroller -->

			$(function() {

				//	Basic carousel, no options
				$('#foo0, #foo2').carouFredSel();
			});




            $(function() {
                $('#activator').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#box').css("display","block");
                        $('#box').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#boxclose').click(function(){
				$('#box').css("display","none");
                    $('#box').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });

			 $(function() {
                $('#activator1').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#box1').css("display","block");
                        $('#box1').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#boxclose1').click(function(){
				$('#box1').css("display","none");
                    $('#box1').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });

			 $(function() {
                $('#register').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#regbox').css("display","block");
                        $('#regbox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#regboxclose').click(function(){
				$('#regbox').css("display","none");
                    $('#regbox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });


 $(function() {
                $('#login').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#logbox').css("display","block");
                        $('#logbox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#logboxclose').click(function(){
				$('#logbox').css("display","none");
                    $('#logbox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });

			 $(function() {
                $('#toplogin').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#logtopbox').css("display","block");
                        $('#logtopbox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#logtopboxclose').click(function(){
				$('#logtopbox').css("display","none");
                    $('#logtopbox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });


 $(function() {
                $('#forgot').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#forgotbox').css("display","block");
                        $('#forgotbox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#forgotboxclose').click(function(){
				$('#forgotbox').css("display","none");
                    $('#forgotbox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });

			$(function() {
                $('#acti').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#fedbox').css("display","block");
                        $('#fedbox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#fedboxclose').click(function(){
				$('#fedbox').css("display","none");
                    $('#fedbox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });



$(function() {
                $('#activator3').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#box2').css("display","block");
                        $('#box2').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#boxclose2').click(function(){
				$('#box2').css("display","none");
                    $('#box2').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });

			$(function() {
                $('#general').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#genbox').css("display","block");
                        $('#genbox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#genboxclose').click(function(){
				$('#genbox').css("display","none");
                    $('#genbox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });


$(function() {
                $('#steps').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#stepbox').css("display","block");
                        $('#stepbox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#stepboxclose').click(function(){
				$('#stepbox').css("display","none");
                    $('#stepbox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });


$(function() {
                $('#transport').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#tranbox').css("display","block");
                        $('#tranbox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#tranboxclose').click(function(){
				$('#tranbox').css("display","none");
                    $('#tranbox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });


$(function() {
                $('#support').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#supbox').css("display","block");
                        $('#supbox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#supboxclose').click(function(){
				$('#supbox').css("display","none");
                    $('#supbox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });

			$(function() {
                $('#reach').click(function(){
                    $('#overlay').fadeIn('fast',function(){
					$('#reabox').css("display","block");
                        $('#reabox').animate({'bottom':'9%'},500);
						
                    });
                });
                $('#reaboxclose').click(function(){
				$('#reabox').css("display","none");
                    $('#reabox').animate({'bottom':'9%'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });








	
	
	/*--------  tab script   -----------*/
	$(document).ready(function(){
	$("#tabsholder").tytabs({
							tabinit:"1",
							fadespeed:"fast"
							});

});
