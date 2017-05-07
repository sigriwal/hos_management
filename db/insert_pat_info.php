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
$gender="";
// Decode parameters into readable PHP object
parse_str($_POST['formData'], $output);

$p_sex = $output['p_sex_'];
if($p_sex == '1'){
	$gender = "male";
}elseif($p_sex == '2'){
	$gender = "female";
}else{
	$gender = "other";
}
//$d = date("ymd:h:i:s");
$o = date("ymdhis");
$pat_num = $h_num.$o;
$opd = $h_num.$o;
$f_name = htmlentities($output['p_first_name']);
$l_name = htmlentities($output['p_last_name']);
$dob = htmlentities($output['datemask']);
$g_name = htmlentities($output['guardian_name']);
$m_name = htmlentities($output['mother_name']);
$p_email = htmlentities($output['p_email']);
$p_mobile = htmlentities($output['p_mobile']);
$p_addr = htmlentities($output['p_address']);
$p_state = htmlentities($output['p_state']);
$p_district = htmlentities($output['p_district']);
$p_pin = htmlentities($output['p_pin']);
$p_ill = htmlentities($output['p_illness']);

$f_name = stripslashes($output['p_first_name']);
$l_name = stripslashes($output['p_last_name']);
$dob = stripslashes($output['datemask']);
$g_name = stripslashes($output['guardian_name']);
$m_name = stripslashes($output['mother_name']);
$p_email = stripslashes($output['p_email']);
$p_mobile = stripslashes($output['p_mobile']);
$p_addr = stripslashes($output['p_address']);
$p_state = stripslashes($output['p_state']);
$p_district = stripslashes($output['p_district']);
$p_pin = stripslashes($output['p_pin']);
$p_ill = stripslashes($output['p_illness']);

//$f_name = mysql_real_escape_string($output['p_first_name']);
//$l_name = mysql_real_escape_string($output['p_last_name']);
//$dob = mysql_real_escape_string($output['datemask']);
//$g_name = mysql_real_escape_string($output['guardian_name']);
//$m_name = mysql_real_escape_string($output['mother_name']);
//$p_email = mysql_real_escape_string($output['p_email']);
//$p_mobile = mysql_real_escape_string($output['p_mobile']);
//$p_addr = mysql_real_escape_string($output['p_address']);
//$p_state = mysql_real_escape_string($output['p_state']);
//$p_district = mysql_real_escape_string($output['p_district']);
//$p_pin = mysql_real_escape_string($output['p_pin']);
//$p_ill = mysql_real_escape_string($output['p_illness']);


$ser = "SELECT * FROM db_tmp WHERE hospital_num='$h_num'";
$res = mysqli_query($con, $ser);
$row = mysqli_fetch_array($res);
if(mysqli_num_rows($res) == 0){
	$query = "INSERT INTO db_tmp (hospital_num,pat_num,f_name,l_name,dob,gender,g_name,m_name,p_mob,p_mail,p_addr,p_state,p_dist,p_pin,p_illness) VALUES ('$h_num','$opd', '$f_name', '$l_name', '$dob', '$gender', '$g_name', '$m_name', '$p_mobile', '$p_email', '$p_addr', '$p_state', '$p_district', '$p_pin','$p_ill')";
	$result = mysqli_query($con, $query);
	if($result){
		$out = array('status' => 'success');
		echo (json_encode($out));
		//$out="success1";
		//echo $out;
	}else{
		$out = array('status' => 'failure');
		echo (json_encode($out));
		//$out="fail1";
		//echo $out;
	}
}else{
		
	$q_del="DELETE FROM db_tmp WHERE hospital_num = '$h_num'";
	$r_del = mysqli_query($con, $q_del);
	
	$query = "INSERT INTO db_tmp (hospital_num,pat_num,f_name,l_name,dob,gender,g_name,m_name,p_mob,p_mail,p_addr,p_state,p_dist,p_pin,p_illness) VALUES ('$h_num','$opd', '$f_name', '$l_name', '$dob', '$gender', '$g_name', '$m_name', '$p_mobile', '$p_email', '$p_addr', '$p_state', '$p_district', '$p_pin', '$p_ill')";
	$result = mysqli_query($con, $query);
		
	if($result && $r_del){
		$out = array('status' => 'success');
		echo (json_encode($out));
	}else{
		$out = array('status' => 'failure');
		echo (json_encode($out));
	}
}
  
mysqli_close($con);

?>
