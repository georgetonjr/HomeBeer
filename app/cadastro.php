<?php
//var_dump($_POST);
	include ('../settings/config.php');
	if(!empty($_POST['3email'])) {

		$user = $_POST["3nome"];
		$cpf = $_POST["3cpfcnpj"];
		$email = $_POST["3email"];
		$nocript = $_POST["3senha"];
		$senha = md5($nocript);
		$sql = "INSERT INTO usuario(nome, cpfcnpj, email, senha) VALUES('$user', '$cpf', '$email', '$senha')";
		$in = mysqli_query($conn, $sql);
		header('Location: ../cadastro.html');
    }
	
?>


