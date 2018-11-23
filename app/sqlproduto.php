<?php
//var_dump($_POST);
	include ('../settings/config.php');
	
	//$id = $_GET["id"];
	$nome_produto = $_POST["nome_produto"];
	$marca_produto = $_POST["cpfcnpj"];
	$descricao_produto= $_POST["descricao_produto"];
	$preco= $_POST["preco"];
	$quantidade= $_POST["quantidade"];
	$sql = "UPDATE produto SET `nome_produto` = '$nome_produto', `marca_produto` = '$marca_produto', `descricao_produto` = '$descricao_produto', `preco` = '$preco', `quantidade` = '$quantidade' WHERE `idproduto` = '$idproduto';";
	$update = mysqli_query($conn, $sql);
	//header("location: produtos.php");
	if($update){
		echo ("<script>alert('Cadastrado alterado com sucesso! '); location.href='../alterarProduto.php';</script>"); 
	}else{
		echo ("<script>alert('Não foi possivel alterar o cadastro, por favor tente novamente! '); location.href='../alterarProduto.php#regprod';</script>"); 
	}
	
?>
