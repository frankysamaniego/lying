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
		}
	});
}