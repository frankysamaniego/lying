<?php
	$patientId = $_GET['token'];
	$lastAdmitting = getAdmittingLastId($patientId);
?>
<!----MODAL-->
<div id="newMedication" class="w3-modal w3-animate-opacity" style="z-index:9999999;">
  <div class="w3-modal-content w3-card-8" style="max-width:300px;">
    <header class="w3-container w3-teal">
		<h4>Medication Records</h4>
    </header>
    <div class="w3-row-padding w3-padding-32" >
		<form action="javascript:void(0)" method="post" onsubmit="return medSheetSubmit()" id="mfr_form">
			<label>Medication Type</label>
			<select class="w3-select w3-border w3-small" id="medicationType" name="medicationType" required>
				 <option value="" disabled selected>Choose Your Medication Type</option>
				 <option value="ORAL">ORAL</option>
				 <option value="PARENTAL">PARENTAL</option>
			</select>
			<label>Medication Shift</label>
			<select class="w3-select w3-border w3-small" id="medicationShift" name="medicationShift" required>
				 <option value="" disabled selected>Choose Medication Shift</option>
				 <option value="6AM-6PM">6AM-6PM</option>
				 <option value="6PM-6AM">6PM-6AM</option>
			</select>
			<label>Date of Medication</label>
			<input type="date" name="medicationDate" id="medicationDate" class="w3-input w3-border" required>
			<label>Medication</label>
			<input type="text" name="medication" id="medication" class="w3-input w3-border" required>
			<input type="hidden" name="admitId" id="admitId" value="<?php echo $lastAdmitting;?>" class="w3-input w3-border" required>
			<input type="hidden" name="patientId" id="patientId" value="<?php echo $patientId;?>"  class="w3-input w3-border" required>
			<br/>
			<button class="w3-btn w3-teal">Submit</button>
			<button class="w3-btn w3-red" onclick="document.getElementById('newMedication').style.display='none'">Cancel</button>
		</form>
    </div>
	
  </div>
</div>
<!----MODAL-->


<div class="w3-container">
	<h2><div><span class='fa fa-medkit'></span> Medication Sheet</div></h2>
	<hr/>
	<div class="w3-row">
		<div class="w3-half w3-padding">
			<h4><strong>ORAL</strong></h4>
			<hr style="margin-top:0px;"/>
			<table class="w3-table">
				<thead>
					<tr class="w3-teal">
						<th>Medication</th>
						<th>Date</th>
						<th class="w3-center">6AM - 6PM</th>
						<th class="w3-center">6PM - 6AM</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = mysql_query("SELECT * FROM `medications` WHERE `patientId`='$patientId' AND `medicationType`='ORAL'");
						while($row = mysql_fetch_array($sql)){
					?>
						<tr>
							<td><?php echo $row['medication'];?></td>
							<td><?php echo date("F j, Y",strtotime($row['medicationDate']));?></td>
							<td class="w3-center"><?php if($row['shift'] == "6AM-6PM"){ ?><span class="fa fa-check w3-text-green"></span><?php }?></td>
							<td class="w3-center"><?php if($row['shift'] == "6PM-6AM"){ ?><span class="fa fa-check w3-text-green"></span><?php }?></td>
						</tr>
					<?php }?>
				</tbody>
			</table>
		</div><div class="w3-half w3-padding">
			<h4><strong>PARENTAL</strong></h4>
			<hr style="margin-top:0px;"/>
			<table class="w3-table">
				<thead>
					<tr class="w3-teal">
						<th>Medication</th>
						<th>Date</th>
						<th class="w3-center">6AM - 6PM</th>
						<th class="w3-center">6PM - 6AM</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = mysql_query("SELECT * FROM `medications` WHERE `patientId`='$patientId' AND `medicationType`='PARENTAL'");
						while($row = mysql_fetch_array($sql)){
					?>
						<tr>
							<td><?php echo $row['medication'];?></td>
							<td><?php echo date("F j, Y",strtotime($row['medicationDate']));?></td>
							<td class="w3-center"><?php if($row['shift'] == "6AM-6PM"){ ?><span class="fa fa-check w3-text-green"></span><?php }?></td>
							<td class="w3-center"><?php if($row['shift'] == "6PM-6AM"){ ?><span class="fa fa-check w3-text-green"></span><?php }?></td>
						</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
		<div class="w3-container">
			<button class="w3-button w3-green" onclick="document.getElementById('newMedication').style.display='block';">Add New Record</button>
		</div>
	</div>
		
</div>

