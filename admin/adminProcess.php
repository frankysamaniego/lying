<?php
	require('../include/dbcon.php');
	
	
	if(isset($_POST['addFromAdmin'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$usertype = $_POST['usertype'];
		$d = getDate();
		$date_now = $d[0];
		
		$check = mysql_num_rows(mysql_query("SELECT * FROM `users` WHERE `username`='$username'"));
		if($check > 0){
			echo "D";
		}else{
			$insert = mysql_query("INSERT INTO `users` (`first_name`,`middle_name`,`last_name`,`username`,`password`,`user_type`,`date_added`)VALUES ('$fname','$mname','$lname','$username','$password','$usertype','$date_now')");
			if($insert){
				echo "SUCCESS";
			}else{
				echo mysql_error();
			}
		}
	}
	
	//print_r($_POST);
	if(isset($_POST['userId'])){
		$id = $_POST['userId'];
		$fullName = $_POST['editUserFullName'];
		$editUserNam = $_POST['editUserNam'];
		$editPw = $_POST['editPw'];
		
		$update = mysql_query("UPDATE `users` SET `fullName`='$fullName', `username`='$editUserNam', `password`='$editPw' WHERE `id`='$id'");
		if($update){
			echo "SUCCESS";
		}else{
			echo mysql_error();
		}
	}
?>