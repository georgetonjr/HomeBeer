<?php
//var_dump($_POST);
	include ('../settings/config.php');
	if(!empty($_POST['email'])) {

		$nome = $_POST["nome"];
		$cpfcnpj = $_POST["cpfcnpj"];
		$email = $_POST["email"];
		$nocript = $_POST["senha"];
		$senha = md5($nocript);
		$sql = "INSERT INTO usuario(nome, cpfcnpj, email, senha) VALUES('$nome', '$cpfcnpj', '$email', '$senha');";
		$in = mysqli_query($conn, $sql);
		if($in){
			echo ("<script>alert('Usuario cadastrado com sucesso! '); location.href='../cadastro.html#login';</script>"); 
		}else{
			echo ("<script>alert('Não foi possivel realizar o cadastro, por favor tente novamente! '); location.href='../cadastro.html#login';</script>"); 
		}
    }
	
?>


