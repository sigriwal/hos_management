<?php
/**
 * DB operations functions
 */
class doc_DB_Functions {
	
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
 	
	public function getDocName(){
		
		$sql="SELECT * FROM doc_information WHERE hospital_num='$this->h_num'";
		$result = mysqli_query($this->con, $sql);
		if($result == false) { 
			die(mysqli_error()); // TODO: better error handling
		}
		$row = mysqli_fetch_array($result);	
		$doc_name = ucwords(strtolower($row['doc_name']));
		return "Dr ".$doc_name;
	} 
	public function getSpecialization(){
		$sql="SELECT * FROM doc_information WHERE hospital_num='$this->h_num'";
		$result = mysqli_query($this->con, $sql);
		if($result == false) { 
			die(mysqli_error()); // TODO: better error handling
		}
		$row = mysqli_fetch_array($result);	
		
		return $row['doc_specialization'];
	}
	public function getEDU(){
		$sql="SELECT * FROM doc_information WHERE hospital_num='$this->h_num'";
		$result = mysqli_query($this->con, $sql);
		if($result == false) { 
			die(mysqli_error()); // TODO: better error handling
		}
		$row = mysqli_fetch_array($result);	
		
		return $row['doc_qualification'];
	}
}
 
?>