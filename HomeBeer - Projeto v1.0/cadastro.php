<?php
	include ("config.php");
	if(!empty($_POST['cadastro'])) {
		$email = $_POST['email'];
		$senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $anoN = $_POST['dataN'];
		$cpf_cnpj = $_POST['cpfcnpj'];
		
		$sql = "insert into usuario (email, senha, nome, cpf_cnpj) values ('$email', '$senha', '$nome', '$cpf_cnpj')";
		mysqli_query($conn, $sql) or die ("Erro ao tentar cadastrar registro");
		mysqli_close($conn);		
	}
?>