<?php
	session_start();
	$patientId = $_GET['token'];
	
?>
<div class="w3-row">
	<form action="javascript:void(0);" method="POST" onsubmit="return addNewMaternal(<?php echo $patientId;?>)" id="maternalServiceRecordForm" enctype="multipart/form-data">
		<fieldset>
			<div class="w3-container">
				<legend><h4><b>MATERNAL SERVICE RECORD</b></h4></legend>
				<div class="w3-half w3-padding">
					<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;max-width:100%;">
						<tr>
							<td>LMP:</td>
							<td>
								<input type="date" name="lmpMaternal" class="w3-input w3-border w3-small" id="lmpMaternal" required>
							</td>
							<td>EDC:</td>
							<td>
								<input type="date" name="edcMaternal" class="w3-input w3-border w3-small" id="edcMaternal" required>
							</td>
						</tr>
					</table>
					<div class="w3-row">
						<span><b>OBJECTIVE OBSERVATION:</b></span>
						<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;max-width:100%;">
							<tr>
								<td>BP:</td>
								<td>
									<input type="text" name="ooBp" class="w3-input w3-border w3-small" id="ooBp" placeholder="Blood Pressure" required>
								</td>
								<td>TEMPERATURE:</td>
								<td>
									<input type="text" name="ooTemp" class="w3-input w3-border w3-small" id="ooTemp" placeholder="Temperature in C" required>
								</td>
							</tr>
							<tr>
								<td>WEIGHT:</td>
								<td>
									<input type="text" name="ooWeight" class="w3-input w3-border w3-small" id="ooWeight" placeholder="Weight in Kg" required>
								</td>
								<td>HEENT:</td>
								<td>
									<input type="text" name="ooHeent" class="w3-input w3-border w3-small" id="ooHeent" placeholder="Heent" required>
								</td>
							</tr>
							<tr>
								<td>BREAST:</td>
								<td>
									<input type="text" name="ooBreast" class="w3-input w3-border w3-small" id="ooBreast" placeholder="Breast" required>
								</td>
								<td>CHEST/HEART:</td>
								<td>
									<input type="text" name="ooChestHeart" class="w3-input w3-border w3-small" id="ooChestHeart" placeholder="Chest / Heart" required>
								</td>
							</tr>
							<tr>
								<td>ABDOMEN:</td>
								<td>
									<input type="text" name="ooAbdomen" class="w3-input w3-border w3-small" id="ooAbdomen" placeholder="Abdomen" required>
								</td>
								<td>FUNDIC HEIGHT:</td>
								<td>
									<input type="text" name="ooFundicHeight" class="w3-input w3-border w3-small" id="ooFundicHeight" placeholder="Fundic Height in cm" required>
								</td>
							</tr>
							<tr>
								<td>AOG IN WEEK:</td>
								<td>
									<input type="text" name="ooAog" class="w3-input w3-border w3-small" id="ooAog" placeholder="AOG in Week" required>
								</td>
								<td>FETAL HEART TONE:</td>
								<td>
									<input type="text" name="ooFetal" class="w3-input w3-border w3-small" id="ooFetal" placeholder="Fetal heart tone/min" required>
								</td>
							</tr>
							<tr>
								<td>LOC.:</td>
								<td colspan="3">
									<input type="text" name="ooLoc" class="w3-input w3-border w3-small" id="ooLoc" placeholder="Loc" required>
								</td>
								
							</tr>
							<tr>
								<td colspan="4"><span>Leopold's Maneuver:</span><td>
							</tr>
							<tr>
								<td>L1:</td>
								<td>
									<input type="text" name="ooL1" class="w3-input w3-border w3-small" id="ooL1" placeholder="L1" required>
								</td>
								<td>L3:</td>
								<td>
									<input type="text" name="ooL3" class="w3-input w3-border w3-small" id="ooL3" placeholder="L3" required>
								</td>
							</tr>
							<tr>
								<td>L2:</td>
								<td>
									<input type="text" name="ooL2" class="w3-input w3-border w3-small" id="ooL2" placeholder="L2" required>
								</td>
								<td>L4:</td>
								<td>
									<input type="text" name="ooL4" class="w3-input w3-border w3-small" id="ooL4" placeholder="L4" required>
								</td>
							</tr>
							<tr>
								<td>URINE ACTIVITY:</td>
								<td colspan='3'>
									<input type="text" name="ooUrineAct" class="w3-input w3-border w3-small" id="ooUrineAct" placeholder="Urine Activity" required>
								</td>
							</tr>
							<tr>
								<td colspan="4"><span>Pelvic Examination:</span><td>
							</tr>
							<tr>
								<td>PERINEUM:</td>
								<td>
									<input type="text" name="ooPerinerum" class="w3-input w3-border w3-small" id="ooPerinerum" placeholder="Perinerum" required>
								</td>
								<td>VARICOSITIES:</td>
								<td>
									<input type="text" name="ooVaricosities" class="w3-input w3-border w3-small" id="ooVaricosities" placeholder="Varicosities" required>
								</td>
							</tr>
							<tr>
								<td>WARTS/ECZEMA:</td>
								<td colspan='3'>
									<input type="text" name="ooWartsEcs" class="w3-input w3-border w3-small" id="ooWartsEcs" placeholder="Warts / Eczema" required>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="w3-half w3-padding">
					
					<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;max-width:100%;">
							<tr>
								<td>VIST DATE:</td>
								<td>
									<input type="date" name="visitDate" class="w3-input w3-border w3-small" id="visitDate" placeholder="" required>
								</td>
								<td>TIME:</td>
								<td>
									<input type="time" name="visitTime" class="w3-input w3-border w3-small" id="visitTime" placeholder="" required>
								</td>
							</tr>
					</table>
					<div class="w3-row">
						<span>SUBJECTIVE OBSERVATION:</span>
						<textarea id="subjectiveObservation" class="admitting" name="subjectiveObservation"></textarea>
					</div>
					<div class="w3-row">
						<span>SPECULUM EXAMINATION:(if necessary)</span>
						<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;max-width:100%;">
							<tr>
								<td>PURULENT DISCHARGE:</td>
								<td>
									<input type="text" name="specPurulent" class="w3-input w3-border w3-small" id="specPurulent" placeholder="Purulent Discharge" required>
								</td>
								<td>WATERY DISCHARGE:</td>
								<td>
									<input type="text" name="specWatery" class="w3-input w3-border w3-small" id="specWatery" placeholder="Watery Discharge" required>
								</td>
							</tr>
							<tr>
								<td>BLEEDING:</td>
								<td>
									<input type="text" name="specBleeding" class="w3-input w3-border w3-small" id="specBleeding" placeholder="Bleeding" required>
								</td>
								<td>OTHERS:</td>
								<td>
									<input type="text" name="specOthers" class="w3-input w3-border w3-small" id="specOthers" placeholder="Please specify" required>
								</td>
							</tr>
							<tr>
								<td colspan="4"><span>Internal Examination:(if necessary)</span><td>
							</tr>
							<tr>
								<td>CERVICAL DILATATION:</td>
								<td colspan="3">
									<input type="text" name="specCervicalDil" class="w3-input w3-border w3-small" id="specCervicalDil" placeholder="Cervical Dilatation" required>
								</td>
							</tr>
							<tr>
								<td>PRESENTING PART:</td>
								<td colspan="3">
									<input type="text" name="specPresenting" class="w3-input w3-border w3-small" id="specPresenting" placeholder="Presenting part" required>
								</td>
							</tr>
							<tr>
								<td>BOW (BAG OF WATER):</td>
								<td colspan="3">
									<input type="text" name="specBow" class="w3-input w3-border w3-small" id="specBow" placeholder="Bag of water" required>
								</td>
							</tr>
							<tr>
								<td>URINARY TRACT:UTI</td>
								<td colspan="3">
									<input type="text" name="specUti" class="w3-input w3-border w3-small" id="specUti" placeholder="UTI" required>
									<input type="hidden" name="patientId" class="w3-input w3-border w3-small" id="patientId" value="<?php echo $patientId;?>" />
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="w3-row">
					<button class="w3-btn w3-green "><i class="fa fa-check"></i> SUBMIT</button>
					<a href="../nurse/" class="w3-btn w3-red"><i class="fa fa-remove"></i>Cancel</a>
				</div>
			</div>
		</fieldset>
	</form>
</div>