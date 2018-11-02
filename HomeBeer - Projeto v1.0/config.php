<?php 
	$host = 'localhost';
	$login = 'root';
    $senha = 'admin';
    $db = 'homebeer';
			
	//Criar a conexão
    $mysqli = new mysqli($host, $login, $senha, $db);
    
    if($mysqli -> connect_errno)
        echo " Falha na conexão: (".$mysqli -> connect_errno.") ".$mysqli -> connect_errno;

?>