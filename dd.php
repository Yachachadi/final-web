<html>
	<head>
		<meta charset='utf-8'>
		<title>Brown</title>
		<meta name ="viewpont" content="width=device-width, initial-scale=1.0">
	    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	    <link rel="stylesheet" href="css/styles.css">
		<link href="styles/fonts.css" type="text/css" rel="stylesheet">
		<link href="styles/style.css" type="text/css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/mainsc.js"></script>
		<link rel="icon" href="0004.png" type="favicon/x-icon" >\
		
	</head>
	<body>
			<!--Popup Start-->
		<div id="popups">
			<div id="popup-bg" style="display: none;"></div>
			<div class="wrapper">
				<div class="popup-box callback" id="callback-box" name="callback-box" style="display: none;">
					<i class="icon icon-close"></i>
					<div class="popup-header">
						<h4> Free call</h4>
					</div>
					<div class="popup-help">
						<span>Leave your number<br/> we will certanly call you back as soon as possible</span>
					</div>
					<div class="popup-body">
						<form method="post">
							<input type="text" placeholder="User" autocomplete="off" autocorrect="off" autocapitalize="off">
							<input type="text" placeholder="Phone number" autocomplete="off" autocorrect="off" autocapitalize="off">
							<i class="icon icon-send"></i>
						</form>
					</div>
				</div>
				<div class="popup-box faq" id="faq-box" name="faq-box" style="display: none;">
					<i class="icon icon-close"></i>
					<div class="popup-header">
						<h4>Help center</h4>
					</div>
					<div class="popup-help">
						<span>Do you have problems?<br/>Don't worry <br/> we will solve them as soon as possible.</span>
					</div>
					<div class="popup-body">
						<form method="post">
							<input type="text" placeholder="Phone number" autocomplete="off" autocorrect="off" autocapitalize="off">
							<input type="text" placeholder="Your problem" autocomplete="off" autocorrect="off" autocapitalize="off">
							<i class="icon icon-send"></i>
						</form>
					</div>
				</div>
				<div class="popup-box sign-in" id="sign-in-box" name="sign-in-box" style="display: none;">
					<i class="icon icon-close"></i>
					<div class="popup-header">
						<h4>Log in</h4>
					</div>
					<div class="popup-help">
						<span>Don't you have an account?<br/><a href="index3.html">Sign up</a></span>
					</div>
					<div class="popup-body">
						<form method="post">					
							<input type="text" placeholder="Email" autocomplete="off" autocorrect="off" autocapitalize="off">
							<input type="text" placeholder="Password" autocomplete="off" autocorrect="off" autocapitalize="off">
						
							<i class="icon icon-send"></i>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--Popup End-->

		<!--Header Start-->
		<div class="wrapper">
			<div id="header">
				<div id="logotype">
					<a href="index.php" title="Home"></a>
				</div>
				<div id="inform-bar">
					<div>
						<i class="icon icon-call-center"></i>
						<span>8 (708) 656-35-58</span>
						<a class="callback-caller"><p>Order free call</p></a>
					</div>
					<div class="disable">
						<i class="icon icon-faq-center"></i>
						<span>Help center</span>
						<a class="faq-caller"><p>Problems?</p></a>
					</div>
				</div>
				<div id="user">
					<div id="sign-in">
						<span class="separator">•</span>
						<a href ="index4.php"title="Log in" class="sign-caller">Log in</a>
						<span class="separator">•</span>
						<a href="index3.php" title="Registration">Sign up</a>
					</div>
					
				</div>
			<div class="clear"></div>
			</div>
		</div>
		<!--Header End-->
		<!--Menu Start-->
		<div id="menu">
			<div class="wrapper">
				<nav>
					<ul>
						<a href="index.php" title="Home page" class="active"><li>Home</li></a>
						<a href="" title="Famous pages"><li>News</li></a>
						<a href="about.php" title="Who we are and what we do"><li>About us</li></a>
						<a href="contacts.php" title="Back call"><li>Contacts</li></a>
					</ul>
				</nav>
				<div id="search">
					<form method="post">
						<input type="text" name="search" placeholder="Search">
						<a href="" title="Search"><i class="icon icon-search"></i></a>
					</form>				
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<!--Menu End-->


	</body>
</html>