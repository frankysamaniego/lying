<?php
	$patientId = $_GET['token'];
?>
<!----MODAL-->
<div id="newMedication" class="w3-modal w3-animate-opacity" style="z-index:200;">
  <div class="w3-modal-content w3-card-8" style="max-width:500px;">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('newMedication').style.display='none'"
      class="w3-closebtn">&times;</span>		
    </header>
    <div class="w3-row-padding w3-padding-32" >
		<form action="javascript:void(0)" method="post" id="mfr_form">
			<label>Medication Type</label>
			<select class="w3-select w3-border w3-small" id="medication_type" name="type_med" required>
				 <option value="" disabled selected>Choose Your Medication Type</option>
				  <?php 
					$query = mysql_query("SELECT * FROM `mfr_type`");
					while($row=mysql_fetch_assoc($query)){
				  ?>
					<option value="<?php echo $row['id']?>"><?php echo $row['type']?></option>
					<?php }?>
			</select>
			<input type='hidden' value='<?php echo $id?>' id="patient_id_mfr" name="patient_id_mfr">
			<div class="w3-hide" id="date_hide">
				<label>Date of Medication</label>
				<input type='date' class='w3-input w3-small w3-border' id='med_date' name = 'date_med' required>
			</div>
			<div id="add_med_rec">
			</div>
			<br/>
			<button class="w3-btn w3-teal" onClick="submit_Mfr()">Submit</button>
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
						<th>6AM - 6PM</th>
						<th>6PM - 6AM</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = mysql_query("SELECT * FROM `medications` WHERE `patientId`='$patientId' AND `medicationType`='ORAL'");
						while($row = mysql_fetch_array($sql)){
					?>
						<tr>
							<td><?php echo $row['medication'];?></td>
							<td><?php echo date("F j, Y",$row['medicationDate']);?></td>
							<td><?php if($row['shift'] == "6AM - 6PM"){ ?><span class="fa fa-check w3-text-green"></span><?php }?></td>
							<td><?php if($row['shift'] == "6PM - 6AM"){ ?><span class="fa fa-check w3-text-green"></span><?php }?></td>
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
						<th>6AM - 6PM</th>
						<th>6PM - 6AM</th>
					</tr>
				</thead>
			</table>
		</div>
		<div class="w3-container">
			<button class="w3-button w3-green" onclick="document.getElementById('newMedication').style.display='block';">Add New Record</button>
		</div>
	</div>
		
</div>

