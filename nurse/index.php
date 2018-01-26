<?php
	include("../include/dbcon.php");
	if(!isset($_SESSION['loggedIn'])){
		header("location:../index.php");
	}
?>

<!DOCTYPE html>
<html>
<title>Nurse</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../images/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" type="text/css" href="../google/fafa.css">
<link href="../dist/css/select2.min.css" rel="stylesheet" />
<link href='../css/fullcalendar.min.css' rel='stylesheet' />
<link href='../css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link href='../css/dataTables.jqueryui.min.css' rel='stylesheet'/>
<link href='../css/jquery-ui.css' rel='stylesheet'  />
<link rel="stylesheet" href="../css/w3.css">
<script src='../js/moment.min.js'></script>
<script src='../js/jquery.min.js'></script>
<script src='../js/fullcalendar.min.js'></script>
<script src='../js/datatables.min.js'></script>
<script src='../js/dataTables.jqueryui.min.js'></script>
<link rel="stylesheet" href="../js/bootstrap.min.css" />
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link href="summernote.css" rel="stylesheet">
<script src="summernote.min.js"></script>
<script src="../js/selectize.js"></script>
<script src="../js/index.js"></script>
<script type="text/javascript" src="../js/jquery.simple-dtpicker.js"></script>
<link type="text/css" href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

#calendar {
	max-width:95%;
	margin: 0 auto;
}
.fc-widget-header{
	font-size:1.1em !important;
}
.fc-day-number{
	font-size:1.1em !important;
}
.main-item{
	border-right:1px solid #909090 !important;
	margin: 8px 0px;
}
.main-item:last-child{
	border-right:0px solid #909090 !important;
	margin: 8px 0px;
}
</style>
<body class="w3-light-grey">
<div class="w3-top" style="z-index:99999;">
  <div class="w3-row w3-amber w3-padding-4">
    <div class="w3-quarter" style="margin:4px 0 6px 0"><a href='javascript:void(0);'><img src='../images/loooogo.png' width="80" class="w3-circle" style="border:2px solid white;position:absolute;left:90px" alt='Pantao Hospital'></a></div>
    <div class="w3-rest w3-margin-top w3-wide w3-hide-medium w3-hide-small"><div class="w3-right w3-animate-right"><span class="fa fa-ambulance fa-2x"></span><b>Lying In:</b> <span>Record Management System</span></div></div>
  </div>
<div class="w3-bar w3-amber" style="z-index:4;padding-left:270px;border-top:2px solid white;text-style:none;color:green;">
  <a href="index.php" class="w3-bar-item main-item w3-button w3-hover-none w3-hover-text-white "><i class="fa fa-home fa-fx"></i> Home</a>
  <div class="w3-dropdown-hover w3-bar-item w3-button main-item w3-hover-none w3-hover-text-white"><i class="fa fa-users fa-fx"></i> Patient Management <i class="fa fa-caret-down fa-fx"></i>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="?newPatient=true" class="w3-bar-item w3-button"><i class="fa fa-user fa-fx"></i> New Patient</a>
        <a href="?listPatient=true" class="w3-bar-item w3-button"><i class="fa fa-list-ul fa-fx"></i> List of Patient</a>
      </div>
    </div>
  <a href="?" class="w3-bar-item w3-button main-item w3-hover-none  w3-hover-text-white"><i class="fa fa-sign-out fa-fx"></i> Logout</a>
</div>
</div>


<!-- Nurses Forms --->
<div class="w3-container" style="margin-left:0px;margin-top:7%;">

	<div class="w3-container">
		<div class="w3-white" id="calendar_container"  style="margin-top:2%;padding-bottom:20px;border:1px solid #ddd">
			<?php if(isset($_GET['newPatient'])){
					require('newPatient.php');
				}else if(isset($_GET['listPatient'])){
					require('listPatient.php');
				}else if(isset($_GET['maternalRecord'])){
					require("maternalRecord.php");
				}else if(isset($_GET['medication'])){
					require("medication.php");
				}else if(isset($_GET['tpr'])){
					require("tpr.php");
				}else if(isset($_GET['nursery'])){
					require("nursery.php");
				}?>
		</div>
	</div>
  <!-- Header -->
  <!-- End page content -->
</div>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" ></script>  
<script type="text/javascript" src="../js/actions.js"></script>
<script type="text/javascript" src="nurseActions.js"></script>
<script src="../dist/js/select2.min.js"></script>
<script>

</script>

</body>
</html>
