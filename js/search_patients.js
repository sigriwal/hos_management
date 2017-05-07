function showPatient(str){
	if(str ==" " || str == ""){
		var divEle = document.getElementById("tbody");
		divEle.innerHTML = " ";	
	}else{
		str = str.toUpperCase();
				
		$.ajax({url: '/meetdoctor/db/search_patients.php',
		  data: {data: str},
			type: 'post',                  
			async: 'true',
			dataType: 'json',
			beforeSend: function() {
				// This callback function will trigger before data is sent
		  },
			complete: function() {
				// This callback function will trigger on data sent/received complete
		 },
		  success: function (result) {
			  if(result[0]["status"]=="success") {
					//alert(result[0]["status"]);
					displayResult(result);                    
				} else {
					alert(result[0]["status"]);
				}
			},
			error: function (request,error) {
				// This callback function will trigger on unsuccessful action               
				alert('Network error has occurred please try again!'+error);
			}
	   }); 
	}  
}

// Creating Table to display search Result
function displayResult(data){
	var divEle = document.getElementById("tbody");
	divEle.innerHTML = " ";
	var i = 0;
	for(i=1; data.length; i++){
		//alert(data[i]["pat_name"]);
		//if(typeof data[i] != "undefined" && data[i] != null && data[i].length > 0){
			drawRow(data, i);
		//}
	}
}

//Inserting Row into Table
function drawRow(data, i){
	//var divEle = document.getElementById("pat_search");
	var table = document.getElementById('resTable');
	var row = "<tr><td>"+data[i]['opd#']+ "</td>" +"<td>"+ data[i]['pat_name'] + "</td>" + "<td>" +data[i]['dob']+ "</td>" +"<td>"+ data[i]['g_name'] + "</td>" +"<td>"+ data[i]['mobile'] + "</td>" +"<td>"+ data[i]['addr'] + "</td></tr>";
	$(row).appendTo(table);	
}

//$(document).on('click', '#opd_num', function() { 
//	var opd = document.getElementById("opd_num").value;
//	alert("pan");
//});