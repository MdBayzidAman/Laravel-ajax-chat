			//***************************************************//
			//        ACTIVE  10 Button---> .btn! for active		 //
			//***************************************************//

				
$(".btn1").click(function(){
	$(".btn1").addClass("active");
	$(".btn2,.btn3,.btn4,.btn5,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
});

$(".btn2").click(function(){
	$(".btn2").addClass("active");
	$(".btn1,.btn3,.btn4,.btn5,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
});

$(".btn3").click(function(){
	$(".btn3").addClass("active");
	$(".btn1,.btn2,.btn4,.btn5,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
});

$(".btn4").click(function(){
	$(".btn4").addClass("active");
	$(".btn1,.btn2,.btn3,.btn5,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
});

$(".btn5").click(function(){
	$(".btn5").addClass("active");
	$(".btn1,.btn2,.btn3,.btn4,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
});

$(".btn6").click(function(){
	$(".btn6").addClass("active");
	$(".btn1,.btn2,.btn3,.btn4,.btn5,.btn7,.btn8,.btn9,btn10").removeClass("active");
});

$(".btn7").click(function(){
	$(".btn7").addClass("active");
	$(".btn1,.btn2,.btn3,.btn4,.btn5,.btn6,.btn8,.btn9,btn10").removeClass("active");
});

$(".btn8").click(function(){
	$(".btn8").addClass("active");
	$(".btn1,.btn2,.btn3,.btn4,.btn5,.btn6,.btn7,.btn9,btn10").removeClass("active");
});

$(".btn9").click(function(){
	$(".btn2").addClass("active");
	$(".btn1,.btn2,.btn3,.btn4,.btn5,.btn6,.btn7,.btn8,btn10").removeClass("active");
});

$(".btn10").click(function(){
	$(".btn10").addClass("active");
	$(".btn1,.btn2,.btn3,.btn4,.btn5,.btn6,.btn7,.btn8,btn9").removeClass("active");
});

