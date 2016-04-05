<?php

class Patient {
	private $name;
	private $familyName;
	private $birthday;
	private $fathername;
	private $mothername;
	private $gender;
	private $fileID;
	private $id;
	
	private $main_diagnose;
	private $second_diagnose;
	private $age_of_reg;
	private $birth_place;
	private $date_of_reg;
	private $date_of_discharge;
	private $address;
	private $phone;
	private $erja_hosp;
	private $last_dr;
	private $erja_register_time;
	private $transfer_way;
	private $last_diagnose;

	function __construct($_name, $_famName, $_bday, $_fath, $_moth, $_gender, $_fid, $_id) {
		$this->name = $_name;
		$this->familyName = $_famName;
		$this->birthday = $_bday;
		$this->fathername = $_fath;
		$this->mothername = $_moth;
		$this->gender = $_gender;
		$this->fileID = $_fid;
		$this->id = $_id;
	
	}

}
?>