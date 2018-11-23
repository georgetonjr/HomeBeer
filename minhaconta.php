<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HomeBeer - Minha Conta</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="icon" href="img/icone.png" type="image/x-icon"/>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/minhaconta.css">

</head>
<body>
  <div class="wrapper">
    <header>
      <nav>
        <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>

        <div class="logo">
          HOMEBEER
        </div>

        <div class="menu">
          <ul>
              <li><a href="index.html">HOME</a></li>
              <li><a href="produtos.php">PRODUTOS</a></li>
              <li><a href="minhaconta.php">MINHA CONTA</a></li>
              <li><a href="carrinho.html"><img src="img/icones/1.png"></a></li>
          </ul>
        </div>
      </nav>
    </header>
  </div>
  
  <section class="infoconta">
    <div class="conteudo">
       <div class="form">

      <!-- BOTÃO REGISTRO/LOGIN -->
      
      <ul class="tab-group">
        <li class="tab active"><a href="#alterardados">ALTERAR DADOS</a></li>
        <li class="tab"><a href="#regprod">CADASTRAR PRODUTOS</a></li>
      </ul>

      <!-- BOTÃO REGISTRO -->
      
      <div class="tab-content">
        <div id="alterardados">   
          <h1>Alterar dados cadastrais</h1>
          
          <!-- FORMULÁRIO -->
		<?php 
		
			include ('settings/config.php');
			$select = "SELECT * FROM usuario;";
			$resul = mysqli_query($conn, $select);					

			$crud = mysqli_fetch_assoc($resul)
		?>
          <form name="alterarcadastro" action="app/altcadastro.php" method="GET" onsubmit="VerificaCPF();">      
            <div class="field-wrap">
			<input type="text" required maxlenght="100" required autocomplete="off" name="nome" value="<?php echo $crud['nome'];?>"/>
            </div>

            <div class="field-wrap">
                <input type="text" required maxlenght="12" autocomplete="off" name="cpfcnpj" onkeypress='mascaraMutuario(this,cpfcnpj1)' onblur='clearTimeout()' value="<?php echo $crud['cpfcnpj'];?>"/>
            </div>

            <div class="field-wrap">
				<input type="email"required autocomplete="off" name="email" value="<?php echo $crud['email'];?>"/>
            </div>

            <!-- FIM FORMULÁRIO -->

            <button type="submit" class="button button-block" name="alterar"/>Alterar Dados</button>
          </form>
		  <?php  ?>
        </div>
			
        <!-- BOTÃO LOGIN -->

        <div id="regprod">   
          <h1>Insira um novo produto para vender!</h1>
          
          <form name="produto" action="app/cadproduto.php" method="post">
            <div class="field-wrap">
              <label>
                Nome do Produto<span class="req">*</span>
              </label>
              <input type="text" required maxlenght="100" required autocomplete="off" name="nome_produto"/>
            </div>     
	
	    <div class="field-wrap">
              <label>
                Marca do Produto<span class="req">*</span>
              </label>
              <input type="text" required maxlenght="100" required autocomplete="off" name="marca_produto"/>
            </div>     

            <div class="field-wrap">
              <label>
                Descrição do Produto<span class="req">*</span>
              </label>
              <input type="text" required maxlenght="100" required autocomplete="off" name="descricao_produto"/>
            </div>     

            <div class="field-wrap">
              <label>
                Valor do Produto<span class="req">*</span>
              </label>
              <input type="text" required maxlenght="100" required autocomplete="off" name="preco"/>
            </div>
	    
	    <div class="field-wrap">
              <label>
                Quantidade<span class="req">*</span>
              </label>
              <input type="text" required maxlenght="100" required autocomplete="off" name="quantidade"/>
            </div>     

	    
            <!-- <div class="field-wrap">
              <label>
                Insira uma foto do produto (Ext: .png ou .jpg)<span class="req">*</span>
              </label>
              <br><br><input type="file" id="fprod" name="fotoprod" class="btn btn-success" accept="image/png, image/jpeg"  multiple />
            </div>  -->

          <button type="submit" class="button button-block" name="salvar"/>Cadastrar Produto</button>     
          </form>
        </div>       
      </div>
</div>

    </div>
  </section>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>

  <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>
    
    <script>
      function Checkfiles(){
    var fup = document.getElementById('filename');
    var fileName = fup.value;
    var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

    if(ext =="jpeg" || ext=="png"){
        return true;
    }
    else{
        return false;
    }
    }

  
    function mascaraMutuario(o,f){
        v_obj=o
        v_fun=f
        setTimeout('execmascara()',1)
    }

    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }

    function cpfcnpj1(v){

        //Remove tudo o que não é dígito
        v=v.replace(/\D/g,"")

        if (v.length <= 14) { //CPF

            //Coloca um ponto entre o terceiro e o quarto dígitos
            v=v.replace(/(\d{3})(\d)/,"$1.$2")

            //Coloca um ponto entre o terceiro e o quarto dígitos
            //de novo (para o segundo bloco de números)
            v=v.replace(/(\d{3})(\d)/,"$1.$2")

            //Coloca um hífen entre o terceiro e o quarto dígitos
            v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

        } else { //CNPJ
            //Coloca ponto entre o segundo e o terceiro dígitos
            v=v.replace(/^(\d{2})(\d)/,"$1.$2")

            //Coloca ponto entre o quinto e o sexto dígitos
            v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")

            //Coloca uma barra entre o oitavo e o nono dígitos
            v=v.replace(/\.(\d{3})(\d)/,".$1/$2")

            //Coloca um hífen depois do bloco de quatro dígitos
            v=v.replace(/(\d{4})(\d)/,"$1-$2")
        } 
        return v
    }

    </script>


  </body>
  </html>

      
