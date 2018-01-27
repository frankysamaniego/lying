<?php
	require("../include/dbcon.php");
	$patientId = $_GET['token'];
	$lastAdmitting = getAdmittingLastId($patientId);
?>
