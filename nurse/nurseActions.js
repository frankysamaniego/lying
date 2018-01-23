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