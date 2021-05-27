<?php 

session_start();

//tratando a montagem de texto
$titulo = str_replace('#','-',$_POST['titulo']);
$categoria = str_replace('#','-',$_POST['categoria']);
$descicao = str_replace('#','-',$_POST['descricao']);

//implode('#', $_POST);

$texto  = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descicao . PHP_EOL;

//abrindo o arquivo
$arquivo = fopen('arquivo.hd', 'a');

//escrevendo o arquivo
fwrite($arquivo, $texto);
//fechando o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php');







 ?>