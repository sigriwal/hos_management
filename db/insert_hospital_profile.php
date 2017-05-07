<?php
 //$host = $_SERVER['HTTP_HOST'];
 //echo $host;
 //die();
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
	//echo $row['hospital_num'];
	if(mysqli_num_rows($query_run) == 1){
		$h_num = $row['hospital_num'];
		//echo $h_num;
	}	
}else{
	echo" Plz Log in first !";
}
//die();
// Decode parameters into readable PHP object
parse_str($_POST['formData'], $output);

$h_name = htmlentities($output['h_name']);
$h_addr = htmlentities($output['h_address']);
$h_state = htmlentities($output['h_state']);
$h_district = htmlentities($output['h_district']);
$h_pin = htmlentities($output['h_pin']);

$h_name = stripslashes($h_name);
$h_addr = stripslashes($h_addr);
$h_state = stripslashes($h_state);
$h_district = stripslashes($h_district);
$h_pin = stripslashes($h_pin);

//$h_name = mysql_real_escape_string($h_name);
//$h_addr = mysql_real_escape_string($h_addr);
//$h_state = mysql_real_escape_string($h_state);
//$h_district = mysql_real_escape_string($h_district);
//$h_pin = mysql_real_escape_string($h_pin);


$query="UPDATE hospital_details SET hospital_name='$h_name',address='$h_addr',state='$h_state',district='$h_district',pin='$h_pin' WHERE hospital_num='$h_num'";
$result = mysqli_query($con, $query);
//echo $result;
//die();
if($result){
	$out = array('status' => 'success');
	echo json_encode($out );
		
}else{
	$out = array('status' => 'failure');
	echo json_encode($out );
}
  
mysqli_close($con);

?>
