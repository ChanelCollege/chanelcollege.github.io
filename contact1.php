<!DOCTYPE html>

<html lang="en">
<head>
	<title>Chef On The Run</title>
	<meta charset="utf-8">
	<link href="layout.css" rel="stylesheet" type="text/css">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>

<body class="body">
	<!--Body of my website-->


	<div class="Top">
		<img alt="Header- Chef On The Run" class="image1" src="img/head.png"> <!--Header Image-->
		 <img alt="Header- Chef On The Run" class="image2" src="img/logo.png"> <!--Header Image-->


		<nav>
			<label class="icon" for="drop">&#9776;</label> <input id="drop" type="checkbox">

			<ul class="topnav">
				<li class="active">
					<a href="index.html">Home</a>
				</li>


				<li>
					<a href="menu.html">Menu</a>
				</li>


				<li>
					<a href="contact1.php">Contact Us</a>
				</li>
			</ul>
		</nav>
	</div>
	<!--top-->


	<article class="topcontent">
		<div style="text-align:center">
			<h2>Contact Us</h2>


			<p>If you feel the need to contact me, simply fill in the form below and I will get back to you as soon as possible!</p>
		</div>


		<div class="container">
			<!--Contact form-->


			<div id="feedback">
				<div class="head">
					<h3>Contact Form</h3>
				</div>
				<!--head-->


				<form action="#" id="form" method="post" name="form">
					<input name="vname" placeholder="What's Your Name" type="text" value=""> <input name="vemail" placeholder="What's Your Email" type="text" value=""> <input name="sub" placeholder="Subject" type="text" value=""> <label>Message</label> 

					<textarea name="msg" placeholder="How Can I Serve You.."></textarea> <input id="send" name="submit" type="submit" value="Send Message">
				</form>
				<?php include "secure_email_code.php"?>
			</div>
			<!--feedback-->
		</div>
		<!--container-->
	</article>
	<!--topcontent-->


	<article class="bottomcontent">
		<header>
			<h3>Other ways of contacting me:</h3>
		</header>


		<p>Mobile:(021) 126-552</p>


		<p>E-mail: <a href="Terryswannz@outlook.co.nz" title="Terryswansonnz@outlook.co.nz ">Terryswansonnz@outlook.co.nz</a></p>
	</article>
	<!--bottomcontent-->


	<footer class="mainFooter">
		<p>Designed by Jorin Broomhall</p>
	</footer>
</body>
</html>