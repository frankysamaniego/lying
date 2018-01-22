<?php
	require("../include/dbcon.php");
	if(isset($_POST['saveFromNewPatient'])){
		/*foreach($_POST as $key => $value){
			$key = $value;
		}*/
		
		//patient details
		$lastName = $_POST['lastName'];
		$givenName = $_POST['givenName'];
		$middleName = $_POST['middleName'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$cpNum = $_POST['cpNum'];
		$nationality = $_POST['nationality'];
		$religion = $_POST['religion'];
		$occupation = $_POST['occupation'];
		$husbandName = $_POST['husbandName'];
		$husbandAge = $_POST['husbandAge'];
		$husbandNationality = $_POST['husbandNationality'];
		$husbandReligion = $_POST['husbandReligion'];
		$husbandOccupation = $_POST['husbandOccupation'];
		$informantName = $_POST['informantName'];
		$informatRelation = $_POST['informatRelation'];
		$informantAddress = $_POST['informantAddress'];
		$informantCpNum = $_POST['informantCpNum'];
		//admitting details
		$admitDate = $_POST['admitDate'];
		$admitTime = $_POST['admitTime'];
		$chiefComplaint = $_POST['chiefComplaint'];//array format -- check first if array
		if(is_array($chiefComplaint)){
			$complaints = implode(', ',$chiefComplaint);
		}
		$bow = $_POST['bow'];
		$others = $_POST['others'];
		$lmp = $_POST['lmp'];
		$edc = $_POST['edc'];
		$aog = $_POST['aog'];
		$gravida = $_POST['gravida'];
		$para = $_POST['para'];
		$tpal = $_POST['tpal'];
		$pnc = $_POST['pnc'];
		$tt = $_POST['tt'];
		$postOB = $_POST['postOB'];
		$pastMedHist = $_POST['pastMedHist']; // array format -- check first if array
		$otherMedHis = $_POST['otherMedHis'];
		$phyBP = $_POST['phyBP'];
		$phyRR = $_POST['phyRR'];
		$phyPR = $_POST['phyPR'];
		$phyT = $_POST['phyT'];
		$phyHt = $_POST['phyHt'];
		$phyIE = $_POST['phyIE'];
		$phyFuHt = $_POST['phyFuHt'];
		$phyFHT = $_POST['phyFHT'];
		$admittingDiagnosis = $_POST['admittingDiagnosis'];
		$finalDiagnosis = $_POST['finalDiagnosis'];
		$finalDiagnosis = $_POST['finalDiagnosis'];
		$rapidAssesment = $_POST['rapidAssesment'];//array first -- check first if array
		$rapidAssesmentOthers1 = $_POST['rapidAssesmentOthers1'];
		$check = mysql_num_rows(mysql_query("SELECT * FROM `patientdata` WHERE `lastName`='$lastName' AND `givenName`='$givenName' AND `middleName`='$middleName'"));
		if($check > 0){
			echo "DUPLICATE";
		}else{
			$insertPatientData = mysql_query("INSERT INTO `patientdata` (`lastName`,`givenName`,`middleName`,`address`,`cpNo`,`dob`,`age`,`nationality`,`religion`,`occupation`,`husbandName`,`husbandAge`,`husbandNationality`,`husbandReligion`,`husbandOccupation`,`informatName`,`relationToPatient`,`informantAddress`,`informatCpNo`) VALUES ('$lastName','$givenName','$middleName','$address','$cpNum','$dob','$age','$nationality','$religion','$occupation','$husbandName','$husbandAge','$husbandNationality','$husbandReligion','$husbandOccupation','$informantName','$informatRelation','$informantAddress','$informantCpNum')");
			if($insertPatientData){
				$lastId = getLastId('patientdata');
				$insertAdmittingDetails = mysql_query("INSERT INTO `admittingdetails` (`dateOfAdmission`,`timeOfAdmission`,`complaint`,`bow`,`others`,`patientId`) VALUES ('$admitDate','$admitTime','$complaints','$bow','$others','$lastId')");
				if($insertAdmittingDetails){
					$admitLastId = getLastId('admittingdetails');
					$insertHistoryOfPreggy = mysql_query("INSERT INTO `historyofpregnancy` (`lmp`,`edc`,`aog`,`gravida`,`para`,`tpal`,`pnc`,`tt`,`postObHistory`,`patientId`,`admittingdetailsid`) VALUES ('$lmp','$edc','$aog','$gravida','$para','$tpal','$pnc','$tt','$postOB','$lastId','$admitLastId')");
					if($insertHistoryOfPreggy){
						$pastMedHist = $_POST['pastMedHist']; // array format -- check first if array
						$otherMedHis = $_POST['otherMedHis'];
						if(is_array($pastMedHist)){
							foreach($pastMedHist as $key => $value){
								$insertPastMedHistory = mysql_query("INSERT INTO `pastmedhistory` (`medStatus`,`patientId`,`admittingdetailsid`) VALUES ('$value','$lastId','$admitLastId')");
							}
						}
						if(!empty($otherMedHis)){
							$insertPastMedHistory = mysql_query("INSERT INTO `pastmedhistory` (`medStatus`,`patientId`,`admittingdetailsid`) VALUES ('$otherMedHis','$lastId','$admitLastId')");
						}
						$insertPhyExam = mysql_query("INSERT INTO `physicalexams` (`bp`,`rr`,`pr`,`t`,`ht`,`ie`,`fuht`,`fht`,`admittingDiagnosis`,`finalDiagnosis`,`patientId`,`admittingdetailsid`) VALUES ('$phyBP','$phyRR','$phyPR','$phyT','$phyHt','$phyIE','$phyFuHt','$phyFHT','$admittingDiagnosis','$finalDiagnosis','$lastId','$admitLastId')");
						if(is_array($rapidAssesment)){
							foreach($rapidAssesment as $j => $k){
								$insertRapidAssesment = mysql_query("INSERT INTO `rapidassesment` (`assesment`,`patientId`,`admittingdetailsid`) VALUES ('$k','$lastId','$admitLastId')");
							}
						}
						if(!empty($rapidAssesmentOthers1)){
							$insertRapidAssesment = mysql_query("INSERT INTO `rapidassesment` (`assesment`,`patientId`,`admittingdetailsid`) VALUES ('$rapidAssesmentOthers1','$lastId','$admitLastId')");
						}
					}else{
						echo "Error kay Preggy";
					}
					echo "1";
				}else{
					echo "error kay admitting details";
				}
				
			}
			
		}
		
		
	}
?>