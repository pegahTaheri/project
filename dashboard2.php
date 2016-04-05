<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>داشبورد</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<meta name="description" content="Responsive tabbed layout component built with some CSS3 and JavaScript">
		<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- <link rel="stylesheet" type="text/css" href="css/global.css"> -->
		<style type="text/css">
			@font-face {
				font-family: 'yekan';
				src: url('css/fonts/IRYekan.eot');
				src: url('css/fonts/IRYekan.woff') format('woff'), url('css/fonts/IRYekan.ttf') format('truetype');
				font-weight: normal;
				font-style: normal;
			}

			body {
				font-family:‌ 'yekan';
				/*direction: rtl;*/
				width:100%;
				/*height:100%;*/
			}
			body *{
				font-family: 'yekan';
			}
			/*body {
				width: 100%;
			}*/
			div.fixed_nav_bar{
				direction: rtl;
			}
			#fixed {
				direction: rtl;
				/*position: fixed;*/
				z-index: 2;
			}
			#sticky-bar {
				position: fixed;
				top: 0;
				z-index: 2;
				background-color: rgba(255,255,255,1);
				width: 100%;
				padding-top: 10px;
			}
			#sticky-bar ul {
			    margin-top: 15px;
			    vertical-align: top;
			    font-size: 0.8em;
			    display: inline-block;
			}
			#sticky-bar li {
			    margin-right: 20px;
			}
			#sticky-bar li:after {
				content: "|";
			    margin-right: 20px;
			}
			#sticky-bar li:last-child:after {
				content: "";
			}

			#sticky-bar form {
				display: inline-block;
				margin: 1% 2% 0 0;
				position: relative;
			}
			img#logo {
				width: 100px;
				float: left;
				margin-left: 50px;
				padding-bottom: 10px;
			}
			img#profile-picture {
				/*position: relative;*/
				width: 48px;
				height: 48px;
				border-radius: 50%;
				margin-right: 25px;
				/*border: 3px solid #fff;*/
			}

			/*img#profile-picture:hover {
				border: 3px solid #444;
				border-radius: 25%;
				opacity: 0.9;
			}*/

			span#user_name {
				display: inline-block;
			    vertical-align: top;
			    margin-top: 15px;
			    margin-right: 5px;
			}
			ul#user-details li {
				cursor: pointer;
				display: inline-block;
			}
			ul#user-details {
				display: inline-block;
			}
			.c-tab.c-tab__content{
				direction: rtl;
			}
			.o-main.container.o-section.c-tabs.c-tabs-nav.c-tabs-nav__link span{
				direction: rtl;
			}
			.direction_rtl{
				direction: rtl;
			}

			/* navigation */
			body,html{
			    height: 100%;
			  }

			  nav.sidebar, .main{
			    -webkit-transition: margin 200ms ease-out;
			      -moz-transition: margin 200ms ease-out;
			      -o-transition: margin 200ms ease-out;
			      transition: margin 200ms ease-out;
			  }

			  .main{
			    padding: 10px 10px 0 10px;
			  }

			 @media (min-width: 765px) {

			    .main{
			      position: absolute;
			      width: calc(100% - 40px); 
			      margin-left: 40px;
			      float: right;
			    }

			    nav.sidebar:hover + .main{
			      margin-left: 200px;
			    }

			    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
			      margin-left: 0px;
			    }

			    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
			      text-align: center;
			      width: 100%;
			      margin-left: 0px;
			    }
			    
			    nav.sidebar a{
			      padding-right: 13px;
			    }

			    nav.sidebar .navbar-nav > li:first-child{
			      border-top: 1px #e5e5e5 solid;
			    }

			    nav.sidebar .navbar-nav > li{
			      border-bottom: 1px #e5e5e5 solid;
			    }

			    nav.sidebar .navbar-nav .open .dropdown-menu {
			      position: static;
			      float: none;
			      width: auto;
			      margin-top: 0;
			      background-color: transparent;
			      border: 0;
			      -webkit-box-shadow: none;
			      box-shadow: none;
			    }

			    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
			      padding: 0 0px 0 0px;
			    }

			    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
			      color: #777;
			    }

			    nav.sidebar{
			      width: 200px;
			      height: 100%;
			      margin-left: -160px;
			      float: left;
			      margin-bottom: 0px;
			    }

			    nav.sidebar li {
			      width: 100%;
			    }

			    nav.sidebar:hover{
			      margin-left: 0px;
			    }

			    .forAnimate{
			      opacity: 0;
			    }
			  }
			   
			  @media (min-width: 1330px) {

			    .main{
			      width: calc(100% - 200px);
			      margin-left: 200px;
			    }

			    nav.sidebar{
			      margin-left: 0px;
			      float: left;
			    }

			    nav.sidebar .forAnimate{
			      opacity: 1;
			    }
			  }

			  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
			    color: #CCC;
			    background-color: transparent;
			  }

			  nav:hover .forAnimate{
			    opacity: 1;
			  }
			  section{
			    padding-left: 15px;
			  }
			  /* /navigation */
			  input{
			  	width: 100%;
			  	padding: 10px;
			  	border-radius: 5px;
			  }
			  .row{
			  	margin-top: 15px;
			  }
			  select{
			  	width: 100%;
			  }
			  .2-span{
			  	width: 50%;
			  }
		</style>
		<script src="js/jquery-1.11.3.js"></script>
		<script src="js/functions.js"></script>
		<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
		<script>

			<?php if(!isset($_SESSION['user_id'])): ?>
			login_if_remember('./ajax/login.php', './dashboard.php', function(){
				window.location = './login.php';
			});
			<?php endif; ?>
			
			$(function(){
				$('#logout').click(function() {
					logout('ajax/logout.php', './login.php');				
				});

				$('#tile_content').hide();

				$('.hover').hide();

				$('span.title').hide();

				

				var clicked_on = null;
				$('.hover-menu .hover-item').click(function() {
					clicked_on = $(this).attr('id');
					$('#main-menu').fadeOut('slow', click_handler(clicked_on));
				});

			});

			var size_array = ['کوچک', 'بزرگ'];
			var border_array = ['بدون کادر', 'بالا', 'پایین', 'بالا و پایین'];
			var size = 0;
			var border = 0;
			var block = null;

			

		</script>
	</head>
	<body>
		<div id="fixed" class="nav_fixed_bar">
			<div id="sticky-bar">
				<img id="profile-picture" src="<?php echo $_SESSION['user_profile_picture'] ?>"><span id="user_name"><?php echo $_SESSION['user_name'] ?> خوش اومدی!</span>
				<ul id="user-details"><li id="to-site" onclick="window.location='#'">انتقال به صفحه‌ی خانه</li><li id="logout">خروج</li></ul>
				<img id="logo" src="css/images/Dr_logo.gif" alt="دکتر" />
			</div>
		</div>
		<div class="container-fluid" style="margin-top: 150px">
		  	
		  <div class="row">
		  	<div class="col-xs-2" style="">
		  		<nav class="navbar navbar-default sidebar" role="navigation">
		  		    <div class="container-fluid">
		  		    <div class="navbar-header">
		  		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
		  		        <span class="sr-only">Toggle navigation</span>
		  		        <span class="icon-bar"></span>
		  		        <span class="icon-bar"></span>
		  		        <span class="icon-bar"></span>
		  		      </button>      
		  		    </div>
		  		    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
		  		      <ul class="nav navbar-nav">
		  		        <li class="active"><a href="#">اطلاعات شخصی<span style="font-size:16px;" class="fa fa-home pull-right hidden-xs showopacity"></span></a></li>
		  		        <li class="dropdown">
		  		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">مشاهده بیماران <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
		  		          <ul class="dropdown-menu forAnimate" role="menu">
		  		            <!-- <li><a href="{{URL::to('createusuario')}}">یک</a></li>
		  		            <li><a href="#">دو</a></li>
		  		            <li><a href="#">سه</a></li>
		  		            <li class="divider"></li> -->
		  		            <li><a href="#">بیماران حاضر</a></li>
		  		            <li class="divider"></li>
		  		            <li><a href="#">کل بیماران</a></li>
		  		          </ul>
		  		        </li>          
		  		        <li ><a href="#">بیمار جدید<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
		  		        <li ><a href="#">جستجو در بیماران<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphifacon glyphicon-tags"></span></a></li>
		  		      </ul>
		  		    </div>
		  		  </div>
		  		</nav>
		  		<div>
		  	  	
		  	  </div>
		  	</div>
		    <div class="col-xs-10" style="margin-top: -100px">
		 				<header class="o-header">
		 				  <br>
		 				  <div cass="o-container">
		 				    <h1 class="o-header__title"></h1>
		 				  </div>
		 				</header>

		 				<main class="o-main">
		 				  <div class="o-container">

		 				    <div class="o-section">
		 				      <div id="tabs" class="c-tabs no-js">
		 				        <div class="c-tabs-nav">
		 				          <a href="#" class="c-tabs-nav__link is-active">
		 				            <i class="fa fa-home"></i>
		 				            <span class="direction_rtl">اطلاعات فردی</span>
		 				          </a>
		 				          <!-- <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-book"></i>
		 				            <span class="direction_rtl">اطلاعات عمومی</span>
		 				          </a> -->
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-heart"></i>
		 				            <span class="direction_rtl">علت بستری و PI</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-calendar"></i>
		 				            <span class="direction_rtl">PMH</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">سابقه بارداری مادر</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">سابقه بارداری مادر</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">سابقه بارداری مادر</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">FH</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">علاپم بالینی</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">سیر بیماری</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">سایر اقدامات تشخیص</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">سایر اقدامات درمانی</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">مشاوره</span>
		 				          </a>
		 				          <a href="#" class="c-tabs-nav__link">
		 				            <i class="fa fa-cog"></i>
		 				            <span class="direction_rtl">سرانجام</span>
		 				          </a>
		 				        </div>
		 				        <div class="c-tab is-active">
		 				          <div class="c-tab__content direction_rtl">
		 				            <div class="container-fluid">
		 				            	<div class="row">
		 				            		<div class="col-xs-4">
		 				            			<input type="text" name="name" value="" placeholder="نام و نام خانوادگی مادر">
		 				            		</div>
		 				            		<div class="col-xs-4">
		 				            			<input type="text" name="name" value="" placeholder="نام پدر">
		 				            		</div>
		 				            		<div class="col-xs-4">
		 				            			<!-- <label for=""></label> -->
		 				            			<input type="text" name="name" value="" placeholder="نام خود را وارد کنید">
		 				            		</div>
		 				            	</div>
		 				            	<div class="row">
		 				            		<div class="col-xs-4">
		 				            			<input type="text" name="cityBorn" value="" placeholder="محل تولد">
		 				            		</div>
		 				            		<div class="col-xs-4">
		 				            			<select name="gender">
		 				            				<optgroup label="جنسیت">
		 				            					<option value="male">مذکر</option>
		 				            					<option value="female">مونث</option>
		 				            				</optgroup>
		 				            			</select>
		 				            		</div>
		 				            		<div class="col-xs-4">
		 				            			<input type="text" name="name" value="" placeholder="سن زمان بستری">
		 				            		</div>
		 				            	</div>
		 				            	<div class="row">
		 				            		<div class="col-xs-6">
		 				            			<input type="text" name="GoToHospital" value="" placeholder="تاریخ بستری مثال: ۱۳۷۲/۰۷/۰۴">
		 				            		</div>
		 				            		<div class="col-xs-6">
		 				            			<input type="text" name="GoOutFromHospital" value="" placeholder="تاریخ ترخیص مثال: ۱۳۷۲/۰۷/۰۴">
		 				            		</div>
		 				            	</div>
		 				            	<div class="row">
		 				            		<div class="col-xs-3">
		 				            			<input type="text" name="PhoneNumber" value="" placeholder="تلفن">
		 				            		</div>
		 				            		<div class="col-xs-9">
		 				            			<input type="text" name="Address" value="" placeholder="آدرس محل سکونت">
		 				            		</div>
		 				            	</div>
		 				            	<div class="row">
		 				            		<div class="col-xs-4">
		 				            			<input type="text" name="pezeshkMoalejGhabliNozad" value="" placeholder="پزشک معالج قبلی نوزاد">
		 				            		</div>
		 				            		<div class="col-xs-4">
		 				            			<input type="text" name="erja" value="" placeholder="مدت بستری قبل از ارجاع">
		 				            		</div>
		 				            		<div class="col-xs-4">
		 				            			<input type="text" name="modatBastariGhableErja" value="" placeholder="ارجاع از">
		 				            		</div>
		 				            	</div>
		 				            	<div class="row">
		 				            		<div class="col-xs-12">
		 				            			<input type="text" name="nahveyeEnteghal" value="" placeholder="نحوه انتقال">
		 				            		</div>
		 				            	</div>
		 				            	<div class="row">
		 				            		<div class="col-xs-12">
		 				            			<input type="text" name="tashkhisDarBastariGHabli" value="" placeholder="تشخیص در بستری قبلی">
		 				            		</div>
		 				            	</div>
		 				            </div>
		 				            
		 				          </div>
		 				        </div>
		 				        <div class="c-tab">
		 				          <div class="c-tab__content direction_rtl">
		 				            <h2>اطلاعات بستری و PI</h2>
		 				            
		 				          </div>
		 				        </div>
		 				        <div class="c-tab">
		 				          <div class="c-tab__content direction_rtl">
		 				            <div class="container-fluid">
		 				            	<div class="row">
 				            				<div class="col-xs-1">
 				            					<select>
 				            					 	<optgroup label="نوع زایمان">
 				            					 		<option value="">طبیعی</option>
				            					 		<option value="">سزارین</option>
 				            					 	</optgroup>
 				            					</select>
 				            				</div>
		 				            		<div class="col-xs-2">
		 				            			<input type="text" name="birthday" value="" placeholder="قد زمان تولد">
		 				            		</div>
		 				            		<div class="col-xs-2">
		 				            			<input type="text" name="birthday" value="" placeholder="دور سر زمان تولد">
		 				            		</div>
		 				            		<div class="col-xs-1">
		 				            			<input type="text" name="birthday" value="" placeholder="وزن تولد">
		 				            		</div>
		 				            		<div class="col-xs-1">
		 				            			<input type="text" name="birthday" value="" placeholder="هفته">
		 				            		</div>
		 				            		<div class="col-xs-1">
		 				            			<input type="text" name="birthday" value="" placeholder="سن حاملگی">
		 				            		</div>
		 				            		<div class="col-xs-2">
		 				            			<input type="text" name="birthday" value="" placeholder="ساعت تولد">
		 				            		</div>
		 				            		<div class="col-xs-2">
		 				            			<input type="text" name="birthday" value="" placeholder="تاریخ تولد">
		 				            		</div>
		 				            	</div>

 				            			<div class="row">
 				            				<div class="col-xs-3">
 				            					<input type="text" name="birthday" value="" placeholder="آپگار دقیقه بیستم">
 				            				</div>
 				            				<div class="col-xs-3">
 				            					<input type="text" name="birthday" value="" placeholder="آپگار دقیقه پنجم">
 				            				</div>
 				            				<div class="col-xs-3">
 				            					<input type="text" name="birthday" value="" placeholder="آپگار دقیقه اول">
 				            				</div>
 				            				<div class="col-xs-3">
 				            					<input type="text" name="birthday" value="" placeholder="علت سزارین">
 				            				</div>
 				            			</div>

 				            			<div class="row">
 				            				<div class="col-xs-12">
 				            					<input type="text" name="birthday" value="" placeholder="سابقه بستری قبلی">
 				            				</div>
 				            			</div>
 				            			<div class="row">
 				            				<div class="col-xs-12">
 				            					<input type="text" name="birthday" value="" placeholder="سابقه مصرف دارو">
 				            				</div>
 				            			</div>
		 				            </div>
		 				          </div>
		 				        </div>
		 				        <div class="c-tab">
		 				          <div class="c-tab__content direction_rtl">
		 				            <div class="container-fluid">
		 				            	<div class="row">
		 				            		<div class="col-xs-3">
		 				            			<span class="2-span">
		 				            				<input type="number" name="G" value="" placeholder="G">
		 				            			</span>
		 				            			<!-- <span class="2-span">G</span> -->
		 				            		</div>
		 				            		<div class="col-xs-3">
		 				            			<span class="2-span">
		 				            				<input type="number" name="P" value="" placeholder="P">
		 				            			</span>
		 				            			<!-- <span class="2-span">P</span> -->
		 				            		</div>
		 				            		<div class="col-xs-3">
		 				            			<span class="2-span">
		 				            				<input type="number" name="Ab" value="" placeholder="Ab">
		 				            			</span>
		 				            			<!-- <span class="2-span">Ab</span> -->
		 				            		</div>
		 				            		<div class="col-xs-3">
		 				            			<span class="2-span">
		 				            				<input type="number" name="L" value="" placeholder="L">
		 				            			</span>
		 				            			<!-- <span class="2-span">L</span> -->
		 				            		</div>
		 				            	</div>

		 				            	<div class="row">
		 				            		<div class="col-xs-2" style="float: right;">
		 				            			<input type="text" name="BG.Rh" value="" placeholder="گروه خونی">
		 				            		</div>
		 				            		<div class="col-xs-2" style="float: right">
		 				            			<input type="number" name="" value="" placeholder="چند قلویی">
		 				            		</div>
		 				            	</div>
		 				            	<div class="row">
		 				            		<div class="col-xs-12">
		 				            			<input type="text" name="" value="" placeholder="سابقه بارداری مادر">
		 				            		</div>
		 				            	</div>
		 				            	<div class="row">
		 				            		<div class="col-xs-12">
		 				            			<input type="text" name="" value="" placeholder="داروهای مصرفی مادر">
		 				            		</div>
		 				            	</div>
		 				            </div>
		 				          </div>
		 				        </div>
		 				        <div class="c-tab">
		 				          <div class="c-tab__content direction_rtl">
		 				            <h2>سابقه بارداری مادر</h2>
		 				            
		 				          </div>
		 				        </div>
		 				      </div>
		 				    </div>

		 				    <!-- <div class="o-section">
		 				      <div id="github-icons"></div>
		 				    </div> -->
		 				  </div>
		 				</main>

		 				<footer class="o-footer">
		 				  <div class="o-container">
		 				  	<h1>پرونده بیمار</h1>
		 					 <!-- <small>&copy; 2015, callmenick.com</small> -->
		 				  </div>
		 				</footer>
     
		    </div>
		    
		  </div>
		</div>
		 
		<script src="js/src/tabs.js"></script>
		<script>
		  var myTabs = tabs({
		    el: '#tabs',
		    tabNavigationLinks: '.c-tabs-nav__link',
		    tabContentContainers: '.c-tab'
		  });

		  myTabs.init();
		</script>

	</body>
</html>