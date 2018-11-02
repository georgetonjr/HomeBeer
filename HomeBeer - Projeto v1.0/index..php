<?php include("config.php"); ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
		<!--Meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<!-- Popper.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

		<!-- Datepicker -->
	    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
	    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css"/>

       <link rel="stylesheet" type="text/css" href="css/style.css">
		

		<!-- Page Title -->
		<title>HomeBeer - Cadastro</title>

</head>

<body>
<header>
	<div class="cabecalho" id="cabeçalho">
		<img src="img/logo.png" alt="HomeBeer" class="logo">
		<h1>HomeBeer</h1>
	</div>	
</header>
	<section>
		<form name="Cadastro" action="cadastro.php" method="post">
		<h2>Inscrever-se com seu endereço de e-mail</h2>
			<ul>
				<li>
					<input type="email" id="registrar-email" name="cadastro_form[email]" required="required" maxlenght="100" placeholder="E-mail" data-msg-required="Por favor, insira um e-mail válido."/><br>
				</li>
				<li>
					<input type="password" id="registrar-senha" name="cadastro_form[senha]" autocomplete="off" maxlength="100" placeholder="Senha" required="required" data-msg-minlength="Sua senha é muito curta." data-msg-required="Por favor, escolha uma senha." data-rule-minlength="4"/><br>
				</li>
				<li>
					<input type="text" id="registrar-nome" nome="cadastro_form[nome]" maxlenght="100" placeholder="Como devemos chamar você?" required="required" data-msg-required="Por favor, escreva seu nome." autocapitalize="off" autocorrect="off" autocomplete="off" maxlength="30"/><br>
				</li>	

				<li id="li-ddn" class="vaiproladocaralho" data-error-age="Desculpe, mas você não atende aos requisitos de idade do HomeBeer.">
					<input id="datepicker" width="300" placeholder="Data de nascimento" class="caixatexto"/>
			        <!-- Script -->
				    <script>
				        $('#datepicker').datepicker({
				            uiLibrary: 'bootstrap4'
				        });
				    </script>
				</li>

				<li>
					<input type="number" id="registrar-cpfoucnpj" name="cadastro_form[CPFCNPJ]" required="required" minlenght="11" maxlenght="14" placeholder="CPF ou CNPJ"/><br>
				</li>

				<li>
					<input type="submit" name="cadastro" value="Inscrever-se">
				</li>
			<ul>
		</form>	
	</section>
	

</body>
</html>