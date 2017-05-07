<?php
	$callback = isset($_GET['callback']) ? preg_replace('/[^a-z0-9$_]/si', '', $_GET['callback']) : false;
    	header('Content-Type: ' . ($callback ? 'application/javascript' : 'application/json') . ';charset=UTF-8');
	include_once '../../config.php';
	session_start();

	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	$email="";
	$h_num="";
	if(isset($_SESSION['username'])){
		$email= $_SESSION['username'];
		
		$query = "select hospital_num from users where email='$email'";
		$query_run = mysqli_query($con, $query);
		$row = mysqli_fetch_array($query_run);
		
		if(mysqli_num_rows($query_run) == 1){
			$h_num = $row['hospital_num'];
		}	
	}else{
		echo" Plz Log in first !";
	}

	$str = $_POST['data'];
		
	$ser = "SELECT patient_information.*, patients_address.mobile,patients_address.addr,patients_address.district,patients_address.state FROM patient_information INNER JOIN patients_address ON patient_information.pat_num = patients_address.patient_num WHERE patient_information.hospital_num='$h_num' AND patient_information.first_name LIKE '$str%'";
	$res = mysqli_query($con, $ser);
	
	if($res == false) { 
		die(mysqli_error()); // TODO: better error handling
	}
	$c = mysqli_num_rows($res);
	
	$data =  array();
	if($c > 0){
		$data[] =  array("status" => "success");
		while($row = mysqli_fetch_assoc($res)){
			$data[] = array('opd#' => $row['pat_num'], 'pat_name' => $row['first_name']." ".$row['last_name'], 'dob' => $row['dob'], 'g_name' => $row['guardian_name'], 'mobile' => $row['mobile'], 'addr' => $row['addr']. " ". $row['district']. " ". $row['state']);
		}
		//echo json_encode($data);
		echo ($callback ? $callback . '(' : '') . json_encode($data) . ($callback ? ')' : '');
		//echo $data;
	}else{
		$data[] =  array("status" => "No Such Data!");
		//echo json_encode($data);
		echo ($callback ? $callback . '(' : '') . json_encode($data) . ($callback ? ')' : '');
		//echo $data;
	}
		
?>