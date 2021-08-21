@extends('layout.master')
@section('title','Forget')

@section('head')
@endsection()

@section('style')

.main-section{
	width: 450px;
    margin: auto;
    margin-top:8%;
    padding: 40px 25px;
    padding-bottom: 50px;
	box-shadow: 0px 0px 10px 1px #e4e4e4;
}


.logo-section img{
	width: 40px;
    height: 40px;
	border-radius: 50%;
	margin-right:8px;
}
.logo-section{margin-bottom: 10px;}
.logo-section a{
	height: 40px;
    display: flex;
    align-items: center;
    font-size: 25px;
    font-family: sans-serif;
    justify-content: center;
}
.form-contentent .form-input{
    width: 100%;
    padding: 7px 11px;
    font-size: 17px;
    color: #333;
    border-radius: 4px;
    border: 2px solid #cecece;
	margin-top:12px;
}

.form-contentent .form-input{
	margin-top:12px;
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

.gender-label{
	border: 2px solid #ddd;
    width: 48%;
    padding: 8px 13px;
    border-radius: 7px;
    font-size: 17px;
    font-family: sans-serif;
}




.account{
	box-shadow: 1px 2px 5px 2px #e4e4e4;
}
.massages-people{
	cursor: pointer;
    background: #fff;
    font-family: sans-serif;
    padding: 15px 20px;
    margin-top: 0.8px;
    border-bottom: 1px solid #e7e7e7;
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
.email{
	float:right;
	padding-top: 10px;
}

.email, .msg-people{
	display:inline-block;
}
.msg-people{
	width:95%;
}

.user-img{
	width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #ddd;
    margin-right: 7px;
}


@endsection

@section('content')
<div class="screen">@include('messages.message')</div>

<section class="main-section">
	<div class="logo-section">
		<a href="#">
			<img src="{{asset('image/self/logo.png')}}" alt="" />
			<span><b>ChatApplication</b></span>
		</a>
	</div>
	<div class="form-contentent">
	
		<form action="/forget-email" method="post" >
			{{csrf_field()}}
			<br />
			<span style="font-family: system-ui;color: #292929;" ><b>Choese Your Account </b></span>
			<br />
			<br />
			
			<div class="account">
			
			@foreach($email as $user)
			<label for="email">
			<div class="massages-people">
				<div class="msg-people">
				@if($user->image)
					<img class="user-img msg-user" src="{{asset('image/profile/'.$user->image)}}" />
				@else
					<img class="user-img msg-user" src="{{asset('image/self/user.jpg')}}"  />
				@endif
				
					<div class="msg-info">
											
						<span class="msg-people-name">{{$user->firstName.' '.$user->lastName}} </span>
						
					</div>
				</div>
				<input type="radio" name="username" value="{{$user->username}}" class="email" required />
			</div>
			</label>
			@endforeach
			
			</div>		
			

			<input type="submit" value="Send Verify Code" class="submit " />
		</form>

	</div>
</section>



<script src="{{asset('file/js/jquery.js')}}" ></script>

<script type="text/javascript">

$(document).ready(function(){



var $user = $('.msg-people, .email');
$('.msg-people').click(function() {
  // var user=$user.eq($user.index(this) + 1).val();
   $user.eq($user.index(this) + 1).attr('checked','true');
   
});

		
	
});
</script>

@endsection
