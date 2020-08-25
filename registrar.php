registrar.php

//Cuando se hace clic en registrar empleamos PDO para una mejor aplicacion de la base de datos
<?php
		echo "<h1>Datos Registrados</h1>";
		include 'conexion.php';
		if(isset($_POST['envia'])){
			//echo "Viene desde el formulario";
			$comando = $pdo ->prepare("insert into registro(nomregistro,aperegistro,celregistro,usuregistro,claregistro) values(?,?,?,?,?)");
			$nomregistro = $_POST['nombre'];
			$aperegistro = $_POST['apellido'];
			$celregistro = $_POST['celular'];
			$usuregistro = $_POST['usuario'];
			$claregistro = $_POST['clave'];

			$comando->bindParam(1,$nomregistro);
			$comando->bindParam(2,$aperegistro);
			$comando->bindParam(3,$celregistro);
			$comando->bindParam(4,$usuregistro);
			$comando->bindParam(5,$claregistro);

			$comando->execute();
			echo "Datos Registrados <br>";
		}else{
			echo "Error";
		}
	?>