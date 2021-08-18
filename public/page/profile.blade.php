
				
				<div class="profile-section">
					<div class="profile-pic">
						<img src="../image/self/user.jpg" for="profile-pic-uplode" alt="" />
						
						<input  type="hidden" id="profile-pic-uplode" class="profile-pic-uplode" />
					</div>
					<div class="profile-user"><span id="profile-name" ></span>
					</div>
					<div class="profile-req">
						
						<input type="hidden" value=""/>
						<input type="submit" value="Add Contacts" class="add-contact" />
						
						<button class="ti-comment-alt msg-link-btn"></button>
						
						<button class="ti-pencil-alt msg-link-btn"></button>
						
						<button class="ti-link msg-link-btn"></button>
						
					</div>
					<hr style="width: 90%;
    margin: auto;
    border: 0.1px solid #ddd;" />
					<div id="profile-bio" class="bio">
						<p>This is bio section here people can write his own bio .so that , others people known that who is he </p>
					</div>
					<div class="profile-info">
						<ul>
							<li>Live In <b id="profile-address"> </b></li>
							<li>Gender <b id="profile-gender" ></b></li>
							<li>Profile Link <b id="profile-link" ></b></li>
						</ul>
					</div>
				</div>

<script >

	/* $.ajax({
		
		url:'userdata',
		success: function( data ){
			console.log(data);
		},
		error: function(xhr, status, error){
			console.log(xhr);
			console.log(status);
		},
	});	
	 */
	 
		var pathname=$(location).attr('pathname');		 
		var username=pathname.replace("/","");
				 //alert(username);
		$.get('/userdata?username=' + username,function(data){
			
           console.log(data);
          $.each(data, function(index, userinfo){
 
		   $('#profile-name').html(data.firstName+' '+data.lastName);
		   $('#profile-bio').html(' '+data.bio);
		   $('#profile-address').html(' '+data.address);
		   $('#profile-gender').html(' '+data.gender);
		   $('#profile-link').html(' '+$(location).attr('href'));
		   
          });

		   
		});


		
</script>



				
				
