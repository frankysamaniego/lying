<?php
	include('redirecter.php');
?>
<!DOCTYPE html>
<html>
<title>Lying In Monitoring System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="google/fafa.css">
<link href="dist/css/select2.min.css" rel="stylesheet" />
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("images/bg.png");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-opacity">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
	<div class="w3-container" style="color:#000;text-shadow:1px 1px 3px #909090;">
		<a href="../lying" class="w3-bar-item w3-wide"><i class="fa fa-child fa-lg w3-round-xxlarge" style="padding:12px 10px;border:2px dashed black;"></i></a>
		<!-- Right-sided navbar links -->
		<div class="w3-right w3-hide-small">
		  <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> ABOUT</a>
		</div>
		<!-- Hide right-floated links on small screens and replace them with a menu icon -->

		<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
		  <i class="fa fa-bars"></i>
		</a>
	</div>
  </div>
</div>
<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-text-white" style="padding:48px">
  
    <form class="w3-container w3-card-4 w3-form" method="post" action="javascript:void(0);"  onsubmit="return loginMeNow()" style="max-width:300px;min-width:300px;">
		<div class="w3-center"><br>
			<img src="images/loooogo.png" alt="Avatar" style="width:50%" class="w3-circle w3-margin-top">
		</div>
		<p>
			<label>Username</label>
			<input class="w3-input" type="text" name="username" id="username" required>
		</p>
		<p>
			<label>Password</label>
			<input class="w3-input" type="password" name="passWord" id="passWord" required>
		</p>
		<p>
			<button class="w3-button w3-section w3-teal w3-ripple"> Log in </button>
		</p>
	</form>
  </div> 
</header>
</body>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jquery-ui.js" ></script>  
<script src="dist/js/select2.min.js"></script>
<script>

function loginMeNow(){
	var username = $('#username').val();
	var passWord = $('#passWord').val();
	
	$.ajax({
		url:'login.php',
		type:'post',
		cache:false,
		data:'lyingUser='+username+'&lyingPw='+passWord,
		beforeSend:function(){
			console.log("Logging in....");
		},
		success:function(data){
			console.log(data);
			if(data != "ERROR"){
				window.location.reload();
			}else{
				alert("User does not exists! Please try again..");
			}
		}
	});
}

</script>
</html>
