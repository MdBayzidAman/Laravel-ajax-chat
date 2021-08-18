
				
				<div class="profile-section">
					<div class="profile-pic">
						<img src="../image/self/user.jpg" for="profile-pic-uplode" alt="" />
						
						<input  type="hidden" id="profile-pic-uplode" class="profile-pic-uplode" />
					</div>
					<div class="profile-user"><span id="name" ></span>
					</div>
					<div class="profile-req">
						
						<input type="hidden" value=""/>
						<input type="submit" value="Add Contacts" class="add-contact" />
						
						<button class="ti-comment-alt msg-link-btn"></button>
						<button class="ti-link msg-link-btn"></button>
						
					</div>
					<hr style="width: 90%;
    margin: auto;
    border: 0.1px solid #ddd;" />
					<div class="bio">
						<p>This is bio section here people can write his own bio .so that , others people known that who is he </p>
					</div>
					<div class="profile-info">
						<ul>
							<li>Live In <b>Dhaka</b></li>
							<li>Gender <b id="loged-user-gender" >Male</b></li>
							<li>Profile Link <b>facebook.com</b></li>
						</ul>
					</div>
					
				</div>
<script src="../file/js/jquery.js" ></script>

<script >

	$.ajax({
		
		url:'/userdata',
		success: function( data ){
			console.log(data);
		},
		error: function(xhr, status, error){
			console.log(xhr);
			console.log(status);
		},
	});	
	
/* 	var partys="sdf";
       $.get('/userdata?partys='+ partys,function(data){
           console.log(data);
		}); */
 			
</script>
				
<script type="text/javascript">
				
/* 				 var pathname=$(location).attr('pathname');
				 
				 
				 var username=pathname.replace("/","");
 */				 //alert(username);
/*                  $.get('/userData?username=' + username,function(data){
                        console.log(data);
						
					$.each(data, function(index, user){
						
						$("#loged-user-name").html(data.firstName+" "+data.lastName);
						
						$("#loged-user-gender").html(data.gender);

					});
                 });
				 
 */				 
/*                     $.get('/userData',function(data){
                        console.log(data);


                    });
 */					
				 
</script>
				
