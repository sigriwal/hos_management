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

$o = date("ymdhis");
//$p_num = $h_num.$o;
//$h_num="21#1";
$ser = "SELECT * FROM db_tmp WHERE hospital_num='$h_num'";
$res = mysqli_query($con, $ser);
$row = mysqli_fetch_array($res);
$p_num = $row['pat_num'];
$f_name=$row['f_name'];
$l_name=$row['l_name'];
$gender=$row['gender'];
$dob=$row['dob'];
$g_name=$row['g_name'];
$m_name=$row['m_name'];
$p_ill=$row['p_illness'];

$p_mob=$row['p_mob'];
$p_email=$row['p_mail'];
$p_addr=$row['p_addr'];
$p_state=$row['p_state'];
$p_dist=$row['p_dist'];
$p_pin=$row['p_pin'];

$info_insert="INSERT INTO patient_information(hospital_num,pat_num,first_name,last_name,gender,dob,guardian_name,mother_name,illness) VALUES('$h_num','$p_num','$f_name','$l_name','$gender','$dob','$g_name','$m_name','$p_ill')";
$ri_insert=mysqli_query($con, $info_insert);

$addr_insert="INSERT INTO patients_address(hospital_num,patient_num,mobile,email,addr,state,district,pin) VALUES('$h_num','$p_num','$p_mob','$p_email','$p_addr','$p_state','$p_dist','$p_pin')";
$ra_insert=mysqli_query($con, $addr_insert);


if($ri_insert){
	if($ra_insert){
		//$q_del="DELETE FROM db_tmp WHERE hospital_num = '$h_num'";
		//$r_del = mysqli_query($con, $q_del);
	
		$out = array('status' => 'success');
		echo (json_encode($out));
		//$out="success";
		//echo $out;
	}else{
		$out = array('status' => $ra_insert);
		echo (json_encode($out));
		//$out="failure";
		//echo $out;
	}
}else{
	$out = array('status' => $ri_insert);
	echo (json_encode($out));
	//$out="failure";
	//echo $out;
}

mysqli_close($con);
?>