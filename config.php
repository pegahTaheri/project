<?php
session_start ();
global $db_username, $db_password, $db_database, $db_host, $dbh;
global $tbl_users, $tbl_patients, $login, $user_role, $tbl_log, $tbl_medAdv, $tbl_hosp, $tbl_tUsers;
global  $tbl_file1, $tbl_file2, $tbl_file3, $tbl_file4, $tbl_file5, $tbl_file6, $tbl_file7, $tbl_file8, $tbl_file9, $tbl_file10, $tbl_file11;
global $trans;
// 0 medic, 1 dr, 2 admin
$db_database = "HospitalServer";
$db_host = "localhost";
$db_username = "root";
$db_password = "root";

$tbl_users = 'Users';
$tbl_patients = 'Patients';
$tbl_file1 = 'File1';
$tbl_file2 = 'File2';
$tbl_file3 = 'File3';
$tbl_file4 = 'File4';
$tbl_file5 = 'File5';
$tbl_file6 = 'File6';
$tbl_file7 = 'File7';
$tbl_file8 = 'File8';
$tbl_file9 = 'File9';
$tbl_file10 = 'File10';
$tbl_file11 = 'File11';
$tbl_file = 'File';
$tbl_log = 'Log';
$tbl_medAdv = "medAdvice";
$tbl_hosp = 'Hospitals';
$tbl_tUsers = "tempUsers";
$trans = array();

$trans['login']=0;
$trans['signup']=1;
$trans['newFile']=2;
$trans['newPatient']=3;
$trans['editPatient']=4;
$trans['sendMedAdv']=5;
$trans['answerMedAdv']=6;
$trans['acceptFile']=7;
$trans['acceptUser']=8;
$trans['deleteUSer']=9;


if (! isset ( $_SESSION ['username'] ))
	$_SESSION ['login'] = false;

OpenDatabase ( $db_host, $db_database, $db_username, $db_password );
createUserTable ();
createPatientTable ();
createFileTable ();
createLogTable ();
createMedAdvTable ();
createHospitalTable ();
createTempUserTable ();

// if (getCount ( "*", $GLOBALS ['tbl_hosp'], "" ) == 0) {
// 	echo "here";
// 	$GLOBALS ['DBH']->query ( "ALTER TABLE " . $GLOBALS ['tbl_hosp'] . " AUTO_INCREMENT = 0" );
// 	Insert ( $GLOBALS ['tbl_hosp'], "(city, name, id)", "(?,?,?)", array ("admin","admin",0 
// 	) );
// }

function OpenDatabase($host, $database, $username, $password) {
	try {
		$GLOBALS ['DBH'] = new PDO ( "mysql:host=$host;dbname=$database;charset=utf8", $username, $password );
		$GLOBALS ['DBH']->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		// file_put_contents ( 'PDOErrors.txt', " \r\n".time(), FILE_APPEND );
		return true;
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage () . "time: \r\n" . time (), FILE_APPEND );
		return false;
	}
	return false;

}

class TempUser {
	public $username;
	public $password;
	public $email;
	public $id;
	public $name;
	public $hospital;

}

function createTempUserTable() {
	try {
		$GLOBALS ['DBH']->query ( 
				"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_tUsers'] . " (
																		username varchar(15) not null UNIQUE,
																		password varchar(16) not null,
																		email Text not null,
																		id int(10) not null,
																		name TEXT not null,
																		hospital TEXT not null,
																		PRIMARY KEY(id));" );
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function createUserTable() {
	try {
		$GLOBALS ['DBH']->query ( 
				"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_users'] . " (
																		username varchar(15) not null UNIQUE,
																		password varchar(16) not null,
																		email Text not null,
																		id int(10)  not null,
																		name TEXT not null,
																		type int(2) not null,
																		hospital_id int(7) not null,
																		PRIMARY KEY(id));" );
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function createPatientTable() {
	try {
		$GLOBALS ['DBH']->query ( 
				"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_patients'] . " (
																		fileID int(15) not null UNIQUE,
																		name Text not null,
																		familyName Text not null,
																		fathername Text not null,
																		mothername Text not null,
																		gender varchar(1) not null,
																		birthday Text,
																		main_diagnose Text,
																		second_diagnose Text,
	age_of_reg Text,
	birth_place Text,
	date_of_reg Datetime,
	date_of_discharge datetime,
	address Text,
	phone Text,
	erja_hosp Text,
	last_dr Text,
	erja_register_time Text,
	transfer_way Text,
	last_diagnose Text,
				
																		id int(7) auto_increment not null,
																		PRIMARY KEY(id));" );
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function createFileTable() {
	try {
// 	createFileTable1();
	createFileTable2();
	createFileTable3 ();
	createFileTable4();
	createFileTable5();
	createFileTable6();
	createFileTable7();
	createFileTable8();
	createFileTable9();
	createFileTable10();
	createFileTable11();
		$GLOBALS ['DBH']->query ( 
				"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file'] . " (
																		file_number int(15) auto_increment not null,
																		patinet_id int(7) not null,
																		dr_id int(10) not null,
																		date Text not null,
																		status int(1) default 0 not null,
																		PRIMARY KEY(file_number));" );
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}
	
}
function createFileTable2(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file2'] . " (
																		file_number int(15) not null,
																		patinet_id int(7) not null,			
																		distress int(1),
																		 sianoz int(1),
																		 apne int(1),
																		 zardi int(1),
																		 narasi int(1),
																		jarahi int(1),
																		govareshi int(1),
																		 ofoonat int(1),
																		 ghalbi_madarzadi int(1),
																		 metabolic int(1),
																		 other Text,
																		PRIMARY KEY(file_number));" );
}
function createFileTable3(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file3'] . " (
																		file_number int(15) not null,
																		patinet_id int(7) not null,			
	birthday Text,
	birth_hour int(2),
	birth_age_in_weeks int(2),
	birth_weight int(5),
	birth_weight_percent int(2), 
	head_cm int(3),
	head_cm_percent int(2),
	height_birth int(4),
	height_birth_percent int(4),
	kind int(1),
	reason_sezarian Text,
	apgar1 int(2),
	apgar5 int(2),
	apgar20 int(2),
	ehya_birth int(1),
	oxygen int(3),
	ppv int(1),
	heart_massage int(1),
	medicine Text,
	mekoniom int(1),
	vitamin_k int(1),
	vaxan_hepatit int(1),
	vaxan_bcg int(1),
	vaxan_bolio int(1),
	bastari_ghabli Text, 
	masrafe_daroo Text,
																		PRIMARY KEY(file_number));" );
}

function createFileTable4(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file4'] . " (
																		file_number int(15) not null,
																		patinet_id int(7) not null,
	L Text,
	Ab Text, 
	P text,
	G text,
	BGRH text,
	twin text,
	deisease text,
	medicine text,
	avarez text,
	nazayi text,
	kise_ab text,
	modat text,
	maye text,
	nama_janin text,
																		PRIMARY KEY(file_number));" );
}

function createFileTable5(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file5'] . " (
																		file_number int(15) not null,
																		patinet_id int(7) not null,
		family int(1),
	relation text,
	familiDisease text,
	fote_farzande_ghabli int(1),
	age text,
	reason_death text,
																		PRIMARY KEY(file_number));" );
}

function createFileTable6(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file6'] . " (
																		file_number int(15) not null,
			patinet_id int(7) not null,
		HR int(3),
	RR int(3),
	BP text,
	T text,
																		PRIMARY KEY(file_number));" );
}

function createFileTable7(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file7'] . " (
																		file_number int(15) not null,
																		patinet_id int(7) not null,
				
	tanafos_tashkhis text,
	pal text,
	pal_no text,
	rightL int(1),
	leftL int(1),
	chest_tube text,
	cld int(1),
	distress text,
	rds int(2),
	rds_seyr text,
	cxr text,
	cxr_seyr text,
	abg text,
	abg_seyr text,
	o2 text,
	et1 text,
	et2 text,
	tanafos_komaki text,
	soorfaktant int(1),
	srfktnt_no text,
	srfktnt_dafe text,
	srfktnt_seyr text, 
	jarahi text,
	jarahi_seyr text,
	pathology text,
	
	soofl int(1),
	soofl_khos text,
	hipotansion text,
	hypertension text,
	PDA text,
	pda_balini int(1),
	pda_shoro text,
	echo text,
	nsaid text,
	ghalb_seyr text,
	ghalb_darman text,
	jarahi_ghalb text,
	
	zard_shoro text,
	zardi_darman text,
	zardi_foto int(1),
	zardi_foto_bil text,
	zardi_ex int(1),
	zardi_ex_bil text,
	zardi_text text,
	kolestaz text,
	kolestaz_barresi text,
	kolestaz_nahayi text,
	kolestaz_seyr text,
	
	gi int(1),
	gi_text text,
	nec_stage int(1),
	nec_text text,
	ger int(1),
	ger_text text,
	gi_bleeding int(1),
	gi_bl_text text, 
	govaresh_seyr text,
	
	balini text,
	azmayeshgahi_text text,
	darman_sepsis text,
	darman_seyr text,
	sayer_ofonat text,
	azmayeshat_digar text,
			
	anemi int(1),
	anemi_tashkhis text,
	anemi_darman text,
	anemi_seyr text,
	transfusion text,
	
	sono_maghz text,
	tasahnoj int(1),
	maghz_tashkhis text,
	lp text,
	ca text,
	bs text,
	eeg text,
	brainCT text,
	torch text,
			
	metabolic text,
	darman_maghz text,
	seyr_maghz text,
	hipotony text,
		
																		PRIMARY KEY(file_number));" );
}
function createFileTable8(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file8'] . " (
																		file_number int(15) not null,
																		patinet_id int(7) not null,
		azmayeshgahi text,
	imaging text,
																		PRIMARY KEY(file_number));" );
}

function createFileTable9(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file9'] . " (
																		file_number int(15) not null,
																		patinet_id int(7) not null,
		sayer text,
	
																		PRIMARY KEY(file_number));" );
}

function createFileTable10(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file10'] . " (
																		file_number int(15) not null,
																		patinet_id int(7) not null,
		moshavere text,
	
																		PRIMARY KEY(file_number));" );
}

function createFileTable11(){
	$GLOBALS ['DBH']->query (
			"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_file11'] . " (
																		file_number int(15) not null,
																		patinet_id int(7) not null,
			saranjam int(1),
	vaziate_tarkhis text,
	dastoore_tarkhis text,
	morajee text,
	rop text,
	abr text,
	sono text,
	maghz text,
			heap text,
	status text,
	daroo text,
	amozzesh text,
	peygiri text,
	tarikhe_fot text,
	ellate_fot text,
	tarikh text,
																		PRIMARY KEY(file_number));" );
}

function createMedAdvTable() {
	try {
		$GLOBALS ['DBH']->query ( 
				"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_medAdv'] . " (
																		fileID int(15) not null,
																		senderID int(7) not null,
																		receiverID int(7) not null,
																		descripton Text not null,
																		status int(1) default 0 not null,
																		advTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
																		PRIMARY KEY(advTime, senderID, receiverID, fileID));" );
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function login() {
	$_SESSION ['login'] = true;

}

function createHospitalTable() {
	try {
		$GLOBALS ['DBH']->query ( 
				"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_hosp'] . " (
																		name Text not null,
																		city Text not null,
			
																		
																		id int(7) auto_increment not null,
																		PRIMARY KEY(id));" );
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function createLogTable() {
	try {
		$GLOBALS ['DBH']->query ( 
				"CREATE TABLE IF NOT EXISTS " . $GLOBALS ['tbl_log'] . " (
																		user_id int(7) not null,
																		trans_id int(5) not null,
																		time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
																		description TEXT,
																		log_id int(7) auto_increment not null,
																		PRIMARY KEY(log_id));" );
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function Insert($table, $headers, $values, $data) {
	try {
		$STH = $GLOBALS ['DBH']->prepare ( "INSERT INTO " . $table . " " . $headers . " values " . $values );
		$STH->execute ( $data );
		return true;
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
		return false;
	}
	return true;

}

function Update($table, $set, $where, $data) {
	try {
		$STH = $GLOBALS ['DBH']->prepare ( "UPDATE `" . $table . "` SET " . $set . " WHERE " . $where );
		$STH->execute ( $data );
		// echo "update<br>";
	}
	catch ( PDOException $e ) {
		echo $set;
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function Delete($table, $where, $data) {
	try {
		$STH = $GLOBALS ['DBH']->prepare ( "DELETE FROM " . $table . " WHERE " . $where );
		$STH->execute ( $data );
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function Select($what, $table, $where, $data) {
	try {
		if ($where == null) {
			return $GLOBALS ['DBH']->query ( "select " . $what . " from `" . $table . "`" );
		}
		else {
			$statement = $GLOBALS ['DBH']->prepare ( "select " . $what . " from `" . $table . "` where " . $where ); // name = :name");
			$statement->execute ( $data );
			return $statement;
		}
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function SelectOrder($what, $table, $where, $data, $column, $asc) {
	if ($where == null) {
		return $GLOBALS ['DBH']->query ( "select " . $what . " from " . $table . " order by " . $column . " " . $asc );
	}
	else {
		$statement = $GLOBALS ['DBH']->prepare ( "select " . $what . " from " . $table . " where " . $where . " order by " . $column . " " . $asc ); // name = :name");
		$statement->execute ( $data );
		return $statement;
	}

}

function getCount($what, $table) {
	try {
		$stmt = $GLOBALS ['DBH']->query ( "SELECT " . $what . " from " . $table );
		// $stmt->bindValue('?', $where);
		// $result=mysql_query($GLOBALS['DBH'],"SELECT count(".$what.") as total from ".$table." WHERE ".$where);
		// $stmt->execute($where);
		$color_query = $stmt->fetchAll ();
		$count = $stmt->rowCount ();
		return $count;
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}

function createLog($description, $transaction){
	Insert($GLOBALS['tbl_log'], "(user_id, description, time, trans_id)", "(?,?,?,?)", array($_SESSION['user_id'],$description,date('Y-m-d/G:i'),$GLOBALS['trans'][$transaction]));
	//time, transaction
}

function getCountWhere($what, $table, $where, $data) {
	try {
		$stmt = $GLOBALS ['DBH']->query ( "SELECT " . $what . " from " . $table . " where " . $where );
		$stmt->execute ( $data );
		// $stmt->bindValue('?', $where);
		// $result=mysql_query($GLOBALS['DBH'],"SELECT count(".$what.") as total from ".$table." WHERE ".$where);
		// $stmt->execute($where);
		$color_query = $stmt->fetchAll ();
		$count = $stmt->rowCount ();
		return $count;
	}
	catch ( PDOException $e ) {
		echo $e->getMessage ();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage (), FILE_APPEND );
	}

}
?>