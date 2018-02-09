<?php
	$patientId = $_GET['token'];
	$lastAdmitting = getAdmittingLastId($patientId);
	
	function getTypeOrder($x){
		if($x == 1 || $x == '1'){
			$ret = "Admission";
		}else{
			$ret = "Discharge";
		}
		return $ret;
	}
?>


<div class="w3-container">
	<h2><span class='fa fa-list'></span> Doctors Order<hr/></h2>
	<table class="w3-table w3-striped">
		<thead>
			<tr class="w3-green">
			  <th>Date & Time</th>
			  <th>Type</th>
			  <th>Orders</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$sql = mysql_query("SELECT * FROM `doctorsOrder` WHERE `patientId`='$patientId' AND `admittingId`='$lastAdmitting'");
				while($row = mysql_fetch_assoc($sql)){
			?>
			<tr>
				<td><?php echo $row['dateTime']?></td>
				<td><?php echo getTypeOrder($row['type'])?></td>
				<td><?php echo $row['orders']?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
	<br/>
	<button class="w3-btn w3-green" onclick="document.getElementById('addOrder').style.display='block'">ADD</button>
	<a href="../nurse/" class="w3-btn w3-red"><i class="fa fa-remove"></i>Cancel</a>
</div>





<div id="addOrder" class="w3-modal w3-animate-opacity" style="z-index:999999;" >
  <div class="w3-modal-content w3-card-8" style="max-width:400px;">
    <header class="w3-container w3-teal">
		<h4>New Doctors Order</h4>		
    </header>
    <div class="w3-row-padding w3-padding-32" >
		<form action="javascript:void(0)" method="post" onsubmit="return submitDocOrder()" id="docOrder">
			<label>Type</label>
			<select class="w3-select w3-border w3-small" id="docOrderType" name="docOrderType" required>
				 <option value="" disabled selected>Choose Type</option>
					<option value="1">Admission</option>
					<option value="2">Discharge</option>
			</select>
			<label>Date & Time</label>
			<input type="datetime-local" class="w3-input w3-border" name="doctorOrderdatetime"  id="doctorOrderdatetime" required>
			<label>Orders</label>
			<textarea id="docOrders" class="admitting" name="docOrders"></textarea>
			<input type="hidden" name="patientId" id="patientId" value="<?php echo $patientId;?>">
			<input type="hidden" name="admitId" id="admitId" value="<?php echo $lastAdmitting;?>">
			<button class="w3-btn w3-teal ">Submit</button>
			<button class="w3-btn w3-red" onclick="document.getElementById('addOrder').style.display='none'">Cancel</button>
		</form>
    </div>
	
  </div>
</div>
