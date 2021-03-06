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
		$now = strtotime(date('Y-m-d')); // Today in UNIX Timestamp
		$birthday = strtotime($dob); // Birthday in UNIX Timestamp
		$age = $now - $birthday; // As the UNIX Timestamp is in seconds, get the seconds you lived
		$age = $age / 60 / 60 / 24 / 365; // Convert seconds to years
		$finalAge=floor($age); 
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
			$insertPatientData = mysql_query("INSERT INTO `patientdata` (`lastName`,`givenName`,`middleName`,`address`,`cpNo`,`dob`,`age`,`nationality`,`religion`,`occupation`,`husbandName`,`husbandAge`,`husbandNationality`,`husbandReligion`,`husbandOccupation`,`informatName`,`relationToPatient`,`informantAddress`,`informatCpNo`,`status`) VALUES ('$lastName','$givenName','$middleName','$address','$cpNum','$dob','$finalAge','$nationality','$religion','$occupation','$husbandName','$husbandAge','$husbandNationality','$husbandReligion','$husbandOccupation','$informantName','$informatRelation','$informantAddress','$informantCpNum','1')");
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
					echo "SUCCESS";
				}else{
					echo "error kay admitting details";
				}
				
			}
			
		}
	}
	
	
	
	
	
	
	if(isset($_POST['visitDate'])){
		//echo "<pre>",print_r($_POST),"</pre>";
		$lmpMaternal = $_POST['lmpMaternal'];
		$edcMaternal = $_POST['edcMaternal'];
		$ooBp = $_POST['ooBp'];
		$ooTemp = $_POST['ooTemp'];
		$ooWeight = $_POST['ooWeight'];
		$ooHeent = $_POST['ooHeent'];
		$ooBreast = $_POST['ooBreast'];
		$ooChestHeart = $_POST['ooChestHeart'];
		$ooAbdomen = $_POST['ooAbdomen'];
		$ooFundicHeight = $_POST['ooFundicHeight'];
		$ooAog = $_POST['ooAog'];
		$ooFetal = $_POST['ooFetal'];
		$ooLoc = $_POST['ooLoc'];
		$ooL1 = $_POST['ooL1'];
		$ooL3 = $_POST['ooL3'];
		$ooL2 = $_POST['ooL2'];
		$ooL4 = $_POST['ooL4'];
		$ooUrineAct = $_POST['ooUrineAct'];
		$ooPerinerum = $_POST['ooPerinerum'];
		$ooVaricosities = $_POST['ooVaricosities'];
		$ooWartsEcs = $_POST['ooWartsEcs'];
		$visitDate = $_POST['visitDate'];
		$visitTime = $_POST['visitTime'];
		$subjectiveObservation = $_POST['subjectiveObservation'];
		$specPurulent = $_POST['specPurulent'];
		$specWatery = $_POST['specWatery'];
		$specBleeding = $_POST['specBleeding'];
		$specOthers = $_POST['specOthers'];
		$specCervicalDil = $_POST['specCervicalDil'];
		$specPresenting = $_POST['specPresenting'];
		$specBow = $_POST['specBow'];
		$specUti = $_POST['specUti'];
		$patientId = $_POST['patientId'];
		$admitId=getAdmittingLastId($patientId);
		$check = mysql_num_rows(mysql_query("SELECT * FROM `maternalvisits` WHERE `dateOfVisit`='$visitDate' AND `timeOfVisit`='$visitTime' AND `patientId`='$patientId' AND `admittingDetailsId`='$admitId'"));
		if($check > 0){
			echo "DUPLICATE";
		}else{
			$insertMaternalVisit = mysql_query("INSERT INTO `maternalvisits` (`dateOfVisit`,`timeOfVisit`,`patientId`,`admittingDetailsId`) VALUES ('$visitDate','$visitTime','$patientId','$admitId')");
			if($insertMaternalVisit){
				$lastMaternalVisit = getLastMaternalVisit($admitId,$patientId);
				$insertObjectiveObservation = mysql_query("INSERT INTO `objectiveobservation` (`bp`,`temp`,`weight`,`heent`,`breast`,`chestheart`,`abdomen`,`fundicHeight`,`aog`,`fetal`,`loc`,`l1`,`l2`,`l3`,`l4`,`urineAct`,`perinerum`,`varicosities`,`warts`,`patientId`,`visitId`,`admitId`) VALUES ('$ooBp','$ooTemp','$ooWeight','$ooHeent','$ooBreast','$ooChestHeart','$ooAbdomen','$ooFundicHeight','$ooAog','$ooFetal','$ooLoc','$ooL1','$ooL2','$ooL3','$ooL4','$ooUrineAct','$ooPerinerum','$ooVaricosities','$ooWartsEcs','$patientId','$lastMaternalVisit','$admitId')");
				$insertSubjectiveObservation = mysql_query("INSERT INTO `subjectiveobservation` (`observation`,`patientId`,`visitId`,`admitId`) VALUES ('$subjectiveObservation','$patientId','$lastMaternalVisit','$admitId')");
				$insertSpeculumExamination = mysql_query("INSERT INTO `speculumexam` (`purulent`,`watery`,`bleeding`,`others`,`patientId`,`visitId`,`admitId`) VALUES ('$specPurulent','$specWatery','$specBleeding','$specOthers','$patientId','$lastMaternalVisit','$admitId')");
				$insertInternalExam = mysql_query("INSERT INTO `internalexam` (`cervical`,`presenting`,`bow`,`uti`,`patientId`,`visitId`,`admitId`) VALUES ('$specCervicalDil','$specPresenting','$specBow','$specUti','$patientId','$lastMaternalVisit','$admitId')");
				
				if($insertObjectiveObservation && $insertSubjectiveObservation && $insertSpeculumExamination && $insertInternalExam){
					echo "SUCCESS";
				}else{
					echo mysql_error();
				}
			}
		}
	}
	
	
	
	
	if(isset($_POST['medType'])){
		//echo "<pre>",print_r($_POST),"</pre>";
		$medType = $_POST['medType'];
		$medShift = $_POST['medShift'];
		$medDate = $_POST['medDate'];
		$medication = $_POST['medication'];
		$medPatientId = $_POST['medPatientId'];
		$medAdmitId = $_POST['medAdmitId'];
		
		//$check = mysql_num_rows(mysql_query("SELECT * FROM `medications` WHERE `medicationDate`='$medDate' AND `medicationType`='$'"))
		$insertMedication = mysql_query("INSERT INTO `medications` (`medication`,`medicationType`,`medicationDate`,`shift`,`admitId`,`patientId`) VALUES ('$medication','$medType','$medDate','$medShift','$medAdmitId','$medPatientId')");
		if($insertMedication){
			echo "SUCCESS";
		}else{
			echo mysql_error();
		}
	}
	
	
	
	
	
	
	
	if(isset($_POST['getShiftsType'])){
		//print_r($_POST);
		$getShiftsType = $_POST['getShiftsType'];
		$readingDateTpr = $_POST['readingDateTpr'];
		$type = $_POST['typeShift'];
		$patientId = $_POST['patientIdTpr'];
		$tprShiftArr = array("12AM","4AM","8AM","12PM","4PM","8PM");
		$bpusShifArr = array("6AM-6PM","6PM-6AM");
		if($getShiftsType == 'BP' || $getShiftsType == 'S' || $getShiftsType == 'U'){
			//echo "BPUS";
			//check tprSheet table if data is 
			$sql = mysql_query("SELECT * FROM `bpus` WHERE `dateOfReading`='$readingDateTpr' AND `patientId`='$patientId' AND `tprType`='$getShiftsType' AND `type`='$type'");
			$num = mysql_num_rows($sql);
			
			if($num > 0){
				while($row = mysql_fetch_assoc($sql)){
					$shift[] = $row['shift'];
				}
				$diff =array_diff($bpusShifArr,$shift);
				$count = count($diff);
				if($count > 0){
					echo "<label>Select Shift</label>";
					echo "<select class='w3-input w3-border' name='tprShifts' id='tprShifts' required>";
					foreach($diff as $key=>$value){
							echo "<option>".$value."</option>";
					}
					echo "</select>";
				}else{
					echo "<label>Select Shift</label>";
						echo "<select class='w3-input w3-border' required>";
							echo "<option value='' selected disabled>Shifts already occupied</option>";
						echo "</select>";
				}
			}else{
				echo "<label>Select Shift:</label>";
					echo "<select class='w3-input w3-border' name='tprShifts' id='tprShifts' required>";
						echo "<option>6AM-6PM</option>";
						echo "<option>6PM-6AM</option>";
					echo "</select>";
			}
			
			
		}else{
			$sql = mysql_query("SELECT * FROM `rpt` WHERE `dateOfReading`='$readingDateTpr' AND `patientId`='$patientId' AND `tprType`='$getShiftsType' AND `type`='$type'");
			$num = mysql_num_rows($sql);
			if($num > 0){
				while($row = mysql_fetch_assoc($sql)){
					$shift[] = $row['shift'];
				}
				$diff =array_diff($tprShiftArr,$shift);
				$count = count($diff);
				if($count > 0){
					echo "<label>Select Shift</label>";
					echo "<select class='w3-input w3-border'  name='tprShifts' id='tprShifts'  required>";
					foreach($diff as $key=>$value){
						echo "<option>".$value."</option>";
					}
					echo "</select>";
				}else{
					echo "<label>Select Shift</label>";
						echo "<select class='w3-input w3-border' required>";
							echo "<option value='' selected disabled>Shifts already occupied</option>";
						echo "</select>";
				}
				
			}else{
				echo "<label>Select Shift:</label>";
					
					echo "<select class='w3-input w3-border'  name='tprShifts' id='tprShifts'>";
					foreach($tprShiftArr as $key => $value){
						echo "<option>".$value."</option>";
					}
					echo "</select>";
			}
		}
		echo "<label>Reading:</label>";
		echo "<input type='text' class='w3-input w3-border' name='readingTpr' id='readingTpr' required />";
		$checkTpr = mysql_query("SELECT * FROM `tpr` WHERE `dateOfReading`='$readingDateTpr' AND `patientId`='$patientId' AND `type`='$type'");
		$tprNum = mysql_num_rows($checkTpr);
		if($tprNum > 0){
			
		}else{
			echo "<label>Weight:</label>";
			echo "<input type='text' class='w3-input w3-border' name='tprWeight' id='tprWeight' required />";
			echo "<label>Height:</label>";
			echo "<input type='text' class='w3-input w3-border' name='tprHeight' id='tprHeight' required />";
		}
	}
	
	
	
	
	if(isset($_POST['tprType'])){
		$type = $_POST['tprType'];
		$patientId = $_POST['patientId'];
		$admitId = $_POST['admitId'];
		$readingDate = $_POST['readingDate'];
		$tprShifts = $_POST['tprShifts'];
		$readingTpr = $_POST['readingTpr'];
		$tprWeight = $_POST['tprWeight'];
		$tprHeight = $_POST['tprHeight'];
		$type1 = $_POST['type'];
		$checkTpr = mysql_query("SELECT * FROM `tpr` WHERE `dateOfReading`='$readingDate' AND `patientId`='$patientId' AND `type`='$type1'");
		$numTpr = mysql_num_rows($checkTpr);
		
		if($numTpr>0){
			
		}else{
			$insertTpr = mysql_query("INSERT INTO `tpr` (`dateOfReading`,`weight`,`height`,`patientId`,`admitId`,`type`) VALUES ('$readingDate','$tprWeight','$tprHeight','$patientId','$admitId','$type1')");
		}
		//$insertBpus = mysql_query("INSERT INTO ``")
		if($type == 'BP' || $type == 'S' || $type == 'U'){
			$insertBpus = mysql_query("INSERT INTO `bpus` (`tprType`,`reading`,`shift`,`dateOfReading`,`patientId`,`admitId`,`type`) VALUES ('$type','$readingTpr','$tprShifts','$readingDate','$patientId','$admitId','$type1')");
			if($insertBpus){
				echo "SUCCESS";
			}else{
				echo mysql_error();
			}
		}else{
			$inserRtp = mysql_query("INSERT INTO `rpt` (`tprType`,`reading`,`shift`,`dateOfReading`,`patientId`,`admitId`,`type`) VALUES ('$type','$readingTpr','$tprShifts','$readingDate','$patientId','$admitId','$type1')");
			if($inserRtp){
				echo "SUCCESS";
			}else{
				echo mysql_error();
			}
		}
	}
	
	
	
	if(isset($_POST['patientIdNursery'])){
		//echo "<pre>",print_r($_POST),"</pre>";
		$babyName = $_POST['babyName'];
		$babySex = $_POST['babySex'];
		$babyDob = $_POST['babyDob'];
		$timeOb = $_POST['timeOb'];
		$babyWeight = $_POST['babyWeight'];
		$babyLength = $_POST['babyLength'];
		$babyHc = $_POST['babyHc'];
		$babyCc = $_POST['babyCc'];
		$babyAc = $_POST['babyAc'];
		$babyMac = $_POST['babyMac'];
		$babyMother = $_POST['babyMother'];
		$babyMotherAdd = $_POST['babyMotherAdd'];
		$babyLmp = $_POST['babyLmp'];
		$babyAog = $_POST['babyAog'];
		$babyGravida = $_POST['babyGravida'];
		$babyPara = $_POST['babyPara'];
		$babyFullTerm = $_POST['babyFullTerm'];
		$babyPremature = $_POST['babyPremature'];
		$babyAbortion = $_POST['babyAbortion'];
		$babyNoChild = $_POST['babyNoChild'];
		$babyPreNatal = $_POST['babyPreNatal'];
		$babyWhere = $_POST['babyWhere'];
		$babyDrugsPreg = $_POST['babyDrugsPreg'];
		$babyLabor = $_POST['babyLabor'];
		$babyDurgsLabor = $_POST['babyDurgsLabor'];
		$babySpontaneousOnset = $_POST['babySpontaneousOnset'];
		$babyInduced = $_POST['babyInduced'];
		$babyMembraneRupture = $_POST['babyMembraneRupture'];
		$babyAmniotocClear = $_POST['babyAmniotocClear'];
		$babyAmniotocNotClear = $_POST['babyAmniotocNotClear'];
		$babyDeliveryType = $_POST['babyDeliveryType'];
		$babyDeliveryPresentation = $_POST['babyDeliveryPresentation'];
		$babyDeliveryComplication = $_POST['babyDeliveryComplication'];
		$babyApgar1min = $_POST['babyApgar1min'];
		$babyApgar5min = $_POST['babyApgar5min'];
		$babyAttendingPhysician = $_POST['babyAttendingPhysician'];
		$patientIdNursery = $_POST['patientIdNursery'];
		$lastAdmittingNursery = $_POST['lastAdmittingNursery'];
		$insertNursery = mysql_query("INSERT INTO `nurserychart` (`babyName`,`babySex`,`babyDob`,`timeOb`,`babyWeight`,`babyLength`,`babyHc`,`babyCc`,`babyAc`,`babyMac`,`babyMother`,`babyMotherAdd`,`babyLmp`,`babyAog`,`babyGravida`,`babyPara`,`babyFullTerm`,`babyPremature`,`babyAbortion`,`babyNoChild`,`babyPrenatal`,`babyWhere`,`babyDrugsPreg`,`babyLabor`,`babyDrugsLabor`,`babySpontaneousOnset`,`babyInduced`,`babyMembraneRupture`,`babyAmniotocClear`,`babyAmniotocNotClear`,`babyDeliveryType`,`babyDeliveryPresentation`,`babyDeliveryComplication`,`babyApgar1min`,`babyApgar5min`,`babyAttendingPhysician`,`patinetId`,`admitId`) VALUES ('$babyName','$babySex','$babyDob','$timeOb','$babyWeight','$babyLength','$babyHc','$babyCc','$babyAc','$babyMac','$babyMother','$babyMotherAdd','$babyLmp','$babyAog','$babyGravida','$babyPara','$babyFullTerm','$babyPremature','$babyAbortion','$babyNoChild','$babyPreNatal','$babyWhere','$babyDrugsPreg','$babyLabor','$babyDrugsLabor','$babySpontaneousOnset','$babyInduced','$babyMembraneRupture','$babyAmniotocClear','$babyAmniotocNotClear','$babyDeliveryType','$babyDeliveryPresentation','$babyDeliveryComplication','$babyApgar1min','$babyApgar5min','$babyAttendingPhysician','$patientIdNursery','$lastAdmittingNursery')");
		if($insertNursery){
			echo "SUCCESS";
		}else{
			echo mysql_error();
		}
		
	}
	
	
	
	//print_r($_POST);
	if(isset($_POST['doctorOrderdatetime'])){
		$type = $_POST['tprType'];
		$doctorOrderdatetime = $_POST['doctorOrderdatetime'];
		$docOrders = $_POST['docOrders'];
		$patientId = $_POST['patientId'];
		$admitId = $_POST['admitId'];
		
		$insert = mysql_query("INSERT INTO `doctorsOrder` (`patientId`,`admittingId`,`dateTime`,`type`,`orders`) VALUES ('$patientId','$admitId','$doctorOrderdatetime','$type','$docOrders')");
		if($insert){
			echo "SUCCESS";
		}else{
			echo mysql_error();
		}
	}
	
	
	
	if(isset($_POST['readmission'])){
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
				$lastId = $_POST['readmission'];
				$update = mysql_query("UPDATE `patientdata` SET `status`='1' WHERE `id`='$lastId'");
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
					echo "SUCCESS";
				}else{
					echo "error kay admitting details";
				}
		
	}
?>