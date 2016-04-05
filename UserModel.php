<?php
// require ('config.php');

class User {
	private $role;//in hamoon shoghleshune
	private $username;
	private $password;
	private $email;
	private $type;// 0 kadre pezeshkio parastara, 1 dr, 2 admin
	private $name;
	private $id;
	private $hospital_id;

// 	public function __construct($_username, $_password, $_email, $_role, $_id, $_type, $_name, $_hospital) {
// 		$this->role = $_role;
// 		$this->username = $_username;
// 		$this->password = $_password;
// 		$this->email = $_email;
// 		$this->type = $_type;
// 		$this->name = $_name;
// 		$this->id = $_id;
// 		$this->hospital = $_hospital;
	
// 	}
	function getType(){
		return $this->type;
	}
	function logout() {
		$_SESSION ['username'] = "";
		$_SESSION ['login'] = false;
	
	}
	function newPatient(){
		if ($this->type == 2)
			return;
		else{
			
		}
	}
	function referPatinet ($p_id){
// 		if ();
	}
}
?>