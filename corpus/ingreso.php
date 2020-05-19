<?php
$usuario=$_POST['usuario'];
$clave= $_POST['clave'];

$conexion=mysqli_connect("localhost","root","Savcoinc1.","olgasant_corpusc");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$consulta="select * from usuarios where numero_documento='$usuario' and password='$clave' and estado = 1";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_num_rows($resultado);
$row=mysqli_fetch_array($resultado);
session_start();
$_SESSION['usuario'] = $row['usuario'];
$_SESSION['correo'] = $row['correo'];
$_SESSION['id_usuario'] = $row['id_usuario'];


//if ($row=mysqli_fetch_array($resultado, MYSQLI_BOTH)) {

	$role = $row["id_tipo_usuario"];
	Switch($role){
		case "1":
			header("location: /corpus/form/administrador.php");
			break;
		case "2":
			header("location: /corpus/form/cliente.php");
			break;
		case "3":
			header("location: /corpus/form/profesional.php");
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