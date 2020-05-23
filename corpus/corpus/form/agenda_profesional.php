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
	<title>Agenda</title>
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
				<li><a href=""><p>Generar Agenda</p></a><img src="../img/paciente.png"></li>
				<li><a href="consulta_agenda_prof.php"><p>Consultar Agenda</p></a><img src="../img/calendario.png"></li>
				<li><a href="asistencia_paciente.php"><p>Asistencia paciente</p></a><img src="../img/asistencia.png"></li>
				
			</ul>
			<form action= "../php/guarda_agenda.php" method="POST" class="mision">
				
                  <table>
                    <tr>
                      <td>Sede:</td><br>
                      <td><select name="sede" style="width: 200px; height: 25px;">
                        <option value="0">Seleccione Sede</option> 
                        <?php WHILE($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id_sede'] ?>"><?php echo $row['nombre_sede'] ?></option> 
                        <?php } ?>
                         </select>
                    </td>
                    
                    <tr>
                      <td>fecha agenda :</td>
                      <td><input type="date" name="fecha_agen" id="fecha" style="width: 190px; height: 10px;"></td>
                      </tr>
                      <tr>
                        <td>Hora agenda ;</td>
                        <td><input type="time" name="hora_agen" id="hora" style="width: 190px; height: 10px;"></td>
                      </tr>
                      <tr>
                          <td class = "titulo">Usuario:</td>
                          <td><input type="text" disable  name="usuario" id="usuario" value="<?php echo $_SESSION['id_usuario']?>"></td>
                          </tr>
                      <tr>
                        <td><input type="submit" value="Cargar Informacion" style="width: 200px; height: 40px; margin-top: 10px;"></td>
                      </tr>
                  </table>

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