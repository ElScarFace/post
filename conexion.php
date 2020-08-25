Se ha desarrollado una aplicacion con Base de datos para registrar y mostrar datos.
conexion.php
//Esta conexion es muy importante para así poder conectarnos a la base de datos
<?php
	$host = 'localhost';
	$bd = 'libreria';
	$usuario = 'root';
	$clave = '';

	try{
		//Se ejecuta todo este bloque
		$dsn = "mysql:host=localhost;dbname=$bd";
		//Objeto PDO -> Crear una nueva instancia
		//Se invoca al constructor
		$pdo = new PDO($dsn,$usuario,$clave);
		//Funciones de error del PDO
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}
	catch(PDOException $e){
		//Si es que hay un error
		echo $e->getMessage();		
	}
?>