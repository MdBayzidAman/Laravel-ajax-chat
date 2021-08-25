	
	//===============link=================//	
	
	var profileLink=$('#msg_username').val();
	
	$('.msg-name, .msg-img').click(function(){
		var profileLink=$('#msg_username').val();
		profileUser(profileLink)
	});
	
	//------- others people profile ---------//
	
	function profileUser(profileLink){
		$('.section-title span').html('Profile');
		$('.msg-prof').show();
		$('.add-contact').show();
		$('.chat-box').hide();
		$('.inbox').hide();
		
		
		
		
		ChangeUrl('/'+profileLink,'/'+profileLink);

		$.get('/subUserProfile?username={{$user->username}}&to_username='+profileLink,function(data){
			//console.log(data);
			
			if(data.contact ==1){
				$('.add-contact').html('<span class="ti-check"> </span> <p>Added</p>');
			}else{
				$('.add-contact').html('<p>Add Contacts</p>');
			}
			
			if(data.subUserinfo.image==null){
				$('.profile-pic').html('<img src="/image/self/user.jpg" alt="" />');
			}else{
				$('.profile-pic').html('<img src="/image/profile/'+data.subUserinfo.image+'" alt="" />');
			}
			
			
			
		   $('.profileUsername').val(profileLink);
		   $('#profile-name').html(data.subUserinfo.firstName+' '+data.subUserinfo.lastName);
		   
		   if(data.subUserinfo.bio==null){
			   $('#profile-bio').html('');
		   }else{
			   $('#profile-bio').html('  '+data.subUserinfo.bio);
		   }
		   
		   if(data.subUserinfo.address==null){
			   $('#profile-address').html('  ');
		   }else{
			   $('#profile-address').html('  '+data.subUserinfo.address);
		   }
		   
		   
		   $('#profile-gender').html('  '+data.subUserinfo.gender);
		   $('#profile-link').html('  '+$(location).attr('href'));
		   
		   //		update profile
		   $('#firstName').val(data.subUserinfo.firstName);
		   $('#lastName').val(data.subUserinfo.lastName);
		   
			
		});
		
		$('.profile-section').show();

		
		
	};
	
	//------- end profile--------//
	
	//	   self profile		//
	function profileFunction(profileLink){
		$('.section-title span').html('Profile');
		$(".btn1,.btn2,.btn3,.btn4,.btn5,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
		$(".btn3").addClass("active");
		
		$('.chat-box').hide();
		ChangeUrl('/{{$user->username}}','/{{$user->username}}');
		
		
		if (window.matchMedia('(max-width: 576px)').matches){
			
			$('#main-screen').css("display","block");
			$('#people-section').addClass('md-none');
		} else {
			
		}

		if (window.matchMedia('(max-width: 768px)').matches){
			
			$('#main-screen').css("display","block");
			$('#people-section').addClass('md-none');
		} else {
			
		}
			
		
		$('.add-contact').html('<p>Add Contacts</p>');
		
		   $('.msg-prof').hide();
		   $('.add-contact').hide();
		   $('.edit-prof').show();
		   $('.inbox').show();
		   
		   @if($user->image)
		   
		    $('.profile-pic').html('<img src="{{asset('image/profile/'.$user->image)}}" alt="" />');
		   
		   @else
			$('.profile-pic').html('<img src="/image/self/user.jpg" />');
		   @endif
		   
		   
		   $('#profile-name').html('<span>{{$user->firstName.' '.$user->lastName}}</span>');
		   $('#profile-bio').html('<p>{{$user->bio}}</p>');
		   $('#profile-address').html('<span>{{$user->address}}</span>');
		   $('#profile-gender').html('<span>{{$user->gender}}</span>');
		   $('#profile-link').html('  '+$(location).attr('href'));
		   
			
		
		$('.profile-section').show();


		
		
	};

/* 	function FriendsFunction(){
		$('.section-title span').html('Peoples');
		$(".btn2").addClass("active");
		
		ChangeUrl('friend','friend');
		
		$('.chat-box').hide();
		var people=$('.people').html();
		$('.middle-section-load').append(people);
		//$('#middle-section-load').html("").load("{{asset('page/friend.blade.php')}}");
		//<div class="people-user-massage-side"></div>
		
	};
	
	$('.people-user-massage-side').click(function(){
		alert();
	});
 */
	function massgeFunction(){
		ChangeUrl('/','/');
		$(".btn1").addClass("active");
		$(".btn2,.btn3,.btn4,.btn5,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
		
		$('.section-title span').html('Inbox');
		$('.profile-section').hide();
		$('.edit-prof').hide();
		$('.chat-box').show();
		
		if (window.matchMedia('(max-width: 576px)').matches){
			
			$('#main-screen').css("display","block");
			//$('#people-section').css("display","block");
			$('#people-section').addClass('md-none');
		} else {
			
		}
		
		if (window.matchMedia('(max-width: 768px)').matches){
			
			$('#main-screen').css("display","block");
			//$('#people-section').css("display","block");
			$('#people-section').addClass('md-none');
		} else {
			
		}
		
	};


	
	
	// 		SETTING TOGGLE
	
	$('#setting').click(function(){
		$('.setting-nav').slideToggle(300);
	});
	

$(document).ready(function(){
	
	
	
	

	if($(location).attr('pathname')== ''){
		
		massgeFunction()
		
		
	}/* else if($(location).attr('pathname')== '/friend'){
		$(".btn1,.btn2,.btn3,.btn4,.btn5,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
		
		return FriendsFunction()
		
		
	} */else if($(location).attr('pathname')== '/{{$user->username}}'){
		$(".btn1,.btn2,.btn3,.btn4,.btn5,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
		
		return profileFunction();
		
	}
	@if(empty($profile))
	@else
	else if($(location).attr('pathname')== '/{{$profile->username}}'){
		$(".btn1,.btn2,.btn3,.btn4,.btn5,.btn6,.btn7,.btn8,.btn9,btn10").removeClass("active");
	
		return profileUser('{{$profile->username}}');
		
	}
	@endif
	
	
	
	
	
	$.ajaxSetup({
		headers:{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		}
	});
	$('#msg-form').submit(function(e){
		//e.preventDrfault();
		var formData =new FormData(this);
		$.ajax({
			type:'post',
			url:'/massage-send',
			data:formData,
			cache:false,
			contentType:false,
			processData:false,
			success:function(data){
				$('.massage-body').animate({scrollTop:200000000000000});

				if(data['massage']){
					$('.massage-body').append('<div class="from-msg"><p>'+data['massage']+'</p></div>');
				}else{}
				var image=data['image'];
				
				if(data['image']){
					$('.massage-body').append('<div class="from-msg"> <img src="http://127.0.0.1:8000/image/user/'+image+'" /> </div>');
				}else{}

				
				
				$('#massage,#image').val('');

				/* $('#massage-end').animate({
					scrollTop:$('.massage-footer').offset().top
				},1000);
				 */
			//	console.log(data);
					
				
			},
			error:function(data){
				//console.log(data);
			},
		});
	});
		
});	




