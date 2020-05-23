<?php
    mysql_connect("localhost","root","Savcoinc1.") or die(' mysql error ' . mysql_error());
      mysql_select_db("olgasant_corpus") or die(' mysql error ' . mysql_error());
      mysql_query("update agenda set id_profesional = '$_POST[id_usuario]', id_servicio = '$_POST[sede]', 
      fecha_agenda = '$_POST[fecha_agen]', hora_agenda = '$_POST[hora_agen]', estado_agenda = 1 WHERE episodio = '$_POST[episodio]'") or die(' mysql error ' . mysql_error());
 	
 	header ("location:enviado1.html");
?>