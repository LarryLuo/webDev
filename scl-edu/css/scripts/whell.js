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
						aboutBoxIn();
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
						aboutBoxOut();
					}else if (delta <0){
						//go down
						if(onpage==1){
							to2();
							onpage=2;
							aboutBoxIn();
						}else{
							to3();
							onpage=3;
							aboutBoxOut();
							eduBoxIn();
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
							aboutBoxOut();
						}else{
							to2();
							onpage=2;
							aboutBoxIn();
							eduBoxOut();
						}
					}else if(delta <0){
					//wheel down
						if(onpage==2){
							to3();
							onpage=3;
							aboutBoxOut();
							eduBoxIn();
						}else if(onpage==1){
							to2();
							onpage=2;
							aboutBoxIn();
						}else{
							to4();
							onpage=4;
							eduBoxOut();
							infoBoxIn();
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
							aboutBoxIn();
							eduBoxOut();
						}else if(onpage==5){
							to4();
							onpage=4;
							infoBoxIn();
							joinBoxOut();
						}else{
							to3();
							onpage=3;
							eduBoxIn();
							infoBoxOut();
						}
					}else if(delta < 0){
						if(onpage==3){
							to4();
							onpage=4;
							eduBoxOut();
							infoBoxIn();

						}else if(onpage==2){
							to3();
							onpage=3;
							aboutBoxOut();
							eduBoxIn();
						}else{
							to5();
							onpage=5;
							infoBoxOut();
							joinBoxIn();
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
						eduBoxIn();
						infoBoxOut();
					}else{
						to4();
						onpage=4;
						infoBoxIn();
						joinBoxOut();
					}
				}else if(delta < 0){
					if(onpage==4){
						to5();
						onpage=5;
						infoBoxOut();
						joinBoxIn();
					}else if(onpage==3){
						to4();
						onpage=4;
						eduBoxOut();
						infoBoxIn();
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

/* functions of animation */

function aboutBoxIn(){
	/* animation of aboutBox in*/
	$('#aboutTitle').animate({top:'220px'},1500);
	$('#aboutCloud1').animate({top:'200px',left:'500px'},1500);
	$('#aboutCloud2').animate({top:'150px',left:'1100px'},1500);
	busAnimation();
}
function aboutBoxOut(){
	/* animation of aboutBox out*/
	$('#aboutTitle').animate({top:'80px'},1500);
	$('#aboutCloud1').animate({top:'100px',left:'400px'},1500);
	$('#aboutCloud2').animate({top:'50px',left:'1400px'},1500);
	stopBus();
}
function busAnimation(){
	$('#aboutBus').animate({width:'443px',left:'-=443'},1000)
	.animate({left:'-=757'},2000)
	.animate({left:'-=1220'},2000)
	.animate({width:'1px'},1000)
	.animate({left:'+=2420'},200,busAnimation);
}
function stopBus(){
	$('#aboutBus').stop(true,false)
	.animate({width:'1px'},100)
	.animate({left:'1920px'},100);
}

function eduBoxIn(){
	$('#eduTitle').animate({top:'270px'},1500);
	$('#eduBoard').animate({left:'500px'},1500);
	$('#eduCube').animate({left:'1200px'},1500);
	$('#eduRuler').animate({top:'340px',left:'1300px'},1500);
	$('#eduStudents').animate({left:'600px'},1500);
	$('#eduTeacher').animate({left:'600px'},1500);
}
function eduBoxOut(){
	$('#eduTitle').animate({top:'120px'},1500);
	$('#eduBoard').animate({left:'400px'},1500);
	$('#eduCube').animate({left:'1300px'},1500);
	$('#eduRuler').animate({top:'10px',left:'1500px'},1500);
	$('#eduStudents').animate({left:'400px'},1500);
	$('#eduTeacher').animate({left:'400px'},1500);
}
function infoBoxIn(){
	$('#infoBuilding').animate({left:'1400px'},1500);
	$('#infoFood').animate({top:'330px'},1500);
	$('#infoGirl').animate({left:'640px'},1500);
	$('#infoPlay').animate({left:'1250px'},1500);
	$('#infoShop').animate({left:'450px'},1500);
	$('#infoTitle').animate({top:'250px'},1500);
}
function infoBoxOut(){
	$('#infoBuilding').animate({left:'1500px'},1500);
	$('#infoFood').animate({top:'400px'},1500);
	$('#infoGirl').animate({left:'700px'},1500);
	$('#infoPlay').animate({left:'1150px'},1500);
	$('#infoShop').animate({left:'400px'},1500);
	$('#infoTitle').animate({top:'400px'},1500);
}
function joinBoxIn(){
	$('#joinCloud').animate({top:'160px',left:'300px'},1500);
	$('#joinMail1').animate({left:'600px'},1500);
	$('#joinMail2').animate({left:'492px'},1500);
	$('#joinTitle').animate({top:'220px'},1500);
	bikeAnimation();
}
function joinBoxOut(){
	$('#joinCloud').animate({top:'200px',left:'200px'},1500);
	$('#joinMail1').animate({left:'550px'},1500);
	$('#joinMail2').animate({left:'540px'},1500);
	$('#joinTitle').animate({top:'170px'},1500);
	stopBike();
}
function bikeAnimation(){
	$('#joinBoy').animate({width:'225px',left:'-=225'},1000)
	.animate({left:'-=675'},2000)
	.animate({left:'-=1245'},2000)
	.animate({width:'1px'},100)
	.animate({left:'+=2145'},200,bikeAnimation);
}
function stopBike(){
	$('#joinBoy').stop(true,false)
	.animate({width:'1px'},100)
	.animate({left:'1920px'},100);
}

		// 点击按钮后，滚动条的垂直方向的值逐渐变为0，也就是滑动向上的效果
		$("#returnTop").click(function() {
			window.scrollTo(0,0);
			onpage=1;pset0=0;pset1=0;pset3=0;pset2=0;
			return false;
		});

});//end window bind

	$(window).scroll(function(){
		var topToolbar = $("#topToolbar");
		var returnTop = $("#returnTop");
		var headerH = $("#header").outerHeight();
		var scrollTop = $(document).scrollTop();

			if(scrollTop >=headerH){
				topToolbar.css('top:0');
				returnTop.css('bottom:30');
			}else if(scrollTop < headerH){
				topToolbar.css('top:-60');
				returnTop.css('bottom:-40');
			}
		
	});

});//end function