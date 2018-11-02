<?php 
	$host = 'localhost';
	$login = 'root';
    $senha = 'admin';
    $db = 'homebeer';
			
	//Criar a conexão
    $conn    = new mysqli($host, $login, $senha, $db);
    
    if($conn -> connect_errno)
        echo " Falha na conexão: (".$conn -> connect_errno.") ".$conn -> connect_errno;

?>