<?php 

	$mysqli=new mysqli("localhost","root","Savcoinc1.","olgasant_corpusc");

	
	$usuario= $_POST['usuario'];
	$sede= $_POST['sede'];
	$fecha_agenda= $_POST['fecha_agen'];
	$hora_agenda= $_POST['hora_agen'];
	
	$insertar = "INSERT INTO agenda (id_usuario, fecha_agenda, hora_agenda, sede_agenda) VALUES ('$usuario', '$fecha_agenda', '$hora_agenda', '$sede')";
	$resultado= $mysqli-> query($insertar);

	if($resultado){
		echo "<script>alert('Cargue Correcto'); location.href = '../form/agenda_profesional.php'</script>";
	}
	else{

		echo "<script>alert('No se pudo cargar'); location.href = '../form/agenda_profesional.php'</script>";
	}

?>