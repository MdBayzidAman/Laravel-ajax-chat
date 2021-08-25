
// ------ chat box ---------//
$('.massages-people').live('click',function(e){
	 clearInterval(window.interval);

	var image = $(this).find('.msg-people .user-img').attr("src");
	var userInfo = $(this).find('.userInfo').val();
	var userName = $(this).find('.msg-people-name').html();
	massgeFunction();
	$('.people-user-massage').hide();
	$('.profile-section').hide();
	//----------massage box---------//
	$('.massage-main-div').show();
	$('.chat-box').show();
	
	
	
	
	//	MEDIA QUERY FOR CHAT BOX
	if(window.matchMedia('(max-width: 576px)').matches){
		$('header').hide();
		$('.massage-div').animate({
			height:'100vh',
		});
		$('footer').css("display","none");
	} else {
		
	}
	
	if(window.matchMedia('(max-width: 768px)').matches){
		$('header').hide();
		$('.massage-div').animate({
			height:'100vh',
		});
		$('footer').css("display","none");
	} else {
		
	}
	
	
	
	
	
	  $('.massage-title span').html(userName);
	  $('.massage-title img').attr('src',image);
	  
	  
	  $('#to_user').val(userInfo);
	  $('#msg_username').val(userInfo);
	 // console.log($(window).width());
	  
	  $('.massage-body').empty();
	  
	 
	  intervalmsg()
	  window.interval = setInterval(intervalmsg,2000);
	  function intervalmsg(){
	$.ajax({
		type:'get',
		url:'/chat-massage?username={{$user->username}}&to_username='+userInfo,
		success:function(data){
			//console.log(data);
			$('.massage-body').empty()
			$.each(data,function(index, chat){
				
				
				if(chat.from_user=='{{$user->username}}'){
					
					if(chat.massage==null){
					}else{
						$('.massage-body').append('<div class="from-msg"><p>'+chat.massage+'</p></div>');
					}
					
					if(chat.image==null){
					}else{
						$('.massage-body').append('<div class="from-msg"><img src="/image/user/'+chat.image+'" alt="" /></div>');
					}
					
				}else{
					
					if(chat.massage==null){
					}else{
						$('.massage-body').append('<div class="to-msg"><p>'+chat.massage+'</p></div>');
					}
					
					if(chat.image==null){
					}else{
						$('.massage-body').append('<div class="to-msg"><img src="/image/user/'+chat.image+'" alt="" /></div>');
					}
					
					
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



$('.backMsg').click(function(e){
	
	//	MEDIA QUERY FOR CHAT BOX

	if(window.matchMedia('(max-width: 576px)').matches) {
		$('header').show();
		$('.massage-div').animate({
			height:'500px',
		});
		$('footer').css("display","block");
	} else {
		
	}
	
	if(window.matchMedia('(max-width: 768px)').matches) {
		$('header').show();
		$('.massage-div').animate({
			height:'500px',
		});
		$('footer').css("display","block");
	} else {
		
	}

	
	$('.people-user-massage').show();
	$('.massage-main-div').hide();
});


$('.profileBack, .inbox').click(function(e){
	
	massgeFunction();
	
});



//-------------------chat box end------------------//

//------------- chat person------------------//

var intvalChat= setInterval(intvalChatPerson,4000)
function intvalChatPerson(){
	$.ajax({
		type:'get',
		url:'/chat-people?username={{$user->username}}',
		success:function(data){
			//console.log(data);
			$('.people-user-massage').empty()

			$('.people-user-massage').append(data);

			$.each(data,function(index, chat){
				
							
			});

		},
		error:function(data){
			//console.log(data);
		},
	});	
	};	
//------------- end chat person------------------//





