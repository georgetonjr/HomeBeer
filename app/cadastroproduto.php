<?php
//var_dump($_POST);
	include ('../settings/config.php');
	if(!empty($_POST['3email'])) {

		$nome = $_POST["nomeprod"];
		$descrição = $_POST["descprod"];
		$valor = $_POST["valorprod"];
		$imagem = $_POST["fotoprod"];
		$$sql = "INSERT INTO produto(nome, descricao, valor, imagem) VALUES('$nome', '$descrição', $valor, '$imagem')";
	    $in = mysqli_query($conn, $sql);
	    if($in){
		    echo ("<script>alert('Produto cadastrado com sucesso! '); location.href='carrinho.php';</script>"); 
	    }else{
	    	echo ("<script>alert('Erro, por favor tente novamente! '); location.href='produtos.php';</script>"); 
	    }
    }
	
?>

