<?php 

  $mysqli=new mysqli("localhost","root","Savcoinc1.","olgasant_corpusc");

  
  $agenda= $_POST['id_agenda'];
  $sede= $_POST['id_sede'];
  $fecha_agenda= $_POST['fecha_agenda'];
  $hora_agenda= $_POST['hora_agenda'];
  
  $insertar = "INSERT INTO citas (id_usuario_genera, id_profesional, fecha_cita, hora_cita, id_sede) VALUES ('$usuario','$usuario', '$fecha_agenda', '$hora_agenda', '$sede')";
  $resultado= $mysqli-> query($insertar);

  if($resultado){
    echo "<script>alert('Cargue Correcto'); location.href = '../form/agenda_profesional.php'</script>";
  }
  else{

    echo "<script>alert('No se pudo cargar'); location.href = '../form/agenda_profesional.php'</script>";
  }

?>