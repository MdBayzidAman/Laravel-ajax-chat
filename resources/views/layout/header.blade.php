<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" initial-scale="1", shrink-to-fit="no" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{csrf_token()}}"  />
	
	
	<title> @yield('title') | Chat Application</title>
	
	
	<link rel="stylesheet" href="{{asset('file/css/style.css')}}" />
	<link rel="stylesheet" href="{{asset('file/css/grid.css')}}" />
	<link rel="stylesheet" href="{{asset('file/css/themify-icons.css')}}" />
	
		
	<script src="{{asset('file/js/jquery.js')}}" ></script>

	
	<style type="text/css">
		@yield('style')
	</style>
</head>
<body>
	
