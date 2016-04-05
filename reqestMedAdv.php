<?php
require_once 'config.php';
if(isset($_POST['DBH'])){
	try {
// 		$d->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$GLOBALS['DBH']->beginTransaction();
		Insert($GLOBALS['tbl_medAdv'], "()", $values, array());
// 		$dbh->exec("insert into staff (id, first, last) values (23, 'Joe', 'Bloggs')");
// 		$dbh->exec("insert into salarychange (id, amount, changedate)
//       values (23, 50000, NOW())");
		$GLOBALS['DBH']->commit();
	
	} catch (Exception $e) {
		$GLOBALS['DBH']->rollBack();
		echo "Failed: " . $e->getMessage();
		file_put_contents ( 'PDOErrors.txt', $e->getMessage () . "time: \r\n" . time (), FILE_APPEND );
		
	}
}
	
?>