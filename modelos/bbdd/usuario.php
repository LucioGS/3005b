<?php


	function listado_usuarios(){

		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$usuarios = $mbd->query('SELECT * FROM usuarios');
		$array = $usuarios->fetchAll(PDO::FETCH_ASSOC);
		return $array;
		
	}
	
	
	function login($user, $password){	
	
		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$sql = "SELECT * FROM usuarios WHERE user='" . $user . "' AND password='" . $password ."'";
		$usuarios = $mbd->query($sql);
		if ($usuarios->rowCount() > 0){	
			$usuario = $usuarios->fetch();
			$id = $usuario["id"];
			return $id;
		}else{
			return 0;
		}
		
    }


	function datos_un_usuario($id){	
	
		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$sql = "SELECT * FROM usuarios WHERE id='" . $id ."'";
		$usuarios = $mbd->query($sql);
		$usuario = $usuarios->fetch();
		return $usuario;
    }


?>