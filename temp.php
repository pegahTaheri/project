<?php
echo"temp1";
$_SESSION['login']=false;
$_SESSION['username']="";
die ( "<script>window.location='login.php'</script>" );
?>