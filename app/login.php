 <?php
	session_start();
   include ('../settings/config.php');
   if ( isset($_POST["emaill"]) ) {
   	$email = $_POST["emaill"];
		$nocript = $_POST["senhaa"];
		$senha = md5($nocript);
   	$in = "SELECT email, senha FROM usuario WHERE email = '{$email}' and senha = '{$senha}' ";
   	$acesso = mysqli_query($conn, $in);
   	$row = mysqli_num_rows($acesso);
   		if($row == 1){
   			$_SESSION['usuario'] = $email;
   			header('Location: ../produtos.php');
   			exit();
   		}else{
            echo ("<script>alert('Login ou senha incorreto '); location.href='cadastro.html#login';</script>");        
            //header('Location:/cadastro.html'); 
         }
   }	
?> 