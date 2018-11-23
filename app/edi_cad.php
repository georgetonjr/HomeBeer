<?php
//var_dump($_POST);
	include ('../settings/config.php');
	if(!empty($_POST['3email'])) {

		$user = $_POST["3nome"];
		$cpf = $_POST["3cpfcnpj"];
        $email = $_POST["3email"];
        $sql = "UPDATE usuario SET nome = '$name', cpfcnpj = '$cpf', email = '$email' WHERE cpfcnpj = '$cpf'";
		$in = mysqli_query($conn, $sql);
		if($in){
			echo ("<script>alert('Cadastro atualizado com sucesso! '); location.href='../cadastro.html#login';</script>"); 
		}else{
			echo ("<script>alert('Não foi possivel atualizar seu cadastro, por favor tente novamente! '); location.href='../cadastro.html#login';</script>"); 
		}
    }
	
?>

