<?php
	session_start();
	date_default_timezone_set("Asia/Manila");
	$db = 'lying';//database variable initialization and assignment
	$link = mysql_connect('localhost','root','');//link to connect with the server
	$db_connection = mysql_select_db($db,$link);//database selection to connect with
	date_default_timezone_set('Asia/Manila');
	/*
	if($db_connection){ //if this is true code inside the curly braces will execute else code inside the else block will execute
		echo "connected";
	}else{
		echo "not connected";
	}*/
	
	function getUserType($x){
		switch($x){
			case 1:break;
			case 2: $usertype = "Research Professor";return $usertype;
			case 3: $usertype = "Panel";return $usertype;
			case 4: $usertype = "Adviser";return $usertype;
			default:$usertype = "Unknown";return $usertype;
		}
	}
	
	
	
	
	function getLastId($x){
		$sql =mysql_query("SELECT * FROM `".$x."` ORDER BY `id` DESC LIMIT 1");
		while($row = mysql_fetch_assoc($sql)){
			return $row['id'];
		}
	}
	
	
	
	
	function getStatus($x){
		$re = "";
		switch($x){
			case 1 : $re = "Admitted";
				return $re;
				break;
			case 2 : $re = "Discharged";
				return $re;
				break;
			default: $re = "Unknown";
				return $re;
				break;
		}
	}
	
	
	
	
	function getAdmittingLastId($x){
		$sql = mysql_query("SELECT * FROM `admittingdetails` WHERE `patientId`='$x' ORDER BY `id` DESC LIMIT 1");
		while($row = mysql_fetch_assoc($sql)){
			return $row['id'];
		}
	}
	
	
	function getLastMaternalVisit($x,$y){
		$sql = mysql_query("SELECT * FROM `maternalvisits` WHERE `admittingDetailsId`='$x' AND `patientId`='$y' ORDER BY `id` DESC LIMIT 1");
		while($row = mysql_fetch_assoc($sql)){
			return $row['id'];
		}
	}
?>