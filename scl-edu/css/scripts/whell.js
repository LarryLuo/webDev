var moving=0;
var pset0=0;
var pset1=0;
var pset2=0;
var pset3=0;
var pset4=0;
var pset5=0;
var pset6=0;
var onpage=1;
$(function(){

$("html,body").animate({ scrollTop: 0 }, 1, function(){
		$("html,body").animate({scrollTop: 0 }, 500);
	});

	if (screen.height>1100){
		$("body").css("height","5300px;");
	}

$(window).bind('scroll',function(e){
	var scrollTopNum = $(document).scrollTop();
	winHeight = $(window).height(),
	returnTop = $("div.returnTop");

	(scrollTopNum > 800) ? returnTop.fadeIn("fast") : returnTop.fadeOut("fast");

	$('#userAgent').html(navigator.userAgent);

	var scrolled = $(window).scrollTop();
/*		$('#navBar')
			.mousewheel(function(event,delta,deltaX,deltaY){
				pset1=0;
				isu=0;
				if(pset0==0){
						if(delta < 0){
							/*to page 1*/
/*							to1();					
						}else if (delta > 0){
							isu = 1;
						}
				}else{
					var $this = $(this),
						timeoutId = $this.data('timeoutId');
					if (timeoutId){
						clearTimeout(timeoutId);
					}
					$this.data('timeoutId',setTimeout(function(){
						pset0 = 0;
						$this.removeData('timeoutId');
						$this = null;
					},300 ));
					return false;
				}
				if(isu==0){
					pset0++;
				}
			}); //end $header 
*/		$('#indexBox')
			.mousewheel(function(event, delta, deltaX, deltaY){
				pset0=0;pset2=0;
				isu=0;
				if(pset1==0){
					if(delta > 0){
						isu=1;
					}else if(delta < 0){
						//go down
						to2();//go to page 2
						onpage=2;//set page = 2
					}  
				}else{
					var $this = $(this),
						timeoutId = $this.data('timeoutId');
					if (timeoutId){
						clearTimeout(timeoutId);
					}
					$this.data('timeoutId',setTimeout(function(){
						pset1 = 0;
						$this.removeData('timeoutId');
						$this = null
					}, 300));
					return false;
				}
				if (isu==0){
					pset1++;
				}			
			});//end $page1box
		$('#aboutBox')
			.mousewheel(function(event, delta, deltaX, deltaY){
				pset1=0;pset3=0;
				if(pset2==0){
					if(delta > 0){
						//go to page 1
						to1();
						onpage=1;
					}else if (delta <0){
						//go down
						if(onpage==1){
							to2();
							onpage=2;
						}else{
							to3();
							onpage=3;
						}

					}
				}else{
					var $this = $(this),
						timeoutId = $this.data('timeoutId');
					if(timeoutId){
						clearTimeout(timeoutId);
					}
					$this.data('timeoutId',setTimeout(function(){
						pset2=0;
						$this.removeData('timeoutId');
						$this = null
					}, 300));
					return false;
				}
				pset2++;
			}); //end $page2box
		$('#eduBox')
			.mousewheel(function(event, delta, deltaX, deltaY){
				pset2=0;pset4=0;
				if(pset3==0){
					if(delta > 0){ 
					//wheel up
						if(onpage==2){
							to1();
							onpage=1;
						}else{
							to2();
							onpage=2;
						}
					}else if(delta <0){
					//wheel down
						if(onpage==2){
							to3();
							onpage=3;

						}else if(onpage==1){
							to2();
							onpage=2;

						}else{
							to4();
							onpage=4;
						}
					}
				}else{
					var $this = $(this),
						timeoutId = $this.data('timeoutId');
					if(timeoutId){
						clearTimeout(timeoutId);
					}
					$this.data('timeoutId',setTimeout(function(){
						pset3=0;
						$this.removeData('timeoutId');
						$this = null
					}, 300));
					return false;
				}
				pset3++;
			});//end page3box
		$('#infoBox')
			.mousewheel(function(event, delta, deltaX, deltaY){
				pset3=0;pset5=0;
				if(pset4==0){
					if(delta > 0){
						if(onpage==3){
							to2();
							onpage=2;
						}else if(onpage==5){
							to4();
							onpage=4;
						}else{
							to3();
							onpage=3;
						}
					}else if(delta < 0){
						if(onpage==3){
							to4();
							onpage=4;

						}else if(onpage==2){
							to3();
							onpage=3;

						}else{
							to5();
							onpage=5;
						}
					}
				}else{
					var $this = $(this),
						timeoutId = $this.data('timeoutId');
					if(timeoutId){
						clearTimeout(timeoutId);
					}
					$this.data('timeoutId', setTimeout(function(){
						pset4=0;
						$this.removeData('timeoutId');
						$this = null
					}, 300));
					return false;
				}
				pset4++;
			});//end page4box

		$('joinBox')
			.mousewheel(function(event, delta, deltaX, deltaY){
				pset4=0;
				var isu=0;
			if(pset5==0){
				if(delta > 0){
					if(onpage==4){
						to3();
						onpage=3;
					}else{
						to4();
						onpage=4;
					}
				}else if(delta < 0){
					if(onpage==4){
						to5();
						onpage=5;
						
					}else if(onpage==3){
						to4();
						onpage=4;
				
					}else{
						isu=1;
					}
				}
			}else {
				var $this = $(this),
					timeoutId = $this.data('timeoutId');
				if(timeoutId){
					clearTimeout(timeoutId);
				}
				$this.data('timeoutId',setTimeout(function(){
					pset5=0;
					$this.removeData('timeoutId');
					$this = null
				},300));
				return false;
			}
			if(isu==0){
				pset5++;
			}
		});//end joinBox

function to0(){
	pset0=0;pset1=0;
	moving=1;
		$('html,body').animate({
			scrollTop:$('#navBar').offset().top
		},720,function(){
			moving=0;
		} );
}

function to1(){
	moving=1;
		$('html,body').animate({
			scrollTop:$('#indexBox').offset().top
		},720,function(){
			moving=0;
		});
}

function to2(){
	moving=1;
		$('html,body').animate({
			scrollTop:$('#aboutBox').offset().top
		},720 ,function(){
			moving=0;
		});
}

function to3(){
	moving=1;
		$('html,body').animate({
			scrollTop:$('#eduBox').offset().top
		},720 ,function(){
			moving=0;
		});
}

function to4(){
	moving=1;
		$('html,body').animate({
			scrollTop:$('#infoBox').offset().top
		},720 ,function() {
			moving=0;
		});
}

function to5(){
	moving=1;
		$('html,body').animate({
			scrollTop:$('#joinBox').offset().top
		},720 ,function() {

		});
}

	$("div.returnTop").click(function(){
		window.scrollTo(0,0);
		onpage=1;pset0=0;pset1=0;pset3=0;pset2=0;
		return false;
	});
});//end window bind

	$(window).scroll(function(){
		var topToolbar = $("#topToolbar");
		var headerH = $("#header").outerHeight();
		var scrollTop = $(document).scrollTop();

			if(scrollTop >=headerH){
				topToolbar.css('top:0');
			}else if(scrollTop < headerH){
				topToolbar.css('top:-60');
			}
		
	});

});//end function