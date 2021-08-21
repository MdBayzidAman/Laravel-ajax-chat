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
	
		<form action="/forget" method="post" >
			{{csrf_field()}}
			<br />
			<span style="font-family: system-ui;color: #292929;" ><b>Enter Email Address </b></span>
						
			<input type="email" name="email" placeholder="Enter Email" class="form-input"  required />

			<input type="submit" value="Send Verify Code" class="submit " />
		</form>
		<div class="footer-section">

			
			
		</div>

	</div>
</section>



<script src="{{asset('file/js/jquery.js')}}" ></script>

<script type="text/javascript">
$(document).ready(function(){
	

		
	
});
</script>

@endsection
