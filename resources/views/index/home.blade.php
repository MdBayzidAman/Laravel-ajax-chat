@extends('layout.master')
@section('title','')

@section('head')
@endsection()

@section('style')
*{font-family: sans-serif;}
.top-nav{
	font-size:23px;
	padding: 15px 0;
    border-bottom: 1px solid #ddd;
}
.top-nav-left{
	display: flex;
    justify-content: space-between;
    align-items: baseline;
	padding: 15px 0;
}

.top-nav-left img{
	width: 40px;
    height: 40px;
	border-radius: 50%;
	margin-right:8px;
}
.top-nav-left a{
    height: 40px;
	
	display: flex;
    align-items: center;
	font-size:25px;
	font-family: sans-serif;
}

.middle-nav{
	border-right: 1px solid #dedede;
    border-left: 1px solid #dedede;
}
.top-nav-middle{
    display: flex;
    justify-content: space-between;
    align-items: center;
	padding: 15px 0;
}

.title{
	font-size: 30px !important;
    font-family: sans-serif !important;
	box-shadow:none !important;
	font-weight: bold;
}
.user{
    width: 80%;
    font-size: 17px;
}
.user-img{
	width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #ddd;
    margin-right: 7px;
}
.user a {
    display: flex;
    align-items: center;
	cursor:pointer;
}
.top-nav-right{
    padding: 15px 0;	
}
.search{
    width: 60%;
    background: #f5f5f5;
    border: 1px solid #efefef;
    border-radius: 20px;
    padding: 7px 15px;
    font-size: 17px;
}

.body-section{
    box-shadow: inset 0px 6px 9px 0px #ececec;
    background: #f3f3f3cc;
	height: 100%;
	padding-bottom: 55px;
}
.side-nave-ul li{
    list-style: none;
    padding: 9px 20px;
    margin-top: 3px;
}
.side-nave-ul li:hover{
    background: #fff;
    color: #37a01f;
    border-radius: 10px;
    box-shadow: 2px 3px 7px 0px #e4e4e4;
}
.side-nave-ul li:hover > a{
    color: #37a01f;
}

.active{
    background: #fff;
    color: #37a01f;
    border-radius: 10px;
    box-shadow: 2px 3px 7px 0px #e4e4e4;
}

.side-nave-ul li{
	font-size:21px;
	color:#333;
	cursor: pointer;
}

/* .side-nave-ul li a:hover{
	color: #37a01f;
}
 */
 
/* .section-title{
    background: #fff;
    font-size: 22px;
    font-family: sans-serif;
    padding: 13px 20px;
    margin-top: 3px;
    margin-bottom: 1px;
    box-shadow: 2px 3px 7px 0px #e4e4e4;
    
}
 */
.massage-title{
    background: #fff;
    font-size: 22px;
    font-family: sans-serif;
    padding: 13px 20px;
    margin-top: 3px;
    margin-bottom: 1px;
    box-shadow: 2px 3px 7px 0px #e4e4e4;
    display: flex;
    align-items: center; 
	cursor: pointer;	
}


.massages-people{
	cursor: pointer;
    background: #fff;
    font-family: sans-serif;
    padding: 15px 20px;
    margin-top: 0.8px;
    box-shadow: 2px 3px 7px 0px #e4e4e4;
    /* border-radius: 10px; */
/*     display: flex;
	align-items: center;
 */}
 
.msg-info{
	display: flex;
    flex-direction: column;
	justify-content: center;
	width: 65%;
}
.msg-people-name{
	font-size:17px;
}
.msg-people-info{
color: #a9a8a8;
    font-size: 13px;
}
.msg-user{
	float:left;
}
.msg-count{
	float:right;
	padding-top: 10px;
}
.msg-count span{
    background:#2196f3;
    color: #fff;
    padding: 3px;
    padding-right: 5px;
    border-radius: 50%;
    font-size: 13px;
}
.msg-count, .msg-people{
	display:inline-block;
}
.msg-people{
	width:80%;
}

.people-title{
	font-size: 18px;
    padding: 16px 0;
}
.active-status{
	width:13px;
	height:13px;
    background: #3a9e3e;
    color: #fff;
    padding: 3px;
    border-radius: 50%;
	margin-top: 12px
}

.profile-section{
	background: #fff;
    padding-bottom: 40px;
    margin: 5px 0;
	display:none;
}
.profile-pic img{
	width: 300px;
    height: 300px;
    border: 1px solid #ddd;
    border-radius: 150px;
}
.profile-pic{
    padding: 25px;
    margin: auto;
    text-align: center;
}
.profile-user{
	font-size: 21px;
    text-align: center;
}

.profile-req{
	padding: 20px;
    font-size: 17px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.add-contact{
	border: none;
    padding: 2% 6%;
    background: #2b9d2f;
    border-radius: 6px;
    color: #fff;
    font-size: 16px;
	display: flex;
}

.inbox{
	border: none;
    padding: 2% 6%;
    background: #2b9d2f;
    border-radius: 6px;
    color: #fff;
    font-size: 16px;
	display: flex;
}


.edit-prof{
	display:none;
}
.edit-profile{
	display:none;
	padding: 25px;
    font-size: 16px;
}
.msg-link-btn{
	border: none;
    padding: 2% 3%;
    background: #d0d0d0;
    border-radius: 6px;
    color: #000;
    font-size: 19px;
}
.bio{
	padding: 2% 5.5%;
    color: #5b5b5b;
    font-size: 15px;
}
.profile-info{
	padding: 2% 5.5%;
    font-size: 17px;
    line-height: 1.7;
}
.profile-info ul{
	list-style:none;
}

.massage-main-div{
	display:none;
    box-shadow: 2px 3px 7px 0px #e4e4e4;
}


.massage-div{
	display: flex;
    flex-direction: column;
    height: 500px;
    justify-content: flex-start;
}
.msg-img{
	margin-left:10px;
}

.massage-body{
	background: #fff;
    overflow-y: auto;
    height: 84.5%;
    padding: 0 3%;
    display: flex;
    flex-direction: column;
}
.from-msg{
	margin-top: 9px;
    width: fit-content;
    margin-left: auto;
    max-width: 60%;
    background: #e4e4e4;
    padding: 8px 11px;
    color: #333;
    border-radius: 12px 12px 0 12px;
}
.to-msg{
	margin-top: 9px;
    width: fit-content;
    max-width: 60%;
    background: #0d84ff;
    margin-right: auto;
    color: #fff;
    padding: 8px 11px;
    border-radius: 0 12px 12px 12px;
}
.from-msg img, .to-msg img{width: 100%;}

.from-msg p, .to-msg p{overflow: hidden;}

.massage-footer{
    display: flex;
    background: #fff;
    padding: 2.3% 4%;
    align-items: center;
    justify-content: center;
}
.ti-gallery:before {
    content: "\e71e";
    margin-right: 83px;
}
.ti-gallery{
	font-size: 23px;
    width: 9%;
	cursor: pointer;
}

.msg-text{
	padding: 7px 15px;
    width: 80%;
    font-size: 16px;
    border: 1px solid #ececec;
    border-radius: 69px;
	background: #f5f5f5;
}
.send-btn{
	transform: rotate(90deg);
    border: none;
    padding-bottom: 1%;
    font-size: 29px;
    background: #fff;
	cursor: pointer;
}

.profileBack{
    font-size: 23px;
    padding-left: 16px;
    padding-top: 11px;
}






.input-name{
	width: 49% !important;
}
.gender{
	padding: 6px 10px;
    border: 1px solid #d0d0d0;
    border-radius: 5px
}
/*		Grid css	*/
.d-flex{
	display:flex;
	justify-content: space-between;
}
.input-primary{
	font-size: 16px;
	width: 100%;
    padding: 7px 6px;
    border: 1px solid #c2c2c2;
    border-radius: 6px;
}
.submit{
    width: 100%;
    border: none;
    background: #5ab245;
    color: white;
    font-size: 18px;
    padding: 10px;
    cursor: pointer;
	margin-top:20px;
}
.bio{
	max-width:100%;
}
.profile-req div, .profile-req button{
	cursor:pointer;
}
.search-result{
	display:none;
    background: #ffff;
    width: 100%;
    padding: 15px 11px;
    box-shadow: -1px 6px 20px 0px #ddd;
    position: absolute;
    left: 0px;
    top: 68px;
    z-index: 1000;
}
.search-result-info{
    color: #717171;
    font-size: 13px;
}
.setting-nav li{
	margin-left: 15px;
}

.setting-nav{
	display:none;
}
.side-nave-ul li i {
    margin-right: 12px;
}

.m-user{
	display:none;
	cursor:pointer;
	float:right;
}












@media only screen and (max-width: 576px)
{
	footer{
		display:block;
	}
}

@media only screen and (max-width: 768px)
{
	footer{
		display:block;
	}
}



@endsection

@section('content')
<?php 
	$name=$user->firstName.' '.$user->lastName;
?>
<header class="">
	<div class="screen">
		<div class="col">
			<div class="col-s-3">
				<div class="top-nav-left">
					<a href="/">
						<img src="{{asset('image/self/logo.png')}}" alt="" />
						<span><b>ChatApplication</b></span>
					</a>
					<div onclick="profileFunction()" class="m-user md-block">
						<a >
						@if($user->image)
							<img class="user-img" src="{{asset('image/profile/'.$user->image)}}" />
						@else
							<img class="user-img" src="{{asset('image/self/user.jpg')}}" />
						@endif
						</a>
					</div>
				</div>
			</div>
			<div class="col-s-6 middle-nav">
				<div class="top-nav-middle">
					<div class="title section-title">
						<span><b>Inbox</b></span>
					</div>
					<input type="search" class="search" placeholder="Search People" />
					
				</div>
				<div class="search-result">
					<p class="search-result-info" >
						<b>' <span>0</span> ' RESULT FOUND.</b>
					</p>
					<div class="search-user-result">
					
					</div>
				</div>
			</div>
			<div class="col-s-3 md-none">
				<div class="top-nav-right">
					<div onclick="profileFunction()" class="user">
						<a >
						@if($user->image)
							<img class="user-img" src="{{asset('image/profile/'.$user->image)}}" />
						@else
							<img class="user-img" src="{{asset('image/self/user.jpg')}}" />
						@endif
							<span><b>{{$name}} </b></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<section class="body-section">
<div class="screen">
	<div class="col">
		<div class="col-s-3 md-none">
			<menu class="">
				<div class="">
					<ul class="side-nave-ul" >
						<li onclick="massgeFunction()" class="btn1 active"><i class="ti-comment-alt"></i>Massage</li>
					<!---	
						<li onclick="FriendsFunction()" class="btn2"><i class="far fa-newspaper"></i>Friends</li>	--->
						
						<li onclick="profileFunction()" class="btn3 "><i class="ti-user"></i>Profile</li>
												
						<li class="" id="setting"><i class="ti-settings"></i>Setting
						<i style="float:right;"class="ti-angle-down"></i>
						</li>
						<ul class="setting-nav">
							<li><a href="/logout">LogIn Another Account</a></li>
							<li><a href="/forget">Forget Password</a></li>
						</ul>
						
						<li class="btn6 "><a style="display: block;" href="/logout"><i  class="ti-shift-right"></i>  Log Out</a></li>
					</ul>
				
				</div>


			</menu>
		</div>
		<div id="main-screen" class="col-s-6 mp-0">
		@include('messages.message')
			<div class="middle-section">
			<!--
				<div class="section-title">
					<span>Inbox</span>
				</div>
			-->				
				<div class="middle-section-load">
				</div>	
				<div class="chat-box">
				
					<div class="massage-main-div">
					<div class="massage-div">
					<div class="massage-title"> <i class="ti-arrow-left backMsg"> </i>
					
						<img class="user-img msg-img" src="FGH" />
						
						<input type="hidden" value="" id="msg_username" />
						<span class="msg-name" > </span>
					</div>
					<div class="massage-body">

					<p id="massage-end"></p>
					</div>
					<div class="massage-footer">
					
					<form method="get" enctype="multipart/form-data" id="msg-form" action="javascript:void(0)" ><input type="hidden" value="{{$user->username}}" name="from_user" /><input type="hidden" value="" name="to_user" id="to_user" /><input type="file" name="image" id="image" class="ti-gallery" /><input type="text" name="massage" id="massage" placeholder="Text a massage" class="msg-text" /><button type="submit" class="ti-location-arrow send-btn" ></button></form>
					</div>
					</div>
					</div>
				
				
				
				<div class="people-user-massage">
				@foreach(App\contact::where('from_contact',$user->username)->orWhere('to_contact',$user->username)->orderBy('last_send','desc')->get() as $msgPeople)
				
	
				<?php 


				if($msgPeople->from_contact==$user->username){
					$msgesPeople=App\user::where('username',$msgPeople->to_contact)->first();
				}else{
					$msgesPeople=App\user::where('username',$msgPeople->from_contact)->first();
				}
				
		
				$unread=count(App\massage::where([['to_user',$user->username],['from_user',$msgesPeople->username],['read','0']])->get());
				
				
					
				
				
					
				
				?>
				
				  
					<div class="massages-people">
						<div class="msg-people">
						
						@if($msgesPeople->image)
							<img class="user-img msg-user" src="{{asset('image/profile/'.$msgesPeople->image)}}" alt="" />
						@else
							<img class="user-img msg-user" src="{{asset('image/self/user.jpg')}}"/>
						@endif
						
							<div class="msg-info">
							
								<input type="hidden" value="{{$msgesPeople->username}}" class="userInfo" />
								
								<span class="msg-people-name">{{$msgesPeople->firstName.' '.$msgesPeople->lastName}} </span>
								<span class="msg-people-info">
								@if(App\massage::where([['from_user',$msgesPeople->username],['to_user',$user->username]])->orWhere([['from_user',$user->username],['to_user',$msgesPeople->username]])->latest()->first()->from_user == $user->username)
								You: 
								{{substr(App\massage::where([['from_user',$msgesPeople->username],['to_user',$user->username]])->orWhere([['from_user',$user->username],['to_user',$msgesPeople->username]])->latest()->first()->massage,0,30)}}...
								
								@else
									
								{{substr(App\massage::where([['from_user',$msgesPeople->username],['to_user',$user->username]])->orWhere([['from_user',$user->username],['to_user',$msgesPeople->username]])->latest()->first()->massage,0,30)}}...

								@endif
								
								</span>
							</div>
						</div>
						@if(empty($unread))
							
						@elseif($unread > 0)
						<div class="msg-count"><span>{{$unread}}</span></div>
						@else
						@endif					
					</div>
			
				@endforeach
				
				</div>					
				</div>		
				
				<div class="profile-section">
				<div class="ti-arrow-left profileBack"> </div>
					<div class="profile-pic">
						
						
					</div>
					<div class="profile-user">
						<span id="profile-name" ></span>
					</div>
					<div class="profile-req">
						
						<input type="hidden" class="profileUsername" value=""/>
						
						<div class="add-contact">
							<p>Add Contacts</p>
						</div>
						
						<div class="inbox">
							<p>Inbox</p>
						</div>
						
						<button class="ti-comment-alt msg-link-btn msg-prof">
						</button>
						
						<div class="msg-link-btn edit-prof">
							<span class="ti-pencil-alt "></span>
						</div>
						
						<button class="ti-link msg-link-btn link-prof "></button>
						
					</div>
					<hr style="width: 90%;margin: auto;border: 0.1px solid #ddd;" />
					
					<div class="edit-profile pt-5">
						<h3 style="text-align:center;">Update Profile</h3>
						
						
				<form action="/update-profile-info" enctype="multipart/form-data" class="profile_form" method="post">
						{{csrf_field()}}
						
						  <div class="form_div">
						  <input name="username" type="hidden" value="{{$user->username}}"/>
						   <label for="name">Name</label>
						   <br />
						   
						   <input name="firstName" type="text" class="input-name input-primary firstName" placeholder="First Name" value="{{$user->firstName}}" />
						   
						   <input name="lastName" type="text" class="input-name input-primary lastName" placeholder="Last Name"  value="{{$user->lastName}}"/><br /><br />
						   
						   <label for="bio">Bio</label>
						   <input name="bio" type="text" class="input-primary bio" placeholder="Add Your Bio..." value="{{$user->bio}}" /> <br /><br />
						   
						   <label for="address">Address</label>
						   <input name="address" type="text" class="input-primary address" placeholder="Address" value="{{$user->address}}" /><br /><br />
						   
						   
						   <label for="pic">Profile Image</label>
						   <input name="image" type="file" class="input-primary" placeholder="Profile Pic" /><br /><br />
						   
						   
						   <label for="gender">Gender</label>
						   <br />
						   
						   
						   <div class="d-flex" >	
						   
						   <div class="input-name gender" >
						   
						   <label for="male">
						     <span>Male</span>
						     <input name="gender" id="male"  value="Male" type="radio" 
							<?php 
							if($user->gender=='Male'){
								echo 'checked="true"';
							}else{};
							?>							
							 style="float:right" />
						   </label>
						   </div>
						   
						   <div class="input-name gender">
						   <label for="female">
						     <span>Female</span>
						     <input name="gender" id="female" value="Female" type="radio"
							<?php 
							if($user->gender=='Female'){
								echo 'checked="true"';
							}else{};
							?>
							 style="float:right;" />
						   </label>
						   </div>
						   
						   </div>
						   <br />
						   <input type="submit" value="Update"class="submit " />
						  </div>
				</form>
				
				
					</div>
					
					<div id="profile-bio" class="bio">
						<p></p>
					</div>
					<div class="profile-info">
						<ul>
							<li>Live In <b id="profile-address"> </b></li>
							<li>Gender <b id="profile-gender" ></b></li>
							<li>Profile Link <b id="profile-link" ></b></li>
						</ul>
					</div>
				</div>
			
			</div>
		</div>
		<div id="people-section" class="col-s-3 mp-0 md-none">
			<div class="side-section-load">
			  <div class="people">
				<div class="friend">
					<div class="people-title">
						<span>Contact People</span>
					</div>
					@foreach(App\friend::where('from_friend',$user->username)->orWhere('to_friend',$user->username)->get() as $friends)	
					
					<?php 
					if($friends->from_friend==$user->username){
						$friendPeople=App\user::where('username',$friends->to_friend)->first();
					}else{
						$friendPeople=App\user::where('username',$friends->from_friend)->first();
					}
					?>
					
					@if($friendPeople->username==$user->username)
					@else
					<div class="massages-people">
						<div class="msg-people">
						@if($friendPeople->image)
							<img class="user-img msg-user" src="{{asset('image/profile/'.$friendPeople->image)}}" />
						@else
							<img class="user-img msg-user" src="{{asset('image/self/user.jpg')}}"  />
						@endif
						
							<div class="msg-info">
							
								<input type="hidden" value="{{$friendPeople->username}}" class="userInfo" />
								
								<span class="msg-people-name">{{$friendPeople->firstName.' '.$friendPeople->lastName}} </span>
								
							</div>
						</div>
						<!--<div class="msg-count active-status"></div>-->
					</div>
					@endif
					@endforeach
				</div>
				
				
				<div class="other-people">
					<div class="people-title mt-1">
						<span>Suggest peoples</span>
					</div>
		
		
				@foreach(App\user::all() as $people)
				@if($people->username==$user->username)
					
				@else
								
				  <div class="people-user-massage-side">
				  
				 
					<div class="massages-people">
						<div class="msg-people">
						
						@if($people->image)
							<img class="user-img msg-user" src="{{asset('image/profile/'.$people->image)}}" alt="" />
						@else
							<img class="user-img msg-user" src="{{asset('image/self/user.jpg')}}"  />
						@endif
						
							<div class="msg-info">
							
								<input type="hidden" value="{{$people->username}}" class="userInfo" />
								
								<span class="msg-people-name">{{$people->firstName.' '.$people->lastName}} </span>
								<span class="msg-people-info">
							
								</span>
							</div>
						</div>
						
						<!--<div class="msg-count"><span></span></div>-->
						
											
					</div>

					</div>
				   @endif
				@endforeach				
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>
</section>


<script type="text/javascript">

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




//		SEARCH/FIND  PERSONE..
$(document).ready(function(){

	
	$('.search').keydown(function(){
		var info=$('.search').val();

		if(info.length > 0){
			search();
		}else if(info.length <= 0){
			$('.search-result').hide();
		}
	});
	
	function search(){
	
		var info = $('.search').val();
	
		$.ajax({
			type:'get',
			url:'/searchPeople?info='+info,
			success:function(data){
				
				
				$('.search-result').show();
				
				var countResult=data.length;
				$('.search-result-info span').html(countResult);
				
				$('.search-user-result').empty();
				
				$.each(data, function(index, stdObj){
					
					if(stdObj.image==null){
						var image='<img class="user-img msg-user" src="/image/self/user.jpg" />';
					}else{
						var image='<img class="user-img msg-user" src="/image/profile/'+stdObj.image+'" />';
					}
					
					$('.search-user-result').append('<div class="massages-people"><div class="msg-people">'+image+'<div class="msg-info"><input type="hidden" value="'+stdObj.username+'" class="userInfo" /><span class="msg-people-name">'+stdObj.firstName+'  '+stdObj.lastName+' </span></div></div><div class="msg-count active-status"></div></div>');
					
				});
				//console.log(data);
			},
			error:function(data){
				//console.log(data);
			},
		});	



};
	
});





	//alert($(location).attr('href'));	//abc.com
	//alert($(location).attr('pathname'));	//.../abc
	//alert($(location).attr('hash'));     //?=abc
	
	
/* 	$('#profile').click(function(){
		ChangeUrl('profile','profile');
		$('#middle-section-load').html("").load(profile);
	});
	
	$.ajax({
		url:'/profile',
		success: function(data){
			$('#middle-section-load').html(data);
		}
	});				
 */
 
 
 </script>


@endsection
