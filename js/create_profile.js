function redirect(){
	window.location = "/meetdoctor/pages/home.php";
}

function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

function makeuppercase(param) {
	document.getElementById(param).value = document.getElementById(param).value.toUpperCase();
}

function h_data_verification(){
	if (document.getElementById('h_name').value == '' || (document.getElementById('h_name').value).trim().length == 0)
	{
		alert("Please Enter Hospital Name");
		document.getElementById('h_name').focus();
		return  false;
	}
	if (document.getElementById('h_address').value == '' || (document.getElementById('h_address').value).trim().length == 0)
	{
		alert("Please Enter Hospital Address");
		document.getElementById('h_address').focus();
		return  false;
	}
	if (document.getElementById('h_state').value == '' || (document.getElementById('h_state').value).trim().length == 0)
	{
		alert("Please Enter State");
		document.getElementById('h_state').focus();
		return  false;
	}
	if (document.getElementById('h_district').value == '' || (document.getElementById('h_district').value).trim().length == 0)
	{
		alert("Please Enter District");
		document.getElementById('h_district').focus();
		return  false;
	}
	return true;
}

function d_data_verification(){
	if (document.getElementById('d_name').value == '' || (document.getElementById('d_name').value).trim().length == 0)
	{
		alert("Please Enter Doctor Name");
		document.getElementById('d_name').focus();
		return  false;
	}
	if (document.getElementById('d_qualf').value == '' || (document.getElementById('d_qualf').value).trim().length == 0)
	{
		alert("Please Enter Doctor's Qualification");
		document.getElementById('d_qualf').focus();
		return  false;
	}
	if (document.getElementById('d_specl').value == '' || (document.getElementById('d_specl').value).trim().length == 0)
	{
		alert("Please Enter State");
		document.getElementById('d_specl').focus();
		return  false;
	}
	
	return true;
}

function insert_doc_info(){
	$.ajax({url: '/meetdoctor/db/insert_doc_profile.php',
	  data: {formData: $('#doc_data').serialize()},
		type: 'post',                  
		async: 'true',
		dataType: 'json',
		beforeSend: function() {
			// This callback function will trigger before data is sent
			//alert($('#doc_data').serialize());
	  },
		complete: function() {
			// This callback function will trigger on data sent/received complete
			
	 },
	  success: function (result) {
		  if(result.status=="success") {
				//alert(result.status);
				redirect();                       
			} else {
				alert(result.status+' Unsuccessful! '+ result.res);
			}
		},
		error: function (request,error) {
			// This callback function will trigger on unsuccessful action               
			alert('Network error has occurred please try again!'+error);
		}
   }); 
}

function data_verification(){
	var h_data = h_data_verification();
	var d_data = d_data_verification();
	
	if(h_data && d_data){
		$.ajax({url: '/meetdoctor/db/insert_hospital_profile.php',
		  data: {formData: $('#hospital_data').serialize() },
			type: 'post',                  
			async: 'true',
			dataType: 'json',
			beforeSend: function() {
				// This callback function will trigger before data is sent
				//alert($('#hospital_data').serialize());
		  },
			complete: function() {
				// This callback function will trigger on data sent/received complete
				//alert(formData);
		 },
		  success: function (result) {
			  if(result.status=="success") {
					//alert(result.status);
					insert_doc_info();                       
				} else {
					alert(result.status+' Unsuccessful!');
				}
			},
			error: function (request,error) {
				// This callback function will trigger on unsuccessful action               
				alert('Network error has occurred please try again! '+error);
			}
	   });             
	}
}

function pan(){
	var frm = document.getElementById("doc_img");
	var input = document.createElement("input");
	input.type = 'file';
	input.name = "img-file";
	frm.appendChild(input);
	//return ' <input type="file" name="img-file">';
		
}