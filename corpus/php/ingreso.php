<?php
$usuario=$_POST['usuario'];
$clave= $_POST['clave'];

$conexion=mysqli_connect("localhost","root","Savcoinc1.","olgasant_corpusc");
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
			header("location: corpus/form/contactenos.html");
			break;
		case "2":
			header("location: /unificado/facturacion/menu/index-fact.php");
			break;
		case "3":
			header("location: /unificado/facturacion/menu/index-aut.php");
			break;
		default:
			echo "<script>alert('Error en el logue del usuario'); location.href = 'index.html'</script>";
	}
	mysqli_free_result($resultado);
	mysql_close($conexion);
//}
//else{
//	echo "Error en la autenticacion";
// }
?>