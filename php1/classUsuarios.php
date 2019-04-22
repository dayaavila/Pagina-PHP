<?php
	class Usuario
	{
        private $nombre;
        private $usuario;
        private $password;
		private $email;

		public function __construct()
		{
			$total_args = func_num_args();
			$argumentos = func_get_args();

			switch ($total_args) 
			{
				case 2:
					$this->usuario = $argumentos[0];
					$this->password = $argumentos[1];
					break;

				case 4:
					$this->nombre = $argumentos[0];
					$this->usuario = $argumentos[1];
					$this->password = $argumentos[2];
					$this->email = $argumentos[3];
					break;
			}
		}

		public function regis()
		{
			$nombre = $this->nombre;
			$usuario = $this->usuario;
			$password = $this->password;
			$email = $this->email;

			$canal = fopen("registros.txt", "a+");
			$cadena = PHP_EOL . $nombre.";".$usuario.";".$password.";".$email;
			fputs($canal, $cadena);
			fclose($canal);
		}

		public function log()
		{	
			$canal = fopen("registros.txt", "r");
			
			while(!feof($canal))
			{
				$line = fgets($canal);
				$datos = explode(";", $line);
				
				$usuario = $this->usuario;
				$password =$this->password;
				
				if($datos[1] == $usuario && $datos[2]==$password)
				{
					return true;
				}
			}
			return false;
			fclose($canal); 
		}
	}
?>