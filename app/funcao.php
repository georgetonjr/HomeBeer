<?php
    include ('/settings/config.php');
    session_start();
    $email = $_SESSION["usuario"];
    function addcarrinho(){
        $sql = "INSERT INTO carrinho(email, idproduto) VALUES('$email', '$descrição')";
	    $in = mysqli_query($conn, $sql);
	    if($in){
		    echo ("<script>alert('Produto adicionado ao carrinho! '); location.href='carrinho.php';</script>"); 
	    }else{
	    	echo ("<script>alert('Erro, por favor tente novamente! '); location.href='produtos.php';</script>"); 
	    }
    }




    function addproduto($nomeprod, $preco, $qtd){
        $sql = "INSERT INTO produto(nome, descricao, valor, imagem) VALUES('$nome', '$descrição', $valor, '$imagem')";
	    $in = mysqli_query($conn, $sql);
	    if($in){
		    echo ("<script>alert('Produto adicionado ao carrinho! '); location.href='carrinho.php';</script>"); 
	    }else{
	    	echo ("<script>alert('Erro, por favor tente novamente! '); location.href='produtos.php';</script>"); 
	    }
    }
?>
