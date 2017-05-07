function redirect_invoice(){
	window.location = "/meetdoctor/pages/invoice.php";
}
function confirm_submit(){
	$.ajax({url: '/meetdoctor/db/confirm_insert_pat_info.php',
	  data: {name: "MD" },
		type: 'post',                  
		async: 'true',
		dataType: 'json',
		beforeSend: function() {
			// This callback function will trigger before data is sent
			//alert(name);
	  },
		complete: function() {
			// This callback function will trigger on data sent/received complete
			//alert("Pankaj");
	 },
	  success: function (result) {
		  if(result.status=="success") {
				//alert(result.status);
				redirect_invoice();                     
			} else {
				alert(result.status+' Unsuccessful! ');
			}
		},
		error: function (request,error) {
			// This callback function will trigger on unsuccessful action               
			alert('Network error has occurred please try again! '+error);
		}
   });       
}

function redirect(){
	window.location = "/meetdoctor/pages/confirm_registration.php";
}

function ChangeSelectedGender()
{
	var iname = document.getElementById("p_initial_name");
	if (iname.value == "Mr.")
	{
		document.p_registration.p_sex[0].checked = true; //male
		document.getElementById('p_sex_').value = '1';
	}
	else if (iname.value == "Mrs." || iname.value == "Miss.")
	{
		document.p_registration.p_sex[1].checked = true; //female    
		document.getElementById('p_sex_').value = '2';
	}
	else if (iname.value == "Others") {
		document.p_registration.p_sex[2].checked = true; //Other
		document.getElementById('p_sex_').value = '0';
	} else {
		document.p_registration.p_sex[0].checked = false;
		document.p_registration.p_sex[1].checked = false;
		document.p_registration.p_sex[2].checked = false;
	}
	document.p_registration.p_sex[0].disabled = true;
	document.p_registration.p_sex[1].disabled = true;
	document.p_registration.p_sex[2].disabled = true;
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

function p_data_verification(){
	if (document.getElementById('p_initial_name').value == '0' || document.getElementById('p_initial_name').value == 0)
	{
		alert("Please Select initial Name.");
		document.getElementById('p_initial_name').focus();
		return  false;
	}
	if (document.getElementById('p_first_name').value == '' || (document.getElementById('p_first_name').value).trim().length == 0)
	{
		alert("Please Enter Patient First Name.");
		document.getElementById('p_first_name').focus();
		return  false;
	}
	if (document.getElementById('p_last_name').value == '' || (document.getElementById('p_last_name').value).trim().length == 0)
	{
		alert("Please Enter Patient Last Name.");
		document.getElementById('p_last_name').focus();
		return  false;
	}
	if (document.getElementById('guardian_name').value == '' || (document.getElementById('guardian_name').value).trim().length == 0)
	{
		alert("Please Enter Son/ Daughter/ Wife Of");
		document.getElementById('guardian_name').focus();
		return  false;
	}
	if (document.getElementById('p_mobile').value == '' || (document.getElementById('p_mobile').value).trim().length == 0)
	{
		alert("Please Enter Mobile Number.");
		document.getElementById('p_mobile').focus();
		return  false;
	}
	if (document.getElementById('p_address').value == '' || (document.getElementById('p_address').value).trim().length == 0)
	{
		alert("Please Enter Patient's Address");
		document.getElementById('p_address').focus();
		return  false;
	}
	if (document.getElementById('p_state').value == '' || (document.getElementById('p_state').value).trim().length == 0)
	{
		alert("Please Enter State");
		document.getElementById('p_state').focus();
		return  false;
	}
	if (document.getElementById('p_district').value == '' || (document.getElementById('p_district').value).trim().length == 0)
	{
		alert("Please Enter District");
		document.getElementById('p_district').focus();
		return  false;
	}
	if (document.getElementById('p_illness').value == '' || (document.getElementById('p_illness').value).trim().length == 0)
	{
		alert("Please Enter Patient's Illness");
		document.getElementById('p_illness').focus();
		return  false;
	}
	return true;
}

function patient_verification(){
	var p_data = p_data_verification();
		
	if(p_data){
		$.ajax({url: '/meetdoctor/db/insert_pat_info.php',
		  data: {formData: $('#p_registration').serialize() },
			type: 'post',                  
			async: 'true',
			dataType: 'json',
			beforeSend: function() {
				// This callback function will trigger before data is sent
				//alert($('#p_registration').serialize());
		  },
		  complete: function() {
				// This callback function will trigger on data sent/received complete
				//alert("Pankaj");
		 },
		  success: function (result) {
			  if(result.status=="success") {
					//alert(result.status);
					//h_num = result.hospital;
					redirect();                     
				} else {
					alert(result.status+' Unsuccessful! ');
				}
			},
		  error: function (request,error) {
				// This callback function will trigger on unsuccessful action               
				alert('Network error has occurred please try again! '+error);
		 }
	   });             
	}
}
