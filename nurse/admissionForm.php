<script>
	$(document).ready(function(){
		$("#addOrder").css('display','block');
	});
</script>

<div id="addOrder" class="w3-modal w3-animate-opacity" style="z-index:999999;" >
  <div class="w3-modal-content w3-card-8" style="min-width:600px;">
    <header class="w3-container w3-teal">
		<h4>Re-Admission Form</h4>		
    </header>
    <div class="w3-row-padding w3-padding-32" >
		<fieldset>
	<form action="javascript:void(0);" id="readmissionForm" onsubmit="return reAdmit(<?php echo $_GET['token']?>)" type="post">
		<legend><h4><b>Admitting Details</b></h4></legend>
		<div class="w3-container">
			<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;">
				<tr>
					<td>DATE ADMITTED:</td>
					<td>
						<input type="date" name="admitDate" class="w3-input w3-border w3-small" id="admitDate" placeholder="Admission Date" required>
					</td>
					<td>TIME ADMITTED:</td>
					<td>
						<input type="time" name="admitTime" class="w3-input w3-border w3-small" id="admitTime" placeholder="Admission Time" required>
					</td>
					<td>CHIEF COMPLAINT:</td>
					<td>
						<input type="checkbox" name="chiefComplaint[]" class="w3-check w3-border w3-small" id="chiefComplaint[]" value="Labor Pain"  placeholder="Admission Time" > Labor Pain
						<input type="checkbox" name="chiefComplaint[]" value="Viginal Bleeding" class="w3-check w3-border w3-small" id="chiefComplaint[]" placeholder="Admission Time" > Viginal Bleeding
					</td>
				</tr>
				<tr>
					<td>BOW:</td>
					<td>
						<input type="text" name="bow" class="w3-input w3-border w3-small" id="bow" placeholder="BOW" required>
					</td>
					<td>OTHERS:</td>
					<td colspan="3">
						<input type="text" name="others" class="w3-input w3-border w3-small" id="others" placeholder="Please specify..." required>
					</td>
				</tr>
				<tr>
					<td colspan='6'><center><strong>HISTORY OF THE PRESENT PREGNANCY:</strong></center></td>
				</tr>
				<tr>
					
					<td>LMP:</td>
					<td>
						<input type="text" name="lmp" class="w3-input w3-border w3-small" id="lmp" placeholder="LMP" required>
					</td>
					<td>EDC:</td>
					<td>
						<input type="text" name="edc" class="w3-input w3-border w3-small" id="edc" placeholder="EDC" required>
					</td>
					<td>AOG:</td>
					<td>
						<input type="text" name="aog" class="w3-input w3-border w3-small" id="aog" placeholder="AOG" required>
					</td>
				</tr>
				<tr>
					<td>GRAVIDA:</td>
					<td>
						<input type="text" name="gravida" class="w3-input w3-border w3-small" id="gravida" placeholder="GRAVIDA" required>
					</td>
					<td>PARA:</td>
					<td>
						<input type="text" name="para" class="w3-input w3-border w3-small" id="para" placeholder="PARA" required>
					</td>
					<td>TPAL:</td>
					<td>
						<input type="text" name="tpal" class="w3-input w3-border w3-small" id="tpal" placeholder="TPAL" required>
					</td>
				</tr>
				<tr>
					<td>PNC:</td>
					<td>
						<input type="text" name="pnc" class="w3-input w3-border w3-small" id="pnc" placeholder="PNC" required>
					</td>
					<td>TT:</td>
					<td>
						<input type="text" name="tt" class="w3-input w3-border w3-small" id="tt" placeholder="TT" required>
					</td>
				</tr>
				<tr>
					<td>POST OB HISTORY:</td>
					<td colspan="5">
						<input type="text" name="postOB" class="w3-input w3-border w3-small" id="postOB" placeholder="Post OB history" required>
					</td>
				</tr>
			</table>
			<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;">
				<tr>
					<td colspan='4'><center><strong>PAST MEDICAL HISTORY:</strong></center></td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="pastMedHist[]" class="w3-check w3-border w3-small" id="pastMedHist[]" value="Hypertension" placeholder="Admission Time" > Hypertension
					</td>
					<td>
						<input type="checkbox" name="pastMedHist[]" class="w3-check w3-border w3-small" id="pastMedHist[]" value="Heart Disease" placeholder="Admission Time"> Heart Disease
					</td>
					<td style="text-align:right !important;">
						OTHERS:
					</td>
					<td>
						<input type="text" name="otherMedHis" class="w3-input w3-border w3-small" id="otherMedHis" placeholder="Please specify...">
					</td>
				</tr>
			</table>
			<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;">
				<tr>
					<td colspan='8'><center><strong>PHYSICAL EXAMINATION / GENERAL SURGERY:</strong></center></td>
				</tr>
				<tr>
					<td style="text-align:right !important;">
						BP:
					</td>
					<td>
						<input type="text" name="phyBP" class="w3-input w3-border w3-small" id="phyBP" placeholder="Blood Pressure" required>
					</td>
					<td style="text-align:right !important;">
						RR:
					</td>
					<td>
						<input type="text" name="phyRR" class="w3-input w3-border w3-small" id="phyRR" placeholder="RR" required>
					</td>
					<td style="text-align:right !important;">
						PR:
					</td>
					<td>
						<input type="text" name="phyPR" class="w3-input w3-border w3-small" id="phyPR" placeholder="PR" required>
					</td>
					<td style="text-align:right !important;">
						T:
					</td>
					<td>
						<input type="text" name="phyT" class="w3-input w3-border w3-small" id="phyT" placeholder="Temp." required>
					</td>
				</tr>
				<tr>
					<td style="text-align:right !important;">
						Ht:
					</td>
					<td>
						<input type="text" name="phyHt" class="w3-input w3-border w3-small" id="phyHt" placeholder="Ht" required>
					</td>
					<td style="text-align:right !important;">
						IE:
					</td>
					<td>
						<input type="text" name="phyIE" class="w3-input w3-border w3-small" id="phyIE" placeholder="IE" required>
					</td>
					<td style="text-align:right !important;">
						FUNDIE Ht:
					</td>
					<td>
						<input type="text" name="phyFuHt" class="w3-input w3-border w3-small" id="phyFuHt" placeholder="Fundie Ht" required>
					</td>
					<td style="text-align:right !important;">
						FHT:
					</td>
					<td>
						<input type="text" name="phyFHT" class="w3-input w3-border w3-small" id="phyFHT" placeholder="FHT" required>
					</td>
				</tr>
			</table>
			<div class="w3-row">
				<div class="w3-half w3-padding">
					<span>ADMITTING DIAGNOSIS:</span>
					<textarea id="admittingDiagnosis" class="admitting" name="admittingDiagnosis"></textarea>
				</div>
				<div class="w3-half w3-padding">
					<span>FINAL DIAGNOSIS:</span>
					<textarea id="finalDiagnosis" class="admitting" name="finalDiagnosis"></textarea>
				</div>
			</div>
			<div class="w3-row">
				<strong><center>RAPID ASSESMENT</center></strong>
			</div>
			<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;max-width:50%;" align="center">
			
				<tr>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Vaginal Bleeding" > Vaginal Bleeding
					</td>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Severe Pallor" > Severe Pallor
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Convulsion" > Convulsion
					</td>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Epigastric/Abdominal Pail" > Epigastric/Abdominal Pail
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Looking very ill" > Looking very ill
					</td>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Severe Head ache" > Severe Head ache
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Dificulty of Breathing" > Dificulty of Breathing
					</td>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Blurred Vision" > Blurred Vision
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Unconscious" > Unconscious
					</td>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="Blurred Vision" > Fever > 38C
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top">
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="In Labor" > In Labor
					</td>
					<td>
						<input type="checkbox" name="rapidAssesment[]" class="w3-check w3-border w3-small" id="rapidAssesment[]" value="rapidAssesmentOthers" > Others 
						<input type="text" name="rapidAssesmentOthers1" class="w3-input w3-border w3-small" id="rapidAssesmentOthers1" placeholder="Please specify...">
						<input type="hidden" value="<?php echo $_GET['token'] ?>" id="readmission" name="readmission" />
					</td>
				</tr>
			</table>
			<div class="w3-container w3-center">
				<button class="w3-btn w3-green"><i class="fa fa-check"></i>Proceed</button>
			</div>
		</div>
	</form>
</fieldset>
    </div>
	
  </div>
</div>


