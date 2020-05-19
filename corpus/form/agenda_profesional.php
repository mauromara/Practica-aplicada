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
        <title>Generar Agenda</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <link rel="Stylesheet" type="text/css" href="../css/estilo_formularios.css">
    </head>
    <body>
        <header class="primeroE">
                    <img src="../img/logo.png" alt="logotipo">
                    <p>CLINICA CORPUS CHRISTI</p>
        </header>
       <header class="segundoe">
           <a href="../salir.php"><div id="boton1" class="redes">Cerrar</div></a>
           <h4 id="boton2"> bienvenido : <?php echo $_SESSION['correo'];?></h4>
       </header>
       <main>
           <aside id="derecha">
               <form action="validar.php" method="POST" class="ingres">
                    <h1 class="titul">Generar Agenda</h1>
                    <a href=""><div>Generar agenda</div></a>
                    <a href="consulta_agenda_prof.php"><div>Consultar Agenda</div></a>
                    <a href=""><div>Asistencia paciente</div></a>
              </form>
           </aside>
           <aside id="izquierda">
            <h2 class="relato">Modulo profesionales</h2>
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
                      <td><input type="date" name="fecha_agen" id="fecha" style="width: 190px; height: 16px;"></td>
                      </tr>
                      <tr>
                        <td>Hora agenda ;</td>
                        <td><input type="time" name="hora_agen" id="hora" style="width: 190px; height: 16px;"></td>
                      </tr>
                      <tr>
                          <td class = "titulo">Usuario:</td>
                          <td><input type="text" disable  name="usuario" id="usuario" value="<?php echo $_SESSION['id_usuario']?>"></td>
                          </tr>
                      <tr>
                        <td><input type="submit" value="Cargar Informacion" style="width: 200px; height: 30px; margin-top: 30px;"></td>
                      </tr>
                  </table>

               </form>
           </aside>
       </main>
       
      </body>
</html>
