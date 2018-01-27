function addNewUserFromAdmin(){
	var fname = $('#f_name').val();
	var lname = $('#l_name').val();
	var mname = $('#m_name').val();
	var username = $('#user_name').val();
	var usertype = $('#user_type').val();
	var password = $('#user_pw').val();
	var password_c = $('#user_pw_c').val();
	
	if(password != password_c){
		alert('Password not match!');
	}else{
		$.ajax({
			url:'adminProcess.php',
			type:'post',
			cache:false,
			data:'fname='+fname+'&lname='+lname+'&mname='+mname+'&username='+username+'&usertype='+usertype+'&password='+password+'&addFromAdmin=true',
			beforeSend:function(){
				console.log("Adding");
			},
			success:function(data){
				console.log(data);
			}
		});
	}
}




function saveUser(x){
	var data = $("#saveUser_"+x).serializeArray();
	$.ajax({
		url:'adminProcess.php',
		type:'post',
		data:data,
		success:function(data){
			console.log(data);
			if(data == "SUCCESS"){
				alert("Information Saved!");
				window.location.reload();
			}else{
				alert("Information not saved! try again later");
			}
		}
	});
}




function addUser(){
	var data1 = $('#addNewUserForm').serializeArray();
	$.ajax({
		url:'adminProcess.php',
		type:'post',
		data:data1,
		success:function(data){
			console.log(data);
			if(data == "SUCCESS"){
				alert("User Added!");
				window.location.reload();
			}else{
				alert("User not added!");
			}
		}
	});
}


function deleteUser(x){
	var id = x;
	$.ajax({
		url:'adminProcess.php',
		type:'post',
		data:'toDelUser='+id,
		success:function(data){
			console.log(data);
			if(data == "SUCCESS"){
				alert("User Deleted!");
				window.location.reload();
			}else{
				alert("Cannot delete user!");
			}
		}
	})
}