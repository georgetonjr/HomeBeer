<?php
			if(!empty($_POST['cadastro'])) {
				$apelido = pg_escape_string($_POST['cadastro_form[nome]']);
				$cpf = pg_escape_string($_POST['cpf']);
				$email = pg_escape_string($_POST['cadastro_form[email]']);
				$senha = pg_escape_string($_POST['cadastro_form[senha]']);
				$sql = "INSERT INTO usuario(apelido, cpf, email, senha) VALUES('$apelido', '$cpf', '$email', '$senha')";
				$result = pg_query($sql);
				if(!$result) {
					$errormessage = pg_last_error();
					echo "Erro com a QUERY: ".$errormessage;
					exit();
				}
				pg_close();
			}
		?>


