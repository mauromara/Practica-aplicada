<?php
$usuario=$_POST['usuario'];
$clave= $_POST['clave'];

$conexion=mysqli_connect("localhost","olgasant_yorg","Postgrado2020*.","olgasant_corpusc");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$consulta="select * from usuarios where correo='$usuario' and password='$clave'";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_num_rows($resultado);
$row=mysqli_fetch_array($resultado);
session_start();
$_SESSION['usuario'] = $row['usuario'];
$_SESSION['nombres'] = $row['nombres'];

//if ($row=mysqli_fetch_array($resultado, MYSQLI_BOTH)) {

	$role = $row["id_tipo_usuario"];
	Switch($role){
		case "1":
			header("location: form/administrador.html");
			break;
		case "2":
			header("location: form/cliente.html");
			break;
		case "3":
			header("location: form/profesional.html");
			break;
		default:
			echo "Error en la autenticacion";
	}
	mysqli_free_result($resultado);
	mysql_close($conexion);
//}
//else{
//	echo "Error en la autenticacion";
// }
?>