<?php
header("Content-Type: text/xml");
require_once 'config.php';
require_once 'FileModel.php';
require_once 'UserModel.php';
require_once 'PatientModel.php';
$dr_q = Select ( "*", $GLOBALS ['tbl_users'], "username=?",array($_SESSION['username'])  );
$dr_q->setFetchMode ( PDO::FETCH_CLASS, 'User' );
 if (!$dr=$dr_q->fetch())
 	die("error");
$files = Select ( "*", $GLOBALS ['tbl_file'], "dr_id=?", array($dr->id) );
$files->setFetchMode ( PDO::FETCH_CLASS, 'File' );
// echo "";
$output = '<?xml version="1.0" encoding="utf-8"?><Patients>';
while ( $file = $files->fetch () ) {
	$p = Select ( "*", $GLOBALS ['tbl_patients'], "id=?",array($file->patient_id)  );
	$p->setFetchMode( PDO::FETCH_CLASS, 'Patient');
	if ($tuser = $p->fetch())
	$output = $output."<tUser><name>".$tuser->name."</name><familyname>".$tuser->$familyName."</familyname><birthday>".$tuser->birthday."</birthday><fathername>".$tuser->fathername."</fathername><mother>".$tuser->mothername."</mother><gender>".$tuser->gender."</gender><fileID>".$tuser->fileID."</fileID><id>".$tuser->id."</id><main>".$tuser->main."</main>";
	$output = $output."<second>".$tuser->second_diagnose."</second><ageReg>".$tuser->age_of_reg."</ageReg><birthdayPlace>".$tuser->birth_place."</birthdayPlace><dateReg>".$tuser->date_of_reg."</dateReg><dateDischarge>".$tuser->date_of_discharge."</dateDischarge><address>".$tuser->address."</address><phone>".$tuser->phone."</phone><erjaHosp>".$tuser->erja_hosp."</erjaHosp><last_dr>".$tuser->last_dr."</last_dr>";
	$output = $output."<erjaRegisterTime>".$tuser->erja_register_time."</erjaRegisterTime><transferWay>".$tuser->transfer_way."</transferWay><lastDiagnose>".$tuser->last_diagnose."</lastDiagnose>";
}
$output .="</Patients>";
$query = Select("*", $GLOBALS['tbl_medAdv'], "receiver_id=? and status =?", array($dr->id, 0));
$query->setFetchMode ( PDO::FETCH_CLASS, 'medAdvice' );
$number = $query->rowCount();
$output.="<notif number=".$number.">";
for ($i=0; $i<$number; $i++){
	$adv = $query->fetch();
// 	$output.=
}

echo $output;
?>