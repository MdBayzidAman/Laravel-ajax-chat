


<div class="mobile-setting">
	<div id="setting-close" class="close">
		<i class="ti-close"></i>
	</div>
	<br />
	<ul class="setting-nave-ul" >					
		<li class="" id="setting">
			<i class="ti-settings"></i>
			<span>Setting</span>
			<br />
			<br />
			<ul class="">
				<li><a href="/logout">LogIn Another Account</a></li>
				<li><a href="/forget">Forget Password</a></li>
				<li><a href="/logout">Logout</a></li>
			</ul>
		</li>
	</ul>
</div>

<footer class="" >
	<div class="icons">
		<i onclick="massgeFunction()" class="ti-comment-alt"></i>
		<i onclick="profileFunction()" class="ti-user"></i>
		<i id="setting-icon" class="ti-settings"></i>
	</div>
</footer>

<script type="text/javascript">
	$('#setting-icon').click(function(){
		$('.mobile-setting').show();
	});
	$('#setting-close').click(function(){
		$('.mobile-setting').animate({
			width: 'toggle',
		},300);
	})
</script>


	<script src="{{asset('file/js/jquery.js')}}" ></script>

	<script src="{{asset('file/js/function.js')}}" type="text/javascript"></script>

</body>
</html>