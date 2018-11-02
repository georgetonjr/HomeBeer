<?php
			if(!empty($_POST['cadastro'])) {
				$email = pg_escape_string($_POST['cadastro_form[email]']);
				$senha = pg_escape_string($_POST['cadastro_form[senha]']);
                $apelido = pg_escape_string($_POST['cadastro_form[nome]']);
                $ano_nasc = pg_escape_string($_POST['idade']);
                $cpf = pg_escape_string($_POST['cpf']);
				$sql = "INSERT INTO usuario(email, senha, apelido, ano_nasc) VALUES('$email', '$senha', '$apelido', '$idade', '$cpf')";
				$result = pg_query($sql);
				if(!$result) {
					$errormessage = pg_last_error();
					echo "Erro com a QUERY: ".$errormessage;
					exit();
				}
				pg_close();
			}
		?>