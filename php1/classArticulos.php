<?php
	class Articulos
	{
		static function get_from_file()
		{	
			$articulos = [];
			$canal = fopen("articulos.txt", "r");

			while(!feof($canal))
			{
				$linea = fgets($canal);
				$partes = explode("|", $linea);
				array_push($articulos, $partes);		
			}
			return $articulos;
				fclose($canal);
		}
			
		static function set_to_file($img, $art_name, $descrip)
		{
			$canal = fopen("articulos.txt", "a+");
			$cadena = PHP_EOL.$img."|".$art_name."|".$descrip."|";
			fputs($canal, $cadena);
			fclose($canal);
			move_uploaded_file($_FILES["user-img-file"]["tmp_name"], "img/".$img);			
		}

		// static function getSubString($string)
		// {
		// 	$length = 150;
		// 	$stringDisplay = substr(strip_tags($string), 0, $length);
		// 	if (strlen(strip_tags($string)) > $length)
		// 		$stringDisplay .= ' ...';
		// 	return $stringDisplay;
		// }
	}
?>