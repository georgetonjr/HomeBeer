<?php
include ('../settings/config.php');
if (isset($_POST['salvar'])) {	
	$nome_produto = $_POST['nome_produto'];
	$marca_produto = $_POST['marca_produto'];
	$descricao_produto = $_POST['descricao_produto'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	$sql = "INSERT INTO `produto`(`nome_produto`, `marca_produto`, `descricao_produto`, `preco`, `quantidade`) VALUES('$nome_produto','$marca_produto', '$descricao_produto', '$preco', '$quantidade');";
	$insert = mysqli_query($conn, $sql);
	//header("location: produtos.php");
	if($insert){
		echo ("<script>alert('Produto cadastrado com sucesso! '); location.href='../produtos.php';</script>"); 
	}else{
		echo ("<script>alert('Não foi possivel realizar o cadastro, por favor tente novamente! '); location.href='../minhaconta.html#regprod';</script>"); 
	}
}		
		
?>	
