<?php
	$patientId = $_GET['token'];
	$lastAdmitting = getAdmittingLastId($patientId);
	$sql = mysql_query("SELECT * FROM `patientdata` WHERE `id`='$patientId'");
	while($row = mysql_fetch_assoc($sql)){
		$now = strtotime(date('Y-m-d')); // Today in UNIX Timestamp
		$birthday = strtotime($row['dob']); // Birthday in UNIX Timestamp
		$age = $now - $birthday; // As the UNIX Timestamp is in seconds, get the seconds you lived
		$age = $age / 60 / 60 / 24 / 365; // Convert seconds to years
		$finalAge=floor($age); 
		$motherName = ucwords($row['givenName'].' '.$row['middleName'].' '.$row['lastName']);
		$motheraddress = $row['address'];
	}
?>
<div class="w3-container">
	<h2><span class='fa fa-plus'></span> New Nursery Chart<hr/></h2>
	<div class="w3-container">
		<div class="w3-row">
			<form action="javascript:void(0);" method="post" id="nurseryForm" enctype="multipart/form-data" onsubmit="return nurseryInfoSubmit()">
				<fieldset>
					<div class="w3-container">
						<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;">
							<tr>
								<td>Name of Baby:</td>
								<td colspan="4">
									<input type="text" name="babyName" class="w3-input w3-border w3-small" id="babyName" placeholder="Full Name" required>
								</td>
								<td>Sex:</td>
								<td colspan="2">
									<input type="radio" class="w3-radio" name="babySex" id="babySex" value="M">MALE
									<input type="radio" class="w3-radio" name="babySex" id="babySex" value="F">FEMALE
								</td>
								<td>Date of Birth:</td>
								<td>
									<input type="date" name="babyDob" class="w3-input w3-border w3-small" id="babyDob" placeholder="Middle Name" required>
								</td>
								<td  style="text-align:right !important;">Time:</td>
								<td>
									<input type="time" name="timeOb" class="w3-input w3-border w3-small" id="timeOb" placeholder="" required>
								</td>
							</tr>
							<tr>
								<td>Weight:</td>
								<td>
									<input type="number" name="babyWeight" class="w3-input w3-border w3-small" id="babyWeight" placeholder="Weight" required>
								</td>
								<td>Length:</td>
								<td>
									<input type="number" name="babyLength" class="w3-input w3-border w3-small" id="babyLength" placeholder="Length" required>
								</td>
								<td>HC:</td>
								<td>
									<input type="number" name="babyHc" class="w3-input w3-border w3-small" id="babyHc" placeholder="HC" required>
								</td>
								<td>CC:</td>
								<td>
									<input type="number" name="babyCc" class="w3-input w3-border w3-small" id="babyCc" placeholder="CC" required>
								</td>
								<td>AC:</td>
								<td>
									<input type="number" name="babyAc" class="w3-input w3-border w3-small" id="babyAc" placeholder="AC" required>
								</td>
								<td>MAC:</td>
								<td>
									<input type="number" name="babyMac" class="w3-input w3-border w3-small" id="babyMac" placeholder="MAC" required>
								</td>
							</tr>
							<tr>
								<td>Name of Mother</td>
								<td colspan="5">
									<input type="text" name="babyMother" class="w3-input w3-border w3-small" id="babyMother" placeholder="Name of Mother" value="<?php echo $motherName;?>" required>
								</td>
								<td>Address</td>
								<td colspan="5">
									<input type="text" name="babyMotherAdd" class="w3-input w3-border w3-small" id="babyMotherAdd" placeholder="Address" value="<?php echo $motheraddress?>" required>
								</td>
							</tr>
							<tr>
								<td>LMP:</td>
								<td colspan="2">
									<input type="text" name="babyLmp" class="w3-input w3-border w3-small" id="babyLmp" placeholder="LMP" required>
								</td>
								<td style="text-align:right">AOG:</td>
								<td colspan="2">
									<input type="text" name="babyAog" class="w3-input w3-border w3-small" id="babyAog" placeholder="AOG" required>
								</td>
								<td style="text-align:right">G:</td>
								<td colspan="2">
									<input type="text" name="babyGravida" class="w3-input w3-border w3-small" id="babyGravida" placeholder="Gravida" required>
								</td>
								<td style="text-align:right">P:</td>
								<td colspan="2">
									<input type="text" name="babyPara" class="w3-input w3-border w3-small" id="babyPara" placeholder="Para" required>
								</td>
							</tr>
							<tr>
								<td>Long Term:</td>
								<td colspan="3">
									<input type="text" name="babyFullTerm" class="w3-input w3-border w3-small" id="babyFullTerm" placeholder="Full Term" required>
								</td>
								<td style="text-align:right">Premature:</td>
								<td colspan="3">
									<input type="text" name="babyPremature" class="w3-input w3-border w3-small" id="babyPremature" placeholder="AOG" required>
								</td>
								<td style="text-align:right">Abortion:</td>
								<td colspan="3">
									<input type="text" name="babyAbortion" class="w3-input w3-border w3-small" id="babyAbortion" placeholder="Abortion" required>
								</td>
							</tr>
							<tr>
								<td colspan="2">Number of Living Children:</td>
								<td colspan="3">
									<input type="text" name="babyNoChild" class="w3-input w3-border w3-small" id="babyNoChild" placeholder="No. of Living Child" required>
								</td>
								<td colspan="2" style="text-align:right">Pre-Natal Care:</td>
								<td colspan="" >
									<input type="radio" class="w3-radio" name="babyPreNatal" id="babySex" value="Y">Yes
									<input type="radio" class="w3-radio" name="babyPreNatal" id="babySex" value="N">No
								</td>
								<td colspan="1" style="text-align:right">Where:</td>
								<td colspan="3" >
									<input type="text" name="babyWhere" class="w3-input w3-border w3-small" id="babyWhere" placeholder="Where" required>
								</td>
							</tr>
							<tr>
								<td>Drugs during Pregnancy</td>
								<td colspan="3">
									<textarea id="babyDrugsPreg" class="admitting" name="babyDrugsPreg"> <!--<input type="date" name="babyLabor" class="w3-input w3-border w3-small" id="babyLabor" placeholder="Where" required>--></textarea>
								</td>
								<td>Labor</td>
								<td colspan="3">
									<textarea id="babyLabor" class="admitting" name="babyLabor"> <!--<input type="date" name="babyLabor" class="w3-input w3-border w3-small" id="babyLabor" placeholder="Where" required>--></textarea>
								</td>
								<td>Drugs during Labor</td>
								<td colspan="3">
									<textarea id="babyDurgsLabor" class="admitting" name="babyDurgsLabor"> <!--<input type="date" name="babyLabor" class="w3-input w3-border w3-small" id="babyLabor" placeholder="Where" required>--></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2">Spontaneous onset:</td>
								<td colspan="2">
									<input type="text" name="babySpontaneousOnset" class="w3-input w3-border w3-small" id="babySpontaneousOnset" placeholder="Spontaneous onset" required>
								</td>
								<td colspan="">Induced:</td>
								<td colspan="3">
									<input type="text" name="babyInduced" class="w3-input w3-border w3-small" id="babyInduced" placeholder="Induced" required>
								</td>
								<td rowspan="3">Membranes how ruptured:</td>
								<td colspan="3" rowspan="3">
									<textarea id="babyMembraneRupture" class="admitting" name="babyMembraneRupture"> <!--<input type="date" name="babyLabor" class="w3-input w3-border w3-small" id="babyLabor" placeholder="Where" required>--></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2">Amniotoc Fluid: Clear:</td>
								<td colspan="2">
									<input type="text" name="babyAmniotocClear" class="w3-input w3-border w3-small" id="babyAmniotocClear" placeholder="Spontaneous onset" required>
								</td>
								<td colspan="2">Not Clear:</td>
								<td colspan="2">
									<input type="text" name="babyAmniotocNotClear" class="w3-input w3-border w3-small" id="babyAmniotocNotClear" placeholder="Spontaneous onset" required>
								</td>
							</tr>
							<tr>
								<td colspan="4"><strong>Delivery:</strong></td>
							</tr>
							<tr>
								<td colspan="0">Type</td>
								<td colspan="3">
									<input type="text" name="babyDeliveryType" class="w3-input w3-border w3-small" id="babyDeliveryType" placeholder="Delivery Type" required>
								</td>
								<td colspan="0">Presentation:</td>
								<td colspan="3">
									<input type="text" name="babyDeliveryPresentation" class="w3-input w3-border w3-small" id="babyDeliveryPresentation" placeholder="Delivery Presentation" required>
								</td>
								<td colspan="0">Complication/s:</td>
								<td colspan="3">
									<input type="text" name="babyDeliveryComplication" class="w3-input w3-border w3-small" id="babyDeliveryComplication" placeholder="Delivery Complication/s" required>
								</td>
							</tr>
							<tr>
								<td colspan="2"><strong>APGAR Score:</strong></td>
								<td colspan="0">1 Min.</td>
								<td colspan="4">
									<input type="text" name="babyApgar1min" class="w3-input w3-border w3-small" id="babyApgar1min" placeholder="1 Min." required>
								</td>
								<td colspan="0">5 Mins.</td>
								<td colspan="4">
									<input type="text" name="babyApgar5min" class="w3-input w3-border w3-small" id="babyApgar5min" placeholder="5 Mins" required>
								</td>
							</tr>
							<tr>
								<td colspan="3"><strong>Attending Physician:</strong></td>
								<td colspan="4">
									<input type="text" name="babyAttendingPhysician" class="w3-input w3-border w3-small" id="babyAttendingPhysician" placeholder="Attending Physician" required>
									<input type="hidden" name="patientIdNursery" class="w3-input w3-border w3-small" id="patientIdNursery" value="<?php echo $patientId?>">
									<input type="hidden" name="lastAdmittingNursery" class="w3-input w3-border w3-small" id="lastAdmittingNursery" value="<?php echo $lastAdmitting?>">
								</td>
							</tr>
							<tr>
								<td><input type="submit" class="w3-btn w3-green" value="Submit Details" name="submitNursery" id="submitNursery"></td>
							</tr>
						</table>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>