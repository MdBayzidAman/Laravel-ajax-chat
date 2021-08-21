@extends('layout.master')
@section('title','LogIn & SignUp')

@section('head')
@endsection()

@section('style')

.main-section{
	width: 450px;
    margin: auto;
    margin-top: 4%;
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
.gender-label input{
    margin-top: 2px;
    float: right;
}
.gender{
	display:flex;
	justify-content: space-between;
}

.label{
	margin-top: 15px;
    margin-bottom: 6px;
    color: #636363;
    font-size: 16px;
    font-family: monospace;
}

.or-div{
	display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 15px;
    color: #5d5d5d;
}
.or-row{
	width: 45%;
    border: 1px solid #ddd;
}
.footer-section{
	text-align: center;
    padding-top: 15px;
    font-size: 16px;
    font-family: monospace;
    line-height: 1.7;
}
.footer-section p a:hover{
	color:green;
	cursor:pointer;
}
#create-account{
	font-size: 20px;
    color: #187b00;
}

.eye{
	margin-top: 8px;
    font-family: system-ui;
}

@endsection

@section('content')
<div class="screen">@include('messages.message')</div>

<section id="register-section" class="main-section">
	<div class="logo-section">
		<a href="#">
			<img src="{{asset('image/self/logo.png')}}" alt="" />
			<span><b>ChatApplication</b></span>
		</a>
	</div>
	<div class="form-contentent">
		<form  action="/sign-up" method="post" >
			{{csrf_field()}}
			<input type="text" name="firstName" placeholder="First Name" class="form-input" required />
			
			<input type="text" name="lastName" placeholder="Last Name" class="form-input" required />
			
			<input type="email" name="email" placeholder="Email Address" class="form-input" required />
			
			<input type="password" name="password" placeholder="Create Password" class="form-input" required />
			
			<div class="label"><span>Gender</span></div>
			<div class="gender">
				
				<label for="Male" class="gender-label">
					<span>Male</span>
					<input type="radio" name="gender" id="Male" value="Male" required />	
				</label>
				
				<label for="Female" class="gender-label">
					<span>Female</span>
					<input type="radio" name="gender" id="Female"  value="Female"  required />
				</label>
			
			</div>
			
			
			
			<input type="submit" value="Register" class="submit " />
		</form>
		<div class="footer-section">
			<p id="log-in" style="color:green;" >Log In</p>
		</div>
	</div>
</section>


<section id="login-section" class="main-section">
	<div class="logo-section">
		<a href="#">
			<img src="{{asset('image/self/logo.png')}}" alt="" />
			<span><b>ChatApplication</b></span>
		</a>
	</div>
	<div class="form-contentent">
	
		<form action="/login" method="post" >
			{{csrf_field()}}
			
			<input type="email" name="email" placeholder="Email Address" class="form-input" required />
			
			<input type="password" name="password" placeholder="Password" class="form-input" id="password" required />
			
<!-- 			<div class="eye">
				<input type="checkbox" id="password-eye" onclick="show()" />
				<span>Show Password</span>
			</div>
 -->					
			
			<input type="submit" value="Log In" class="submit " />
		</form>
		<div class="footer-section">
			<p><a href="/forget">forget password</a></p>
			<div class="or-div">
				<hr class="or-row" /> <span>Or</span> <hr  class="or-row"  />
			</div>
			<p id="create-account" >Create Account</p>
		</div>
	</div>
</section>

<script src="{{asset('file/js/jquery.js')}}" ></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$('#register-section').hide();

	$('#create-account').click(function(){
		$('#register-section').show();
		$('#login-section').hide();
	});
	
	$('#log-in').click(function(){
		$('#register-section').hide();
		$('#login-section').show();
	});
	
	
	$('#password-eye').on('click', function(e) {
		if($(this).is(':checked',true))  
		{
			
			$('#password').attr('type', 'text');  
		} else {  
			$(".password").prop('checked',false);  
		}  
	 });	
	
	
	
	
});
</script>

@endsection
