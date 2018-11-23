<?php
//var_dump($_POST);
	include ('../settings/config.php');
	
	//$id = $_GET["id"];
	$nome = $_POST["nome"];
	$cpfcnpj = $_POST["cpfcnpj"];
	$email = $_POST["email"];
	
	
	$sql = "UPDATE usuario SET `nome` = '$nome', `cpfcnpj` = '$cpfcnpj', `email` = '$email' WHERE `id` = '$id';";
	$update = mysqli_query($conn, $sql);
	//header("location: produtos.php");
	if($update){
		echo ("<script>alert('Cadastrado alterado com sucesso! '); location.href='../produtos.php';</script>"); 
	}else{
		echo ("<script>alert('Não foi possivel alterar o cadastro, por favor tente novamente! '); location.href='../minhaconta.php#regprod';</script>"); 
	}
	
?>
