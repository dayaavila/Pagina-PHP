<?php
	session_start();
	require_once "menu.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/login.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<form class="contact_form" id="login_form" name="login_form" action="controller.php" method="POST" >
		<h1 class="contact_form">Login</h1>
		<div>
        <ul>
			<li> 
				<input type="text" name="usuario" id="usuario" placeholder="Usuario"/>
			</li>
			<li>
				<input type="password" name="pass_login" id="pwd" placeholder="Password"/>
			</li>
			<li>
				<input type="button" name="envia" value="Login" id="btn_login">
			</li>
		    </ul>
		</div>
		<div id="errorsL"></div>
	</form>
	
</body>
</html>