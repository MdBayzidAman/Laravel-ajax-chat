


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
		<div onclick="massgeFunction()" >
			<i class="ti-comment-alt"></i><br />
			<span>Chat</span>
		</div>
		<div onclick="profileFunction()" >
			<i class="ti-user"></i>
			<br />
			<span>Profile</span>
		</div>
		<div onclick="mobilePeopleFunction()" >
			<i class="ti-user"></i>
			<i id="people-right-icon" class="ti-user"></i>
			<br />
			<span>People</span>
		</div>
		<div>
			<i id="setting-icon" class="ti-settings"></i>
			<br />
			<span>setting</span>
		</div>
	</div>
</footer>

<script type="text/javascript">

	//	MOBILE PEOPLE FUNCTION ....
	
	function mobilePeopleFunction() {
		
		
		
		if (window.matchMedia('(max-width: 576px)').matches){
			
			$('#main-screen').css("display","none");
			//$('#people-section').css("display","block");
			$('#people-section').removeClass('md-none');
		} else {
			
		}
		
		
	};


$(document).ready(function(){
});

	
	
	
	//	MOBILE SETTING ....
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