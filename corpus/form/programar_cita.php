<?php 

  session_start();
  error_reporting(0);
  $usuario =$_SESSION;
  
?>

<?php
  $profesional =$_POST['profesional'];
  $sede= $_POST['sede'];
  $conexion = mysqli_connect("localhost","root","Savcoinc1.","olgasant_corpusc"); 
  $sql = "SELECT agenda.id_agenda, agenda.id_usuario, agenda.id_profesional, agenda.id_sede, usuarios.primer_nombre, usuarios.segundo_nombre, usuarios.primer_apellido, usuarios.segundo_apellido, agenda.fecha_agenda, agenda.hora_agenda, sedes.nombre_sede FROM sedes INNER JOIN agenda ON sedes.id_sede = agenda.id_sede INNER JOIN profesionales ON agenda.id_profesional = profesionales.id_profesional INNER JOIN usuarios ON agenda.id_usuario = usuarios.id_usuario WHERE agenda.id_profesional= '$profesional' AND agenda.id_sede= '$sede'";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Programar Cita</title>
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
			<form action="programar_cita.php" method="post" class="nuevaagenda">
				<h2 style="color: #177b64ff;text-align: center;" >Programar Cita</h2>
				<br>
			<div  style="color:black; font-size: 25px;">
				<tr>
					<td  class = "titulo">Profesional :</td>
					<td><SELECT name="profesional" style="color:black; font-size: 20px;">
						<OPTION value="0">Seleccione Profesional</OPTION>
						<OPTION value="5">Dra Liz Gil</OPTION>
						<OPTION value="6">Dr Jorge Torres</OPTION>
						<OPTION value="7">Dra Ana Cely</OPTION>
						<OPTION value="8">Dra Luisa Arce</OPTION>
					</SELECT></td>
				</tr>
				<br>
				<br>
				<tr>
					<td  class = "titulo">Sede :</td>
					<td><SELECT name="sede" style="color:black; font-size: 20px;">
						<OPTION value="0">Seleccione Sede Consulta</OPTION>
						<OPTION value="1">BOGOTA</OPTION>
						<OPTION value="2">CAJICA</OPTION>
						<OPTION value="3">ZIPAQUIRA</OPTION>
						<OPTION value="4">FACATATIVA</OPTION>
						<OPTION value="5">ANOLAIMA</OPTION>
					</SELECT></td>
				</tr>

			</div>
			<br>
			<tr>
				<td class="boton" colspan="2"><input style="font-size: 18px;" type="submit" value="Buscar Informacion"></td>
			</tr>
			<br>
			<br>
			<TABLE border="1" bordercolor="#64423e" align="center">
                <TR style="color:black;">
                	    <td>ID_Agenda</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Sede</td>
                        <td>Fecha Agenda</td>
                        <td>Hora Agenda</td>
                        
                        
                </TR>
                <?php
               
                $result=mysqli_query($conexion,$sql);
                WHILE($mostrar=mysqli_fetch_array($result)){

                ?>
                <tr style="color:black;">
                  <td><?php echo $mostrar ['id_agenda']?></td>	
                  <td><?php echo $mostrar ['primer_nombre']." " .$mostrar['segundo_nombre']?></td>
                  <td><?php echo $mostrar ['primer_apellido']. " ". $mostrar ['segundo_apellido']?></td>
                  <td><?php echo $mostrar ['nombre_sede']?></td>
                  <td><?php echo $mostrar ['fecha_agenda']?></td>
                  <td><?php echo $mostrar ['hora_agenda']?></td>
                  <td><a href="#"><button style="font-size: 18px;background: green;">Agendar</button></a></td>
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
			</ul>
		</footer>

	</div>
</body>
</html>