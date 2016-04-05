<?php
global $trans_update, $trans_insert, $trans_delete, $trans_newFile, $trans_login, $trans_logout;

class Log {
	private $user_id;
	private $log_id;
	private $trans_id;
	private $time;
	private $description;

	function __construct($_uid, $_log_id, $_trans_id, $_date, $_desc) {
		$this->time = $_date;
		$this->log_id = $_log_id;
		$this->description = $_desc;
		$this->user_id - $_uid;
		$this->trans_id = $_trans_id;
	
	}

}
?>