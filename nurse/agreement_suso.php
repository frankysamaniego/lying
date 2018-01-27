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

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BreastFeed Agreement</title>
</head>

<body style="max-width:800px;" onload="window.print();">

<img src="../images/loooogo.png" width="100" style="position:absolute;" />
<div style="margin-left:120px;">
<h3>ACEL BIRTHING HOME</h3>
<h4>Zone 1, Mabini St. Tinago, Ligao City, Philippines<br />Tel. No.: 09176392508/09399354645 </h4>
</div>
<hr />
<br /><br />
<center><h2 >KASUNDUAN SA PAGPAPASUSO</h2></center>
<br />

<p style="">Ako si <span style="display: inline-block;min-width:450px;border-bottom:1px solid black"><?php echo $fullName?></span>, <span style="display: inline-block;min-width:100px;border-bottom:1px solid black"><?php echo $age?></span> Taong Gulang Naninirahan sa <span style="display: inline-block;min-width:500px;border-bottom:1px solid black"><?php echo $address?></span>, bilang isang ina sa ikabubuti ng aking sanggol, sumasangayon ako sa sampung patakaran at alintuntunin nauukol sa matagumpay na pagpapasuso na kasalukuyang ipinapatupad ng CHM, MED at FPC.</p>
<br /><br />
LAGDA:<br /><br />
<p>_________________________</p>
<p>LAGDA NG INA</p>
<br /><br />
MGA SAKSI:<br /><br />
<p>_________________________</p><br />
<p>_________________________</p>

</body>
</html>