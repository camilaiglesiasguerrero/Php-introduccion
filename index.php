<html>
<head>
	<title></title>
</head>
<body>
Camila
<?php 
//include_once"alumnos.php";//si no funciona tira un Warning
require_once(alumnos.php);

	echo "<br>"; //echo muestra en pantalla - String sólo . <br> es salto de linea
	echo "Hola";
	
	$nombre = "Juan"; // variables se designan con $
	echo "<br>";
	echo $nombre; 
	echo "<br>";

	print ("Su nombre es: ".$nombre); // concateno con punto - print similar a C -- le puedo dar formato
	echo "<br>";

	$numero = 35;

	if($numero > 18)
	{
		echo "Es mayor de edad";
	}
	else
	{
		echo "Es menor de edad";
	}
	echo "<br>";
	echo "<h1>".$nombre."</h1>"; // Para poder incrustarlo en el html. Esto así se incrusta tal cual en el html

	
	$miarray = array(2,4,6);
	foreach ($miarray as $elemento) 
	{
		echo "<br>".$elemento;
	}
	echo "<br>";
	var_dump($miarray); // sirve para inspeccionar elementos

	$minuevoarray = array("pizza"=>20,"Coca Cola"=>25,"Empanadas"=>15);
	echo "<br>";
	var_dump($minuevoarray);

	$arrayClaveValor=array("nombre"=>"Camila","apellido"=>"Iglesias","Soltero"=>true,"Fecha de nacimiento"=>"25/04/1991");
	echo "<br>";
	var_dump($arrayClaveValor);

	$arrayVacio = array();
	$arrayVacio[0]="Hola";
	var_dump($arrayVacio);
	echo "<br>";
	$arrayVacio[]="Chau";
	var_dump($arrayVacio);

/*	$arrayVacio[]=$minuevoarray; // Crea uhn array de array
	echo "<br>"; 
	var_dump($arrayVacio);*/

	$arrayVacio["Productos"]=$minuevoarray; // Mi array tiene un atributo que se llama "Productos", crea array de array
	echo "<br>"; 
	var_dump($arrayVacio);

	echo "<br>"; 
	echo $arrayVacio["Productos"]["pizza"];

	echo "<br>"; 
	$objeto = new stdClass();//Standar Class - clase estandar no muy performante
	$objeto->nombre = "Camila"; //No es necesario armar la clase
	$objeto->apellido = "Iglesias";
	$objeto->Soltero = true;
	$objeto->fechaNacimiento = "25/04/1991";
	$objeto->Productos = $minuevoarray;
	var_dump($objeto);
	echo "<br>"; 
	echo "<br>"; 

	//extend es para herencia
	

	$yo = new Alumno();
	$yo->nombre="Camila"; // no importa los niveles, las variables siempre llevan un sólo signo $ pesos. Al principio de la declaración
	$yo->apellido="Iglesias";
	var_dump($yo);
	echo "<br>";

	$yo->fechaNac="25/04/1991"; // si bien la case tiene dos variables, dinámicamente puedo crear más atributos
	var_dump($yo);
	echo "<br>";
	echo "<br>Método de instancia<br>";
	$yo->Mostrar();
	
	$yo->Soltero=true;

	echo "<br>Método estático<br>";
	Alumno::MostrarEstatico($yo);//llamada de método estático
	echo "<br>";

	echo $yo->nombre."<br>";

	foreach ($yo as $atributo) 
	{
		var_dump($atributo);
	}

	//echo $yo["nombre"];//Fatal error: Cannot use object of type Alumno as array in C:\xampp\htdocs\Programacion3_Clase2\index.php on line 126 - No puedo usar un objeto como si fuese un array
	//echo $minuevoarray->pizza; no se puede usar un array ocmo si fuese un objeto



?>
</body>
</html>