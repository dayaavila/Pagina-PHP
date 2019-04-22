<?php

if(isset($_SESSION["user"]))
{
	echo '<header id="header">
				<nav>
					<ul class="orden" id="home">
						<li><a href="home.php">Home</a></li>
					</ul>
					<ul class="orden" id="login">
						<li class="segundo" id="log"><a href="insertar_art.php">Insertar Cantante</a></li>
						<li class="segundo" id="log"><a href="vista_detalle.php">Vista Detalle</a></li>
						<li class="segundo" id="log"><a href="#">Bienvenido'." " . $_SESSION["user"] .'</a></li>
						<li class="segundo" id="reg"><a href="desconectar.php">Salir</a></li>
					</ul>
				</nav>
			</header>';
}
else
{
	echo '<header id="header">
				<nav>
					<ul class="orden" id="home">
						<li><a href="home.php">Home</a></li>
					</ul>
					<ul class="orden" id="login">
						<li class="segundo" id="log"><a href="login.php">Login</a></li>
						<li class="segundo" id="reg"><a href="registro.php">Registro</a></li>
					</ul>
				</nav>
			</header>';
}
?>







