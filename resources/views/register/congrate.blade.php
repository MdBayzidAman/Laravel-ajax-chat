<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>ChatApplication Verification Code</title>
	
	<style type="text/css">
		*{
			padding:0;
			margin:0;
			color: #2b2b2b;
			font-family: system-ui;
		}
		.main-section{
			width: 450px;
			background: #ffffff;
			border-radius: 13px;
			border: 1px solid #eaeaea;
			margin: auto;
			margin-top: 4%;
			padding: 40px 25px;
			padding-bottom: 50px;
			box-shadow: 0px 0px 10px 4px #e4e4e4;
		}
		
		a{text-decoration:none; color:#333;}
		.logo-section img{
			width: 40px;
			height: 40px;
			border-radius: 50%;
			margin-right:8px;
		}
		.logo-section{margin-bottom: 10px; text-align:center;}
		.logo-section a{
			height: 40px;
			display: flex;
			align-items: center;
			font-size: 25px;
			font-family: sans-serif;
			justify-content: center;
			margin:auto;
		}
		h1{
			text-align:center;
			color:#333;
			font-size:20px;
		}
		h1 span{color:#333;}
		.powerBy{
			font-size:13px;
		}
	</style>
</head>
<body>
	
<section class="main-section">
	<div class="logo-section">
		<a href="">
			<img src="{{asset('image/self/logo.png')}}" alt="" />
			<span><b>ChatApplication</b></span>
		</a>
	</div>
	<br />
	<div class="details">
		<h4>Dear {{$name}},</h4>
		<br />
		<h1><span>Congratulation</span>🎊</h1><br />
		<p>You are successfully created your account 💖</p>
		
		<p>Thank you for joing to ChatApplication. We have received your info. Spend your beautiful moments with ChatApplication 💕</p>
		
		<br />
		<p class="powerBy" ><b><a href="">- ChatApplication</a></b> By <b> <a href="">Md Bayzid Aman</a></b></p>
	</div>
	
</section>
	
</body>
</html>