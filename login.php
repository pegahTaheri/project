<?php
session_start();
require_once 'config.php';
// echo "kkk";
var_dump($_SESSION);
if (isset ( $_SESSION ['login'] )&& $_SESSION['login']==true){
	echo "already logged in"; 
// 	die ( "<script>window.location='./dashboard.php'</script>" );
	$_SESSION ['login']=false;
	$_SESSION['username']="";
	var_dump($_SESSION);
}
function isLoggedIn($username) {
	$rows = Select ( "*", $GLOBALS ['tbl_users'], "username=?", array ($username 
	) );
	if ($row = $rows->fetch ()) {
// 		echo "rows<br>";
		if ($row ['password'] == null) {
			return false;
		}
		else
			return $row;
	}
	else
		return false;

}
if (isset ( $_SESSION ['login'] ) && $_SESSION ['login'] == true) {
// 	echo "hehehe";
// 	die ( "<script>window.location='temp.php'</script>" );
}
else {
	$error = "";
// 	echo"66666666";
	if (isset ( $_POST ['username'] )) {
// 		var_dump ( $_POST );
		if ($row = isLoggedIn ( $_POST ['username'] )) {
// 			var_dump ( $row );
			if ($row ['password'] == $_POST ['password']) {
				$_SESSION ['username'] = $_POST ['username'];
				$_SESSION['user_id'] = $row->id;
				createLog($_SESSION['username'].' logged in.', $transaction);
				// $_SESSION ['passwd'] = $_POST ['passwd'];
				$_SESSION ['login'] = true;
				echo "ok*";
				var_dump($_SESSION);
// 				echo "<script>window.location='index1.php'</script>";
				if (isset ( $_POST ['remember_me'] ) && $_POST ['remember_me'] == 'on') {
// 					echo "did did did";
					setcookie ( "login_user", $_POST ['username'] );
					setcookie ( "login_pass", $_POST ['passwd'] );
					setcookie ( "login_mode", $_SESSION ['user_mode'] );
				}
			}
			else {
				// $arr = getSession ();
				// $_SESSION ['session'] = $arr [0];
				$error = "error";
				echo $error;
			}
		}
	}
	else {
// 		echo "no set";
		// $arr = getSession ();
		// $_SESSION ['session'] = $arr [0];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="lang" content="fa">
<meta charset="utf-8">
<title>ورود به سایت</title>
<link rel="stylesheet" type="text/css" href="css/global.css">
<script src="js/jquery-1.11.3.js"></script>
<!-- <script src="js/functions.js"></script> -->
<style type="text/css">
#signin-container {
	width: 520px;
	margin: 100px auto 0;
}

p.offset {
	padding-right: 50px;
}

p#remember {
	text-align: center;
}

input[type="submit"] {
	border: none;
	padding: 5px;
	background-color: #00a000;
	cursor: pointer;
	border-radius: 5px;
	width: 300px;
	color: #fff;
	text-align: center;
	margin-top: 10px;
}

input[type="submit"]:hover {
	background-color: #026C02;
}

input#register-btn {
	border: none;
	padding: 5px;
	background-color: #a0aa00;
	cursor: pointer;
	border-radius: 5px;
	width: 150px;
	color: #fff;
	text-align: center;
}

input#register-btn:hover {
	background-color: #aaaa00;
}

input#register-btn,input#submit-btn {
	font-size: 1.2em;
	height: 45px;
}

.error {
	position: initial;
}

.ok {
	position: initial;
}

.loading {
	position: initial;
	display: block;
	color: orange;
}
</style>
<script>
			<?php //if(!isset($_SESSION['user_id'])): ?>
// // 			login_if_remember('./ajax/login.php', './dashboard.php', function() { return null; });
			<?php //endif; ?>

// 			$(function(){

// 				$('#username').focus();

// 				$('input[required]').parents('p').each(function() {
// 					$(this).children('label:first').html($(this).children('label:first').html() + ' <span style="color:red;"> * </span>');
// 				});
// 				$(document).on('click', 'input#submit-btn', function(event) {
// 					alert("popopop");
// // 					event.preventDefault();
// 					signin_box_html = $('#signin-box').html();
// 					login('login.php', 'temp.php', function() {
// 						$('#signin-box').html(signin_box_html).hide().slideDown('slow');
// 					});
// 				});
// 			});
		</script>
</head>
<body>
	<div id="signin-container">
		<h2>ورود به داشبورد مدیریت / کاربری</h2>
		<div id="signin-box">
			<form action="login.php" method="post">
				<!-- only for ignoring autocomplete -->
				<input style="display: none"> <input type="password"
					style="display: none">
				<!-- end -->
				<p class="offset">
					<label for="username">نام کاربری </label> <label><input type="text"
						id="username" name="username" class="en" autocomplete="off"
						required></label> <span id="status"></span>
				</p>
				<p class="offset">
					<label for="password">رمز عبور </label> <label><input
						type="password" id="password" name="password" class="en"
						autocomplete="off" required></label>
				</p>
				<p id="remember" class="center">
					<label><input type="checkbox" id="remember_me" name="remember_me"></label>
					<label for="remember_me">مرا به خاطر بسپار!</label>
				</p>
				<p id="submit">
					<input type="button" value="نام‌نویسی کن!" id="register-btn"
						onclick="window.location = 'signup.html'"> <input type="submit"
						value="وارد شو!" id="submit-btn">
				</p>
				<p class="details">&#x26a0; تکمیل فیلدهای ستاره‌دار اجباری است.</p>
			</form>
		</div>
	</div>
</body>
</html>