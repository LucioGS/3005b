<?php


	function listado_preferidos(){

		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$preferidos = $mbd->query('SELECT * FROM preferidos');
		$array = $preferidos->fetchAll(PDO::FETCH_ASSOC);
		return $array;
		
	}
	



?>