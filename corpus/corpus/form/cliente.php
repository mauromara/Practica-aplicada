<?php 

  session_start();
  error_reporting(0);
  
?>

<?php
    require('conexion.php');
    $query = "SELECT id_sede, nombre_sede FROM sedes";
    $resultado= $mysqli->query($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="UTF-8">
	<link rel="Stylesheet" type="text/css" href="../css/estilo_formularios.css">
</head>
<body>
	<div id = "contenedor">

		<header>
			<img class="imagen1" src="../img/logo.png">
			<h1>CLÍNICA CORPUS CHRISTI</h1>
		</header>

		<nav>
			<ul>
				<li><a href="../salir.php"><div id="boton1" class="redes">Cerrar</div></a></li>
				<li><h4 id="boton2"> bienvenido : <?php echo $_SESSION['correo'];?></h4></li>
			</ul>
		</nav>

		<main class="mainRegistro">
			<h2 class="moduloregistroh2">Módulo Paciente</h2>
			<ul>
				<li><a href="#"><p>Editar Perfil</p></a><img src="../img/editar.png"></li>
				<li><a href="programar_cita.php"><p>Programar Cita</p></a><img src="../img/calendario.png"></li>
				<li><a href="cancelar_cita.php"><p>Cancelar Cita</p></a><img src="../img/cancelar.png"></li>
				<li><a href="historial_citas.php"><p>Historial de Citas</p></a><img src="../img/historia.png"></li>
				<li><a href="#"><p>Proximas citas</p></a><img src="../img/proximas.png"></li>
			</ul>
			<form>
				
				
			</form>
		</main>

		<footer>
			<ul>
				<li class="piePagina"><p>Vigilado por supersalud &nbsp&nbsp 
				© Corpus Christi - todos los derechos reservados</p></li>
				<li class="pbxtext"><p>PBX: 3115381804 <br>PBX: 018000 123456</p></li>
				<li><a href="contactenos.html" class="atext">Contáctenos</a></li>
			</ul>
		</footer>

	</div>
</body>
</html>