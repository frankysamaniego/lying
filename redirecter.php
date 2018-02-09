<?php
	session_start();
	if(isset($_SESSION['accountType'])){
	if($_SESSION['accountType'] == 1){
		header("location:admin/");
	}else if($_SESSION['accountType'] == 2){
		header("location:nurse/");
	}else if($_SESSION['accountType'] == 3){
		header("location:cashier/");
	}else{
		//header("location:index.php");
	}
	}
?>