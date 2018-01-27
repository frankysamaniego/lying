$("#search").keyup(function() {
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});


function patientInfoSubmit(){
	var patientData = $("#patientDetails").serializeArray();
	//console.log(patientData);
	$.ajax({
		url:'nurseProcess.php',
		type:'post',
		data:patientData,
		success:function(data){
			console.log(data);
			if(data == "SUCCESS"){
				alert("Patient Successfully Admitted");
			}else if(data == 'DUPLICATE'){
				alert("Record exists in the database!");
			}else{
				alert("Opps! Something went wrong! Please try again later..");
			}
		}
	});
}




function addNewMaternal(x){
	var maternalRecord = $("#maternalServiceRecordForm").serializeArray();
	//console.log(maternalRecord);
	$.ajax({
		url:'nurseProcess.php',
		type:'post',
		data:maternalRecord,
		success:function(data){
			console.log(data);
			if(data == "SUCCESS"){
				alert("Records successfully added!");
				window.location.href="index.php?listPatient=true";
			}else if(data == 'DUPLICATE'){
				alert("Record exists in the database!");
			}else{
				alert("Opps! Something went wrong! Please try again later..");
			}
		}
	});
}




function medSheetSubmit(){
	var medicationType = $('#medicationType').val();
	var medicationShift = $('#medicationShift').val();
	var medicationDate = $('#medicationDate').val();
	var medication = $('#medication').val();
	var patientId = $('#patientId').val();
	var admitId = $('#admitId').val();
	$.ajax({
		url:'nurseProcess.php',
		type:'post',
		data:"medType="+medicationType+'&medShift='+medicationShift+'&medDate='+medicationDate+'&medication='+medication+'&medPatientId='+patientId+'&medAdmitId='+admitId,
		success:function(data){
			console.log(data);
			if(data == "SUCCESS"){
				alert("Medication Added Successfully");
				window.location.reload();
			}else{
				alert("Opps! Something went wrong! Please try again later..");
			}
		}
		
	});
}




function getShifts(){
	var tprType = $('#tprType').val();
	var readingDate = $('#readingDate').val();
	var patientId = $('#patientId').val();
	var typeShift = $('#type').val();
	//alert(tprType+' '+readingDate);
	$.ajax({
		url:'nurseProcess.php',
		type:'post',
		data:'getShiftsType='+tprType+'&readingDateTpr='+readingDate+'&patientIdTpr='+patientId+'&typeShift='+typeShift,
		success:function(data){
			console.log(data);
			$('#appendingTprForm').html(data);
		}
	});
}






function submitTpr(){
	var tprDetails = $("#tprForm").serializeArray();
	$.ajax({
		url:'nurseProcess.php',
		type:'post',
		data:tprDetails,
		success:function(data){
			console.log(data);
			alert('Record Successfully Added!');
			window.location.reload();
		}
	});
}





function nurseryInfoSubmit(){
	var nurseryDetails = $('#nurseryForm').serializeArray();
	$.ajax({
		url:'nurseProcess.php',
		type:'post',
		data:nurseryDetails,
		success:function(data){
			if(data == "SUCCESS"){
				alert('Record Successfully Added!');
				window.location.reload();
			}else{
				alert('Record Not Added, Please try again Later');
			}
			//
			//
		}
	});
}





function submitDocOrder(){
	var docOrder = $('#docOrder').serializeArray();
	$.ajax({
		url:'nurseProcess.php',
		type:'post',
		data:docOrder,
		success:function(data){
			console.log(data);
			if(data == "SUCCESS"){
				alert('Record Successfully Added!');
				window.location.reload();
			}else{
				alert('Record Not Added, Please try again Later');
			}
		}
	})
}



function reAdmit(x){
	var readmitId = x;
	var data = $('#readmissionForm').serializeArray();
	console.log(data);
	$.ajax({
		url:'nurseProcess.php',
		type:'post',
		data:data,
		success:function(data){
			console.log(data);
			if(data == "SUCCESS"){
				alert('Patient Successfully Admitted!');
				window.open('index.php','_self');
			}else{
				alert('Error! Please try again Later');
			}
		}
	})
}
