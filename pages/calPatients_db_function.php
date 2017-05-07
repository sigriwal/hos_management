<?php
/**
 * DB operations functions
 */
class calPatients_DB_Functions {
	
	private $email; 
    private $con;
	private $h_num;
	 
    //put your code here
    // constructor
    function __construct() {
		include_once '../../config.php';
		//session_start();
		$this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		$this->email = $_SESSION['username'];
		
		$m_sql="SELECT * FROM users WHERE email='$this->email'";
		$m_result = mysqli_query($this->con, $m_sql);
		if($m_result == false) { 
			die(mysqli_error()); // TODO: better error handling
		}
		$m_row = mysqli_fetch_array($m_result);
		$this->h_num = $m_row['hospital_num'];
    }
 
    // destructor
    function __destruct() {
 
    }
 	
	public function calDailyPatients(){
		$o = date("ymd");
		$p_num = $this->h_num.$o."%";
		$ser = "SELECT patient_information.*, patients_address.mobile,patients_address.addr,patients_address.district,patients_address.state FROM patient_information INNER JOIN patients_address ON patient_information.pat_num = patients_address.patient_num WHERE patient_information.pat_num LIKE '$p_num'";
		$res = mysqli_query($this->con, $ser);
		
		if($res == false) { 
			die(mysqli_error()); // TODO: better error handling
		}
		$c = mysqli_num_rows($res);
		return $c;
	} 
	public function calWeeklyPatients(){
		$count = 0;
		for($j = 0; $j < 7; $j++){
			$i = $j;
			$i = "-".$i;
			$i = $i." days";
			
			$o = date("ymd", strtotime($i));
			$p_num = $this->h_num.$o."%";
			$ser = "SELECT patient_information.*, patients_address.mobile,patients_address.addr,patients_address.district,patients_address.state FROM patient_information INNER JOIN patients_address ON patient_information.pat_num = patients_address.patient_num WHERE patient_information.pat_num LIKE '$p_num'";
			$res = mysqli_query($this->con, $ser);
			
			if($res == false) { 
				die(mysqli_error()); // TODO: better error handling
			}
			$c = mysqli_num_rows($res);
			$count = $count + $c;
		}
		return $count;
	}
	public function calMonthlyPatients(){
		$count = 0;
		for($j = 0; $j < 30; $j++){
			$i = $j;
			$i = "-".$i;
			$i = $i." days";
			
			$o = date("ymd", strtotime($i));
			$p_num = $this->h_num.$o."%";
			$ser = "SELECT patient_information.*, patients_address.mobile,patients_address.addr,patients_address.district,patients_address.state FROM patient_information INNER JOIN patients_address ON patient_information.pat_num = patients_address.patient_num WHERE patient_information.pat_num LIKE '$p_num'";
			$res = mysqli_query($this->con, $ser);
			
			if($res == false) { 
				die(mysqli_error()); // TODO: better error handling
			}
			$c = mysqli_num_rows($res);
			$count = $count + $c;
		}
		return $count;
	}

        public function totPatients(){
		//$o = date("ymd");
		//$p_num = $this->h_num.$o."%";
		$ser = "SELECT patient_information.*, patients_address.mobile,patients_address.addr,patients_address.district,patients_address.state FROM patient_information INNER JOIN patients_address ON patient_information.pat_num = patients_address.patient_num WHERE patient_information.hospital_num='$this->h_num'";
		$res = mysqli_query($this->con, $ser);
		
		if($res == false) { 
			die(mysqli_error()); // TODO: better error handling
		}
		$c = mysqli_num_rows($res);
		return $c;
	} 

}
 
?>