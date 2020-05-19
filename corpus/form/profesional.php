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
        <title>Profesionales</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <h1 class="titul">Menu Profesionales</h1>
                    <a href="/corpus/form/agenda_profesional.php"><div>Generar agenda</div></a>
                    <a href="/corpus/form/consulta_agenda_prof.php"><div>Consultar Agenda</div></a>
                    <a href="#"><div>Asistencia paciente</div></a>
              </form>
           </aside>
           <aside id="izquierda">
            <h2 class="relato">Modulo profesionales</h2>
               <form class="mision">


               </form>
           </aside>
       </main>
       
      </body>
</html>
