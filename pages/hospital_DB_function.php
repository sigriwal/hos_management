<?php
/**
 * DB operations functions
 */
 error_reporting(E_WARNING | E_NOTICE);
class h_DB_Functions {
	
	private $email; 
    private $con;
	private $h_num;
	private $row;
	private $c_num;
	 
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
		$this->c_num = $m_row['contact_num'];
		
		$sql="SELECT * FROM hospital_details WHERE hospital_num='$this->h_num'";
		$result = mysqli_query($this->con, $sql);
		if($result == false) { 
			die(mysqli_error()); // TODO: better error handling
		}
		$this->row = mysqli_fetch_array($result);	
    }
 
    // destructor
    function __destruct() {
 
    }
 	
	public function getH_Name(){
		$h_name = strstr($this->row['hospital_name'],"HOSPITAL",true);
		return $h_name;
	} 
	public function getAddr(){
		$addr=($this->row['address']).", ".($this->row['district']);
		return $addr;
	} 
	public function getLoc(){
		$loc=$this->row['state'].", India - ".$this->row['pin'];
		return $loc;
	}
	public function getNum(){
		return $this->c_num;
	}
	public function getEmail(){
		return $this->email;
	}
}
 
?>

