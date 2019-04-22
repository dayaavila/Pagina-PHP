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
	<link rel="stylesheet" type="text/css" href="css/vista_detalle.css" media="screen"/>
</head>
<body>
<?php

	$articulos = Articulos::get_from_file();
    $img = end($articulos)[0];
	$art_name = end($articulos)[1];
	$descrip= end($articulos)[2];

	echo '<div class="box">';
	echo '<div class="foto"><div><img src="img/'.$img.'" style="width:900px;height:250px;"></div>';
	echo '<div class="tema">'.$art_name.'</div>';
	echo '<div class="text">'.$descrip.'</div></div>';
	echo '</div>';
	// var_dump($articulos);
	
?>
</body>
</html>
	