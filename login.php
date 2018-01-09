<?php
	require_once("include/dbcon.php");
	
	if(isset($_POST['lyingUser'])){
		$us = $_POST['lyingUser'];
		$pw = $_POST['lyingPw'];
		
		$sql = mysql_query("SELECT * FROM `users` WHERE `username`='$us' AND `password`='$pw'");
		$nums= mysql_num_rows($sql);
		if($nums > 0){
			while($row = mysql_fetch_assoc($sql)){
				$_SESSION['loggedIn'] = $row['id'];
				$_SESSION['accountType'] = $row['userType'];
				echo $row['userType'];
			}
		}else{
			echo "ERROR";
		}
	}

?>