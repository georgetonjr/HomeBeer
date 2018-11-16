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
		if($in){
			echo ("<script>alert('Usuario cadastrado com sucesso! '); location.href='../cadastro.html#login';</script>"); 
		}else{
			echo ("<script>alert('Não foi possivel realizar o cadastro, por favor tente novamente! '); location.href='../cadastro.html#login';</script>"); 
		}
    }
	
?>


