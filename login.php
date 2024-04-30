<?php

	session_start();
	include "modelos/bbdd/usuario.php"; 
		
	$id_usuario = login($_POST["user"],$_POST["password"]);
	
	if($id_usuario != 0){
		$datos_usuario = datos_un_usuario($id_usuario);
		$_SESSION["nombre"] =  $datos_usuario["nombre"];
		$_SESSION["apellidos"] = $datos_usuario["apellidos"];
		header('Location: filtro.php');
	}else{
		header('Location: index.php');
	}

?>
