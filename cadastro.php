<?php
//var_dump($_POST);
	include ('config.php');
	if(!empty($_POST['3email'])) {

		$user = $_POST["3nome"];
		$cpf = $_POST["3CPFCNPJ"];
		$email = $_POST["3email"];
		$senha = $_POST["3senha"];
		$sql = "INSERT INTO usuario(nome, cpfcnpj, email, senha) VALUES('$user', '$cpf', '$email', '$senha')";
		$in = mysqli_query($conn, $sql);
		header('Location:/cadastro.html');

    }
	
?>


