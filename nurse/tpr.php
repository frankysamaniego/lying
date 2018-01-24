<?php
	$patientId = $_GET['token'];
	$lastAdmitting = getAdmittingLastId($patientId);
?>
<style>
#tpr {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width: 100%;
	
}

#tpr td, #tpr th {
	border: 1px solid #ddd;
	padding: 8px;
}

#tpr tr:nth-child(even){background-color: #f2f2f2;}


#tpr th {
	padding-top: 3px;
	padding-bottom: 3px;
	text-align: left;
	background-color: teal;
	color: white;
	text-align:center;
	
}
#saday{
	font-size:11px;
}
td{
	font-size:12px
}
</style>



<div class="w3-padding">
<table id="tpr" class="w3-table">
		<tr class="w3-teal">
			<th rowspan="2">Date</th>
			<th rowspan="2">Height</th>
			<th rowspan="2">Weight</th>
			<th colspan="2">BP</th>
			<th colspan="2">U</th>
			<th colspan="2">S</th>
			<th colspan="6">Respiration</th>
			<th colspan="6">Pulse</th>
			<th colspan="6">Temperature</th>
		</tr>
		<tr class="w3-teal">
			<th id="saday" >6AM-6PM</th>
			<th id="saday" >6PM-6AM</th>
			<th id="saday" >6AM-6PM</th>
			<th id="saday" >6PM-6AM</th>
			<th id="saday" >6AM-6PM</th>
			<th id="saday" >6PM-6AM</th>
			<th id="saday" >12 AM</th>
			<th id="saday" >4</th>
			<th id="saday" >8</th>
			<th id="saday" >12 PM</th>
			<th id="saday" >4</th>
			<th id="saday" >8</th>
			<th id="saday" >12 AM</th>
			<th id="saday" >4</th>
			<th id="saday" >8</th>
			<th id="saday" >12 PM</th>
			<th id="saday" >4</th>
			<th id="saday" >8</th>
			<th id="saday" >12 AM</th>
			<th id="saday" >4</th>
			<th id="saday" >8</th>
			<th id="saday" >12 PM</th>
			<th id="saday" >4</th>
			<th id="saday" >8</th>
		</tr>
		<?php
			$sql = mysql_query("SELECT * FROM `tpr` WHERE `patientId` = '$patientId'");
			while($row = mysql_fetch_assoc($sql)){
				$dateOfReading = $row['dateOfReading'];
			
		?>
		<tr>
			<td><?php echo date("F j, Y",strtotime($dateOfReading));?></td>
			<td><?php echo $row['height'];?></td>
			<td><?php echo $row['weight'];?></td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `bpus` WHERE `tprType`='BP' AND `dateOfReading`='$dateOfReading' AND `shift`='6AM-6PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `bpus` WHERE `tprType`='BP' AND `dateOfReading`='$dateOfReading' AND `shift`='6PM-6AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `bpus` WHERE `tprType`='U' AND `dateOfReading`='$dateOfReading' AND `shift`='6AM-6PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `bpus` WHERE `tprType`='U' AND `dateOfReading`='$dateOfReading' AND `shift`='6PM-6AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `bpus` WHERE `tprType`='S' AND `dateOfReading`='$dateOfReading' AND `shift`='6AM-6PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `bpus` WHERE `tprType`='S' AND `dateOfReading`='$dateOfReading' AND `shift`='6PM-6AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Respiration' AND `dateOfReading`='$dateOfReading' AND `shift`='12AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Respiration' AND `dateOfReading`='$dateOfReading' AND `shift`='4AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Respiration' AND `dateOfReading`='$dateOfReading' AND `shift`='8AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Respiration' AND `dateOfReading`='$dateOfReading' AND `shift`='12PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Respiration' AND `dateOfReading`='$dateOfReading' AND `shift`='4PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Respiration' AND `dateOfReading`='$dateOfReading' AND `shift`='8PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			
			
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Pulse' AND `dateOfReading`='$dateOfReading' AND `shift`='12AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Pulse' AND `dateOfReading`='$dateOfReading' AND `shift`='4AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Pulse' AND `dateOfReading`='$dateOfReading' AND `shift`='8AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Pulse' AND `dateOfReading`='$dateOfReading' AND `shift`='12PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Pulse' AND `dateOfReading`='$dateOfReading' AND `shift`='4PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Pulse' AND `dateOfReading`='$dateOfReading' AND `shift`='8PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			
			
			
			
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Temp' AND `dateOfReading`='$dateOfReading' AND `shift`='12AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Temp' AND `dateOfReading`='$dateOfReading' AND `shift`='4AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Temp' AND `dateOfReading`='$dateOfReading' AND `shift`='8AM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Temp' AND `dateOfReading`='$dateOfReading' AND `shift`='12PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Temp' AND `dateOfReading`='$dateOfReading' AND `shift`='4PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
			<td>
			<?php
				$sql1 = mysql_query("SELECT * FROM `rpt` WHERE `tprType`='Temp' AND `dateOfReading`='$dateOfReading' AND `shift`='8PM' AND `patientId`='$patientId' AND `admitId`='$lastAdmitting'");
				while($row1 = mysql_fetch_assoc($sql1)){
					echo $row1['reading'];
				}
			?>
			</td>
		</tr>
		<?php  }?>
	</table>
		<button class="w3-btn w3-teal" onclick="document.getElementById('addTpr').style.display='block'">Add New Record</button>
</div>





<div id="addTpr" class="w3-modal w3-animate-opacity" style="z-index:999999;" >
  <div class="w3-modal-content w3-card-8" style="max-width:300px;">
    <header class="w3-container w3-teal">
		<h4>TPR Results</h4>		
    </header>
    <div class="w3-row-padding w3-padding-32" >
		<form action="javascript:void(0)" method="post" onsubmit="return submitTpr()" id="tprForm">
			<label>TPR Category</label>
			<select class="w3-select w3-border w3-small" id="tprType" name="tprType" onchange="document.getElementById('readingDate').valueAsDate = null;" required>
				 <option value="" disabled selected>Choose TPR Type</option>
					<option>U</option>
					<option>S</option>
					<option>BP</option>
					<option>Temp</option>
					<option>Pulse</option>
					<option>Respiration</option>
			</select>
			<input type="hidden" name="patientId" id="patientId" value="<?php echo $patientId;?>">
			<input type="hidden" name="admitId" id="admitId" value="<?php echo $lastAdmitting;?>">
			<label>Date of Reading</label>
			<input type='date' class='w3-input w3-small w3-border' id='readingDate' name = 'readingDate' onchange="return getShifts()" required>
			<div id="appendingTprForm"></div>
			<br/>
			<button class="w3-btn w3-teal ">Submit</button>
			<button class="w3-btn w3-red" onclick="document.getElementById('addTpr').style.display='none'">Cancel</button>
		</form>
    </div>
	
  </div>
</div>