<?php
	session_start();
	require_once "menu.php";	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
	<meta charset="utf-8">
</head>
<body>
	<form class="contact_form" id="contact_form" name="regis" action="controller.php" method="POST">
		<h1 class="contact_form">Registro</h1>
		<div>
			<ul>
			<li> 
				<input type="text" name="nombre" id="name" placeholder="Nombre"/>
			</li>
			<li> 
				<input type="text" name="usuario" id="user" placeholder="Usuario"/>
			</li>
			<li>
				<input type="password" name="pass" id="pwd" placeholder="Password"/>
			</li>
			<li>
				<input type="password" name="pass_repeat" id="pws_repeat" placeholder="Repita Password"/>
			</li>
			<li>
				<input type="email" name="email" id="email" placeholder="E-mail"/>
			</li>
			<li>
				<input type="submit" name="enviar" value="Registro"/>
			</li>
		    </ul>
		</div>
		<div id="errors"></div>
	</form>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>

