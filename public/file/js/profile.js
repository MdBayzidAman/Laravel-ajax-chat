

function ChangeUrl(page, url){
	if(typeof(history.pushState) !="undefined"){
		var obj = {Page:page, Url:url};
		history.pushState(obj, obj.Page, obj.Url);
	}else{
		alert("Browser dose not support HTML5.");
	}
};
	


//----------- profile friend add ---------//
$('.add-contact').click(function(){
	var profileUsername =$('.profileUsername').val();
	
	$.ajax({
		type:'get',
		url:'/add-contact-request?username={{$user->username}}&to_username='+profileUsername,
		success:function(data){
			$('.add-contact').html('<span class="ti-check"> </span> <p>Aded</p>');
			
		},
		error:function(data){
			//console.log(data);
		},
	});	

	
});



//---------- profile edit ------------//
$('.edit-prof').click(function(){
	
	
	$('.edit-profile').fadeToggle(400);
	
	
});          
	 
	 


	 
//---------- profile link ------------//
$('.link-prof').click(function(){
	
	//$('#profile-link').select();
	
	copy_input($(location).attr('href'));
});
  
//=======copy funtion =======//
function copy_input(input){

	var makeInputForCopy=$('<input>').val(input).appendTo('body').select();
	
	document.execCommand('copy');
	makeInputForCopy.remove();
		
};

	  
//---------- profile msg ------------//
$('.msg-prof').click(function(){
	
	clearInterval(window.interval);

	var userInfo = $('.profileUsername').val();
	var userName = $('#profile-name').html();
	massgeFunction();
	$('.people-user-massage').hide();
	$('.profile-section').hide();
	//----------massage box---------//
	$('.massage-main-div').show();
	$('.chat-box').show();
	
	  $('.massage-title span').html(userName);
	  $('#to_user').val(userInfo);
	  $('#msg_username').val(userInfo);
	 // console.log($(window).width());
	  
	  $('.massage-body').empty();
	  
	 
	  intervalmsg()
	  window.interval = setInterval(intervalmsg,1000);
	  function intervalmsg(){
	$.ajax({
		type:'get',
		url:'/chat-massage?username={{$user->username}}&to_username='+userInfo,
		success:function(data){
			//console.log(data);
			$('.massage-body').empty()
			$.each(data,function(index, chat){
				if(chat.from_user=='{{$user->username}}'){
					$('.massage-body').append('<div class="from-msg"><p>'+chat.massage+'</p></div>');
					
				}else{
					$('.massage-body').append('<div class="to-msg"><p>'+chat.massage+'</p></div>');
				}
			
			

			});

		},
		error:function(data){
			//console.log(data);
		},
	});	
	};	
		
$('.massage-body').animate({scrollTop:200000000000000});

	
	$('.backMsg,').click(function(){
		clearInterval(window.interval);
		

	});


	
});



//---------- profile msg end ------------//
	  


