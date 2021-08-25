

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



//	MOBILE PEOPLE FUNCTION ....

function mobilePeopleFunction() {
	
	
	
	if (window.matchMedia('(max-width: 576px)').matches){
		
		$('#main-screen').css("display","none");
		//$('#people-section').css("display","block");
		$('#people-section').removeClass('md-none');
	} else {}
	
	if (window.matchMedia('(max-width: 768px)').matches){
		
		$('#main-screen').css("display","none");
		//$('#people-section').css("display","block");
		$('#people-section').removeClass('md-none');
	} else {}
	
	
	
};




//	MOBILE SETTING ....
$('#setting-icon').click(function(){
	
	$('.mobile-setting').animate({
		width: 'toggle',
	},300);
});

$('#setting-close').click(function(){
	$('.mobile-setting').animate({
		width: 'toggle',
	},300);
});





