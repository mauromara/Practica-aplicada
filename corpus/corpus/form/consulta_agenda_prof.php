<?php 

  session_start();
  error_reporting(0);
  
?>
<?php
    include 'conexion.php';
    $query1=mysqli_query($mysqli,"SELECT usuarios, nombres FROM 07_analistas");
?>

<!DOCTYPE html>
<html>
<head>
	<title>profesionales</title>
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
			<h2 class="moduloregistroh2">Módulo Profesional de la salud</h2>
			<ul>
				<li><a href="agenda_profesional.php"><p>Generar Agenda</p></a><img src="../img/paciente.png"></li>
				<li><a href="consulta_agenda_prof.php"><p>Consultar Agenda</p></a><img src="../img/calendario.png"></li>
				<li><a href="asistencia_paciente.php"><p>Asistencia paciente</p></a><img src="../img/asistencia.png"></li>
				
			</ul>
			<form action= "" method="POST" class="mision">
				
                  
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