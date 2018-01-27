<?php
	require("../include/dbcon.php");
	$patientId = $_GET['token'];
	$lastAdmitting = getAdmittingLastId($patientId);
	$sql = mysql_query("SELECT * FROM `patientdata` WHERE `id`='$patientId'");
	while($row = mysql_fetch_assoc($sql)){
		$fullName = ucwords($row['givenName'].' '.$row['middleName'].' '.$row['lastName']);
		$address = $row['address'];
		$age = $row['age'];
		$lastName = $row['lastName'];
		$givenName = $row['givenName'];
		$middleName = $row['middleName'];
	$now = getDate();
	//print_r($now);
	}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Patient Data</title>
</head>

<body style="max-width:800px;" onload="window.print();">

<img src="../images/loooogo.png" width="100" style="position:absolute;" />
<div style="margin-left:120px;">
<h3>ACEL BIRTHING HOME</h3>
<h4>Zone 1, Mabini St. Tinago, Ligao City, Philippines<br />Tel. No.: 09176392508/09399354645 </h4>
</div>
<hr />
<br />
<p style="float:right">CASE NUMBER: ____________________</p>
 <br /><br />
 <center><h3 style="text-decoration:underline;">PATIENT DATA</h3></center>
<br /><br />
<p>PATIENT NAME:<span style="border-bottom:1px solid black;width:90%"> <span style="margin-left:70px;"><?php echo ucfirst($lastName)?></span><span style="margin-left:150px;"><?php echo ucfirst($givenName)?></span><span style="margin-left:150px;margin-right:100px;"><?php echo ucfirst($middleName)?></span></span></p>
<p><span style="margin-left:200px;">LAST</span><span style="margin-left:110px;">GIVEN</span><span style="margin-left:150px;">MIDDLE</span></p>
<p>ADDRESS: <span style=" display: inline-block;min-width:637px;border-bottom:1px solid black"><?php echo ucfirst($address);?></span></p>
<br /><br />
<center><h3>CLINICAL LABORATORY RESULT</h3></center>
<p>Kindly attached laboratory result here.</p>
</body>
</html>