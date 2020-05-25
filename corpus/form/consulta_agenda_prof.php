<?php 

  session_start();
  error_reporting(0);
  $usuario=$_SESSION['id_usuario']
  
?>
<?php
  $conexion = mysqli_connect("localhost","root","Savcoinc1.","olgasant_corpusc"); 
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
				<li><a href="agenda_profesional.php"><p>Generar Agenda &nbsp&nbsp</p></a><img src="../img/paciente.png"></li>
				<li><a href="consulta_agenda_prof.php"><p>Consultar Agenda &nbsp&nbsp</p></a><img src="../img/calendario.png"></li>
				<li><a href="asistencia_paciente.php"><p>Asistencia paciente &nbsp&nbsp</p></a><img src="../img/asistencia.png"></li>
				
			</ul>
			<form class="nuevaagenda">
				<h2 style="color: #177b64ff;text-align: center;" >Agenda Activa</h2>
				<br>
				<TABLE border="1" bordercolor="#64423e" align="center">
                <TR style="color:blue;">
                        <td>ID_Agenda</td>
                        <td>Sede</td>
                        <td>Fecha_agenda</td>
                        <td>Hora_Agenda</td>
                        <td>estado_Agenda</td>
                        
                        
                </TR>
                <?php
                $sql="SELECT agenda.id_agenda, agenda.id_usuario, agenda.id_profesional, sedes.nombre_sede, agenda.fecha_agenda, agenda.hora_agenda, agenda.estado_agenda
					FROM agenda INNER JOIN sedes ON agenda.id_sede = sedes.Id_sede INNER JOIN profesionales ON agenda.id_profesional = profesionales.id_profesional
						WHERE agenda.estado_agenda='1' AND agenda.id_usuario = '$usuario' ORDER BY agenda.fecha_agenda ASC";

                $result=mysqli_query($conexion,$sql);
                WHILE($mostrar=mysqli_fetch_array($result)){

                ?>
                <tr style="color:black;">
                  <td><?php echo $mostrar ['id_agenda']?></td>
                  <td><?php echo $mostrar ['nombre_sede']?></td>
                  <td><?php echo $mostrar ['fecha_agenda']?></td>
                  <td><?php echo $mostrar ['hora_agenda']?></td>
                  <td><?php echo $mostrar ['estado_agenda']?></td>
                  <td><a href="#"><button style="font-size: 18px;background: green;">Cancelar</button></a></td>
                </tr>
            <?php
        }
            ?>
             </TABLE>
				
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