validar.php
//Esta opción es importante en la aplicacion, busca el usuario y el registro de la tabla en caso que todo
//este bien muestra el nombre del usuario de lo contrario muestra error.
<?php
		echo "<h1>Iniciaste sesión</h1>";
		include 'conexion.php';
		if(isset($_POST['envia'])){
			//echo "Viene desde el formulario";
			$comando = $pdo ->prepare("select nomregistro,usuregistro from registro where usuregistro=? and claregistro=?");
			
			$usuregistro = $_POST['usuario'];
			$claregistro = $_POST['clave'];

			$comando->bindParam(1,$usuregistro);
			$comando->bindParam(2,$claregistro);

			$comando->execute();
			$reg = $comando->rowCount();
			
			//echo $reg;
			if ($reg == 1){
				$resultado = $comando->fetchColumn();
				
				echo "Bienvenido : " .$resultado;
			}
			
		}else{
			echo "Error";
		}
	?>
