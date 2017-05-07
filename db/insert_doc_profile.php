<?php
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

$d_name = htmlentities($output['d_name']);
$d_qualification = htmlentities($output['d_qualf']);
$d_specialization = htmlentities($output['d_specl']);

$d_name = stripslashes($d_name);
$d_qualification = stripslashes($d_qualification);
$d_specialization = stripslashes($d_specialization);

//$d_name = mysql_real_escape_string($d_name);
//$d_qualification = mysql_real_escape_string($d_qualification);
//$d_specialization = mysql_real_escape_string($d_specialization);

$d_num=$h_num.'-1';

$query="INSERT INTO doc_information(hospital_num,doc_num,doc_name,doc_qualification,doc_specialization) VALUES('$h_num','$d_num','$d_name','$d_qualification','$d_specialization')";
$result = mysqli_query($con, $query);

//echo $result;
//die();
if(!$result){
	$query1="UPDATE doc_information SET hospital_num='$h_num',doc_num='$d_num',doc_name='$d_name',doc_qualification='$d_qualification',doc_specialization='$d_specialization' WHERE hospital_num='$h_num'";
	$result1 = mysqli_query($con, $query1);
	if($result1){
		$out = array('status' => 'success');
		echo json_encode($out);
	}else{
		$out = array('status' => 'failure', 'res' => $result);
		echo json_encode($out);
	}
}else{
	$out = array('status' => 'failureA', 'res' => $result);
	echo json_encode($out);
}
  
mysqli_close($con);

?>
