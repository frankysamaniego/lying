<?php
	require("../include/dbcon.php");
	$patientId = $_GET['token'];
	$lastAdmitting = getAdmittingLastId($patientId);
	$sql = mysql_query("SELECT * FROM `patientdata` WHERE `id`='$patientId'");
	while($row = mysql_fetch_assoc($sql)){
		$fullName = ucwords($row['givenName'].' '.$row['middleName'].' '.$row['lastName']);
		$address = $row['address'];
		$age = $row['age'];
	
	$now = getDate();
	//print_r($now);
	}
?>
<body onload="window.print()">
<img src="../images/loooogo.png" width="100" style="position:absolute;" />
<div style="margin-left:120px;">
<h3>ACEL BIRTHING HOME</h3>
<h4>Zone 1, Mabini St. Tinago, Ligao City, Philippines<br />Tel. No.: 09176392508/09399354645 </h4>
</div>
<hr />
<br /><br />
<center><h2 >KASUNDUAN SA PAGPAPASUSO</h2></center>
<br />

<p style="padding:0% 5%">Ako si <span class="" style="text-decoration:underline;width:200px;"><?php echo  $fullName?></span>, <span class="" style="text-decoration:underline;width:200px;"><?php echo  $age?></span> Taong Gulang Naninirahan sa <span class="" style="text-decoration:underline;width:200px;"><?php echo  $address?></span>, Ipinapaalam ko na ang aking panganganak sa Acel Birthing Home ay aking kagustuhan at walang sino man ang pumilit sa akin na ako ay dito manganak. Pinapahintolot ko sa mga medical staff ang pangangalaga sa akin at sa aking sanggol.</p>
<p style="padding:0% 5%">Bilang patunay pinipirmahan ko ang papel na ito ngayong <span class="" style="text-decoration:underline"><?php echo date('F',$now[0]);?></span> araw ng <span class="" style="text-decoration:underline"><?php echo date('j',$now[0]);?></span>, 20<span class="" style="text-decoration:underline"><?php echo date('y',$now[0]);?></span>.</p>
<br /><br />
<p style="padding:0% 5%">
LAGDA:
<p style="padding:0% 5%">_________________________</p>
<p style="padding:0% 5%">PASYENTE</p>
<br /><br />
<p style="padding:0% 5%">KAMAGANAK:<br /><br /></p>
<p style="padding:0% 5%">_________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_________________________</p></p>
</body>