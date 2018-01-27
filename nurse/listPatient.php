<div class="w3-container">
		<h2><div class='w3-half'><span class='fa fa-list'></span> Masterlist</div><div class="w3-rest"><input type="text" id="search" class='w3-right w3-input w3-small' placeholder="Search Patient's Name/ Hospital Number/ Address"><span style="position:absolute;right:50px;" class="w3-right fa fa-search"></span></div><hr/></h2>
		<table class="w3-table w3-striped">
			<thead>
			<tr class="w3-green">
			  <th>Hospital No.</th>
			  <th>Full Name</th>
			  <th>Address</th>
			  <th>Status</th>
			  <th>Action</th>
			</tr>
			</thead>
			<tbody>
				<?php
				/*
					status form db: 
						1- admitted
						2- discharged
				*/
					$sql = mysql_query("SELECT * FROM `patientdata`");
					while($row = mysql_fetch_assoc($sql)){
				?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo ucwords($row['givenName'].' '.$row['middleName'].' '.$row['lastName'])?></td>
					<td><?php echo $row['address']?></td>
					<td><?php echo getStatus($row['status'])?></td>
					<td>
						<?php
							if($row['status'] == 1){
						?>
						<div class="w3-dropdown-hover w3-white">
							 <a href="javascript:void(0);" alt="Add" title="Add" class="w3-text-black"><i class="fa fa-plus-circle fa-fx"></i></a>
							<div class="w3-dropdown-content w3-bar-block w3-card-4 w3-border" style="right:0;width:220px;">
							  <a href="?tpr=true&token=<?php echo $row['id'];?>" class="w3-bar-item w3-button"><i class="fa fa-folder-open-o "></i> TPR Result</a>
							  <a href="?docOrder=true&token=<?php echo $row['id'];?>" class="w3-bar-item w3-button"><i class="fa fa-list "></i> Doctors Order</a>
							  <a href="?nursery=true&token=<?php echo $row['id'];?>" class="w3-bar-item w3-button"><i class="fa fa-bar-chart "></i> Nursery Chart</a>
							  <a href="?tprBaby=true&token=<?php echo $row['id'];?>" class="w3-bar-item w3-button"><i class="fa fa-folder-open-o "></i> TPR Result for Baby</a>
							  <a href="?medication=true&token=<?php echo $row['id'];?>" class="w3-bar-item w3-button"><i class="fa fa-medkit"></i> Medication Record</a>
							  <a href="?maternalRecord=true&token=<?php echo $row['id'];?>" class="w3-bar-item w3-button"><i class="fa fa-folder-open-o "></i> Maternal Service Record</a>
							</div>
						</div> | 
						<?php }else{?>
							 <a href="?token=<?php echo $row['id'];?>&reAdmit=true" alt="Re Admit" title="Re Admit" class="w3-text-black"><i class="fa fa-ambulance fa-fx"></i></a> | 
						<?php }?>
						<div class="w3-dropdown-hover w3-white">
							 <a href="javascript:void(0);" alt="Print Documents"" title="Print Documents" class="w3-text-black"><i class="fa fa-print fa-fx"></i></a>
							<div class="w3-dropdown-content w3-bar-block w3-card-4 w3-border" style="right:0;width:220px;">
							  <a href="consent.php?token=<?php echo $row['id']?>" class="w3-bar-item w3-button" target="_new"><i class="fa fa-file-word-o"></i> Consent to Care</a>
							</div>
						</div>
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>

