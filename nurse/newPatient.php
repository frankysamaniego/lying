<div class="w3-container">
	<h2><span class='fa fa-plus'></span> New Patient Record<hr/></h2>
	<div class="w3-container">
		<div class="w3-row">
			<form action="javascript:void(0);" method="post" id="patientDetails" enctype="multipart/form-data" onsubmit="return patientInfoSubmit()">
			<fieldset>
				<legend><h4><b>Patient Information</b></h4></legend>
				<div class="w3-container">
					<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;">
						<tr>
							<td>PATIENT NAME:</td>
							<td>
								<input type="text" name="lastName" class="w3-input w3-border w3-small" id="lastName" placeholder="Last Name" required>
							</td>
							<td>
								<input type="text" name="givenName" class="w3-input w3-border w3-small" id="givenName" placeholder="Given Name" required>
							</td>
							<td>
								<input type="text" name="middleName" class="w3-input w3-border w3-small" id="middleName" placeholder="Middle Name" required>
							</td>
							<td  style="text-align:right !important;">DATE OF BIRTH:</td>
							<td>
								<input type="date" name="dob" class="w3-input w3-border w3-small" id="dob" placeholder="Date of Birth" required>
							</td>
						</tr>
						<tr>
							<td>ADDRESS:</td>
							<td colspan="">
								<input type="text" name="address" class="w3-input w3-border w3-small" id="address" placeholder="Adress" required>
							</td>
							<td  style="text-align:right !important;">AGE:</td>
							<td>
								<input type="number" name="age" class="w3-input w3-border w3-small" id="age" placeholder="Age" required>
							</td>
							<td  style="text-align:right !important;">CP #:</td>
							<td>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">+639</span>
							  <input type="number" name="cpNum" class="form-control w3-input w3-border w3-small" id="cpNum" placeholder="Cellphone Number" aria-describedby="basic-addon1" required>
							</div>
							</td>
						</tr>
						<tr>
							<td>NATIONALITY:</td>
							<td>
								<input type="text" name="nationality" class="w3-input w3-border w3-small" id="nationality" placeholder="Nationality" required>
							</td>
							<td style="text-align:right !important;">RELIGION:</td>
							<td>
								<input type="text" name="religion" class="w3-input w3-border w3-small" id="religion" placeholder="Religion" required>
							</td>
							<td  style="text-align:right !important;">OCCUPATION:</td>
							<td>
								<input type="text" name="occupation" class="w3-input w3-border w3-small" id="occupation" placeholder="Occupation" required>
							</td>
						</tr>
					</table>
					<div class="w3-container">
						<hr style="margin:5px 0px;">
						<table border="0" class="w3-table" cellspacing="5px" style="vertical-align: middle !important;">
						<tr>
							<td>NAME OF HUSBAND:</td>
							<td colspan='3'>
								<input type="text" name="husbandName" class="w3-input w3-border w3-small" id="husbandName" placeholder="Husband Name" required>
							</td>
							<td style="text-align:right !important;">AGE:</td>
							<td>
								<input type="number" name="husbandAge" class="w3-input w3-border w3-small" id="husbandAge" placeholder="Husband Age" required>
							</td>
						</tr>
						<tr>
							<td>NATIONALITY:</td>
							<td>
								<input type="text" name="husbandNationality" class="w3-input w3-border w3-small" id="husbandNationality" placeholder="Husband Nationality" required>
							</td>
							<td style="text-align:right !important;">RELIGION:</td>
							<td>
								<input type="text" name="husbandReligion" class="w3-input w3-border w3-small" id="husbandReligion" placeholder="Husband Religion" required>
							</td>
							<td style="text-align:right !important;">OCCUPATION:</td>
							<td>
								<input type="text" name="husbandOccupation" class="w3-input w3-border w3-small" id="husbandOccupation" placeholder="Husband Occupation" required>
							</td>
						</tr>
						<tr>
							<td>NAME OF INFORMANT:</td>
							<td colspan='3'>
								<input type="text" name="informantName" class="w3-input w3-border w3-small" id="informantName" placeholder="Informant Name" required>
							</td>
							<td style="text-align:right !important;">RELATION TO PATIENT:</td>
							<td>
								<input type="text" name="informatRelation" class="w3-input w3-border w3-small" id="informatRelation" placeholder="Relation to patient" required>
							</td>
						</tr>
						<tr>
							<td>ADDRESS:</td>
							<td colspan='3'>
								<input type="text" name="informantAddress" class="w3-input w3-border w3-small" id="informantAddress" placeholder="Informant Adress" required>
							</td>
							<td style="text-align:right !important;">INFORMANT CP#:</td>
							<td>
								<div class="input-group">
								  <span class="input-group-addon" id="basic-addon1">+639</span>
								  <input type="number" name="informantCpNum" class="form-control w3-input w3-border w3-small" id="informantCpNum" placeholder="Cellphone Number" aria-describedby="basic-addon1" required>
								</div>
							</td>
						</tr>
					</table>
					</div>
				</div>
				
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
								<input type="hidden" value="saveFromNewPatient" id="saveFromNewPatient" name="saveFromNewPatient" />
							</td>
						</tr>
					</table>
					<div class="w3-container w3-center">
						<button class="w3-btn w3-green"><i class="fa fa-check"></i>Proceed</button>
					</div>
					</div>
				</fieldset>
				</form>
			</div>
			
			
			<!--------------------- MATERNAL SERVICE RECORD ---------------------->
			<!--------------------- MATERNAL SERVICE RECORD ---------------------->
			<!--------------------- MATERNAL SERVICE RECORD ---------------------->
			<!--------------------- MATERNAL SERVICE RECORD 
			
			<div class="w3-row">
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
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</fieldset>
			</div>
			
			<!--------------------- MATERNAL SERVICE RECORD ---------------------->
			<!--------------------- MATERNAL SERVICE RECORD ---------------------->
			<!--------------------- MATERNAL SERVICE RECORD ---------------------->
			<!--------------------- MATERNAL SERVICE RECORD ---------------------->
		</div>
	</div>
</div>

