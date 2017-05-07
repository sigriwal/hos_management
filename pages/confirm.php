<?php 

class confirm_DB_Functions {
	
	private $email; 
    private $con;
	private $h_num;
	private $c_row;
	 
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
		
		$ser = "SELECT * FROM db_tmp WHERE hospital_num='$this->h_num'";
		$res = mysqli_query($this->con, $ser);
		$this->c_row = mysqli_fetch_array($res);
    }
 
    // destructor
    function __destruct() {
 
    }

	public function getName(){
		$name=$this->c_row['f_name']." ".$this->c_row['l_name'];
		return $name;
	}
	public function getOPD(){
		return $this->c_row['pat_num'];
	}
	public function getINV(){
		$opd = $this->c_row['pat_num'];
		$len = strlen($opd);
		$cl = $len - 6;
		$a = substr($opd, 0, $cl);
		$b = substr($opd, -6);
		$c = $a."IN".$b;
		return $c;
	}
	public function getGender(){
		return $this->c_row['gender'];
	}
	public function getDob(){
		return $this->c_row['dob'];
	}
	public function getG_Name(){
		return $this->c_row['g_name'];
	}
	public function getM_Name(){
		return $this->c_row['m_name'];
	}
	public function getEmail(){
		return $this->c_row['p_mail'];
	}
	public function getMobile(){
		return $this->c_row['p_mob'];
	}
	public function getAddr(){
		return $this->c_row['p_addr'];
	}
	public function getState(){
		return $this->c_row['p_state'];
	}
	public function getDist(){
		return $this->c_row['p_dist'];
	}
	public function getPin(){
		return $this->c_row['p_pin'];
	}
}
//mysqli_close($con);
?>