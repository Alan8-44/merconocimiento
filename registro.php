<?PHP
	$hostname_localhost ="68.70.164.26";
	$database_localhost ="polizona_a1";
	$username_localhost ="polizona_a1";
	$password_localhost ="Polizona-2";
	$json=array();
				
		$opcion = $_GET["AL"];
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
		$consulta="insert into empresas values (('".$AL."');";
		$resultado=mysqli_query($conexion,$consulta);
		if($conexion){
			echo "conectado: insert into empresas values (('".$opcion."');";
			}
			
			echo "chale";
			
			json_encode($json);
			mysqli_close($conexion);
		}
		else{
			echo "error";
		}
		
			
	?>
