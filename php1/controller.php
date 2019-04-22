<?php
	session_start();
	require_once "classUsuarios.php";
	require_once "classArticulos.php";
?>

<?php
	if(isset($_POST))
	{
		switch (true) 
		{   //login
			case isset($_POST['pass_login']): 
			
				$usuario = $_POST["usuario"];
				$password = $_POST["pass_login"];
				login($usuario, $password);
				break;
				
			//registro
			case (isset($_POST['pass_repeat'])):
				
				$nombre = $_POST["nombre"];
				$usuario = $_POST["usuario"];
				$password = $_POST["pass"];
				$email = $_POST["email"];
				registro($nombre, $usuario, $password, $email);
				header('location: login.php');
				break;
				
			//insert
			case (isset($_POST['subir'])):

				$img = $_FILES["user-img-file"]["name"]; 
				$art_name = $_POST["nombre_articulo"];
				$descrip = $_POST["comment"];
		
				Articulos::set_to_file($img, $art_name, $descrip);

				// header('location: home.php');

				header('location: vista_detalle.php');
				break;

			default:
				header('location: home.php');
		}
	}
	else
	{
		header('location: home.php');
	}

	function registro($nombre, $usuario, $password, $email)
	{
		$registro = new Usuario($nombre, $usuario, $password, $email);
		$registro->regis($nombre, $usuario, $password, $email);
	}

	function login($usuario, $password)
	{
		$login = new Usuario($usuario, $password);
		$a = $login->log($usuario, $password);
		if($a)
		{
			$_SESSION["user"] = $usuario;
		}
		header('location: home.php');	
	}


?>
