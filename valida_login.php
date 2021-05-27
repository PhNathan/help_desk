<?php  
	//iniciando sessão
	session_start();
	

	//variavel que verifica se a auth deu certo;
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = ['1'=>'Administrativo', '2'=> 'Usuário'];


	//usuários do sistema
	$usuarios_app = [
		['id'=>1,'email' => 'admin@gmail.com', 'senha' => 'admin', 'perfil_id'=>1],
		['id'=>2,'email' => 'user@gmail.com', 'senha' => 'user123', 'perfil_id'=>1],
		['id'=>3,'email' => 'joao@gmail.com', 'senha' => 'joao123', 'perfil_id'=>2],
		['id'=>4,'email' => 'maria@gmail.com', 'senha' => 'maria123', 'perfil_id'=>2]
	];


	foreach ($usuarios_app as $user) {

		//Controle de autenticação estática.
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
	}

		

	}

	if ($usuario_autenticado) {
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header("Location: home.php");
	}else{
		$_SESSION['autenticado'] = 'NAO';
		header("Location: index.php?login=erro");
	}
	





?>