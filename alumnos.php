<html>
<head>
	<title></title>
</head>
<body>
<?php

class Alumno
	{
		public $nombre; 
		public $apellido;

		public function Mostrar()
		{
			$this->RetornarDatos();
		}

		private function RetornarDatos()
		{
			echo "Su nombre es: ".$this->nombre." y su apellido es: ".$this->apellido;
		}

		public static function MostrarEstatico($mialumno)//no lleva tipo - solo el nombre de lo que va a recibir
		{
			$mialumno->Mostrar();
		}
		
	}

<?

</body>
</html>
