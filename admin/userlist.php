<?php
	
?>
<div id="addNewUser" class="w3-modal" style="z-index:9999999; ">
		<div class="w3-modal-content w3-animate-top w3-card-4" style="width:400px">
		  <header class="w3-container w3-teal"> 
			<h2>ADD NEW USER</h2>
		  </header>
		  <div class="w3-container w3-padding-16">
			<form action="javascript:void(0);" id="addNewUserForm" onsubmit="return addUser()" method="post">
				<label>Full Name</label>
				<input type="text" name="newFullName" id="newFullName" class="w3-input w3-border" required>
				<label>Username</label>
				<input type="text" name="editUserNam" id="editUserName" class="w3-input w3-border" required>
				<label>Password</label>
				<input type="text" name="editPw" id="editPw" class="w3-input w3-border"  required>
				<br/>
				<input type="submit" class="w3-btn w3-green w3-block" value="SAVE">
				<input type="reset" class="w3-btn w3-red w3-block" onclick="document.getElementById('addNewUser').style.display='none'" value="CANCEL">
			</form>
		  </div>
		</div>
	  </div>


<div class="w3-container">
	<h2><span class='fa fa-list'></span> User Masterlist<hr/></h2>
	<table class="w3-table w3-striped">
		<thead>
			<tr class="w3-green">
			  <th>No.</th>
			  <th>Full Name</th>
			  <th>Username</th>
			  <th>Password</th>
			  <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$counter = 1;
				$sql = mysql_query("SELECT * FROM `users` WHERE `userType`!='1'");
				while($row = mysql_fetch_assoc($sql)){
				$id = $row['id'];
			?>
			<tr>
				<td><?php echo $counter; ?></td>
				<td><?php echo $row['fullName']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td>
					<a href="javascript:void(0);" class="w3-text-black" alt="edit" title="edit"onclick="document.getElementById('modalEdit_<?php echo $id;?>').style.display='block'"><span class="fa fa-pencil"></span></a> | 
					<a href="javascript:void(0);" class="w3-text-black" alt="delete" title="delete" onclick="deleteUser(<?php echo $id;?>)"><span class="fa fa-trash"></span></a>
				</td>
			</tr>
			<div id="modalEdit_<?php echo $id?>" class="w3-modal" style="z-index:9999999; ">
				<div class="w3-modal-content w3-animate-top w3-card-4" style="width:400px">
				  <header class="w3-container w3-teal"> 
					<h2>EDIT USER INFO</h2>
				  </header>
				  <div class="w3-container w3-padding-16">
					<form action="javascript:void(0)" id="saveUser_<?php echo $id?>" onsubmit="return saveUser(<?php echo $id?>)" method="post">
						<label>Full Name</label>
						<input type="text" name="editUserFullName" id="editUserFullName" class="w3-input w3-border" value="<?php echo $row['fullName']?>" required>
						<label>Username</label>
						<input type="text" name="editUserNam" id="editUserName" class="w3-input w3-border" value="<?php echo $row['username']?>" required>
						<label>Password</label>
						<input type="text" name="editPw" id="editPw" class="w3-input w3-border" value="<?php echo $row['password']?>" required>
						<br/>
						<input type="hidden" value="<?php echo $id?>" name="userId" id="userId"/> 
						<input type="submit" class="w3-btn w3-green w3-block" value="SAVE">
						<input type="reset" class="w3-btn w3-red w3-block" onclick="document.getElementById('modalEdit_<?php echo $id;?>').style.display='none'" value="CANCEL">
					</form>
				  </div>
				</div>
			  </div>
				<?php
					$counter++;
				}?>
		</tbody>
	</table>
	<br/>
	<button class="w3-btn w3-green" onclick="document.getElementById('addNewUser').style.display='block'">Add New</button>
	
	
	
	
	
	
	
	
</div>