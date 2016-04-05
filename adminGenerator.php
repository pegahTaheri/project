<?php
header("Content-Type: text/xml");
require_once 'config.php';
$users = Select ( "*", $GLOBALS ['tbl_tUsers'], null, null );
$users->setFetchMode ( PDO::FETCH_CLASS, 'TempUser' );
// echo "";
$output = '<?xml version="1.0" encoding="utf-8"?><tempUsers>';
while ( $tuser = $users->fetch () ) {
	$output = $output."<tUser><name>".$tuser->name."</name><username>".$tuser->username."</username><id>".$tuser->id."</id><hospital>".$tuser->hospital."</hospital></tUser>";
}
$output .="</tempUsers>";
echo $output;
?>