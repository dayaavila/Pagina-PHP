<?php
	session_start();
	require_once "menu.php";
	require_once "classArticulos.php";	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
</head>
<body>
<?php

	$articulos = Articulos::get_from_file();
	// $texto_deficion = Articulos::getSubString($value[2]);

	echo '<div class="flex">';

	foreach ($articulos as $key => $value)
	{
		if($key>0)
		{
			// $texto_deficion = getSubString($value[2]);			
			echo '<div class="pelicula"><div><img src="img/'.$value[0].'" style="width:100%;height:16%;"></div>';
			echo '<div class="titulo">'.$value[1].'</div>';
			echo '<div class="texto">'.$value[2].'</div></div>';
		}
	}
	echo '</div>';   
	// var_dump($articulos);  
?>
</body>
</html>
