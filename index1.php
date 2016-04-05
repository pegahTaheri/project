<?php
require_once 'config.php';
require_once 'UserModel.php';
// $_SESSION ['login'] = false;
if ($_SESSION['login'] == false)
	echo "<script> window.location='login.php'</script>";
else {
	if ($_SESSION['login']){
// 		echo"yay<br>";
		$rows = Select("*", $GLOBALS['tbl_users'], "username=?", array($_SESSION['username']));
		$rows->setFetchMode ( PDO::FETCH_CLASS, 'User' );
		$u = $rows->fetch();
		
		if ($u->getType() != 2)//admin nabud
			echo "<script> window.location='dashboard.php'</script>";
		else 
			echo "<script> window.location='indexAdmin.php'</script>";
				
	}
}
?>