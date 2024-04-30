<?php 

	session_start();
	$ficha = $_GET["num_ficha"];
	include "modelos/api.php";
	$data_convertido = datos_recurso($ficha);
	include "vistas/ficha.htm"; 

?>