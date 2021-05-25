<?php  

session_start();


//remover indice do array de sessão
// unset()//inteligencia para remover o indice se existir

//destruir a variável da sessão
//session_destroy() //será destruida 
//forçar um redirecionamento


session_destroy();
header("Location: index.php");












?>