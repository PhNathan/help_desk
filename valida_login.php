<?php  
	//iniciando sessão
	session_start();
	

	//variavel que verifica se a auth deu certo;
	$usuario_autenticado = false;


	//usuários do sistema
	$usuarios_app = [
		['email' => 'admin@gmail.com', 'senha' => 'admin'],
		['email' => 'user@gmail.com', 'senha' => 'user']
	];


	foreach ($usuarios_app as $user) {

		//Controle de autenticação estática.
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
	}

		

	}

	if ($usuario_autenticado) {
		$_SESSION['autenticado'] = 'SIM';
		
		header("Location: home.php");
	}else{
		$_SESSION['autenticado'] = 'NAO';
		header("Location: index.php?login=erro");
	}
	





?>