<!DOCTYPE html>
<html lang="pt-br" >
<?php 
include ('settings/config.php');
// Inicia sessões 
session_start(); 
 
// Verifica se existe usuario logado
if(!isset($_SESSION["usuario"])) 
{ 
// Usuário não logado! Redireciona para a página de login 
header("Location: cadastro.html"); 
exit; 
} 

//$resultado = mysqli_query($conn, "select * from `produto` ORDER BY `produto`.`idproduto` DESC;");
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HomeBeer - Produtos</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="icon" href="img/icone.png" type="image/x-icon"/>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/produtos.css">

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
                        <li><a href="carrinho.html"><img src="img/icones/1.png"> (1)</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>     


        <div class="conteudo">
            <section id="Carrosel">
                <div class="carrosel">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                      <div class="item active">
                        <img src="img/2.jpg" alt="Los Angeles">
                        <div class="carousel-caption" style="font-weight: bold; text-shadow: 1px 1px #63656b;">
                          <h3>VARIEDADE</h3>
                          <p>As mais diversas bebidas a um clique de distância!</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="img/3.jpg" alt="Chicago">
                        <div class="carousel-caption" style="font-weight: bold; text-shadow: 1px 1px #63656b;">
                          <h3>CONFORTO</h3>
                          <p>Receba suas encomendas no conforto da sua casa.</p>
                        </div>
                      </div>
                    
                      <div class="item">
                        <img src="img/6.jpg" alt="New York">
                        <div class="carousel-caption" style="font-weight: bold; text-shadow: 1px 1px #63656b;">
                          <h3>DISPONIBILIDADE</h3>
                          <p>Encontre sempre um vendedor disponível próximo de você!</p>
                        </div>
                      </div>
                  
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
            </section>

            <section id="Boxlist-Produtos">
				<?php function listaProdutos($conn) {
						$produtos = array();
						$resultado = mysqli_query($conn, "select * from `produto` ORDER BY `produto`.`idproduto` DESC");
						while($produto = mysqli_fetch_assoc($resultado)) {
							array_push($produtos, $produto);
						}
						return $produtos;
					}
				?>
				<?php
					$produtos = listaProdutos($conn);
				?>
				<?php
					foreach($produtos as $produto) :
				?>
				
				<!-- PRODUTOS -->
				<tr>
				<th>
				
					<div class="card">
					  <div class="top-section">
						<img id="image-container" src="img/produtos/2.jpg" alt="">
						<div class="price">R$<?php echo $produto['preco'];?></div>
					  </div>
					  <div class="product-info">
						<div class="name"><?php echo $produto['nome_produto'];?></div>
						<div class="dis"><?php echo $produto['descricao_produto'];?></div>
						<a class="btn" href="#" onclick="return chamarPhpAjax();">COMPRAR</a>
						<a href="alterarProduto.php?id=<?=$crud['idproduto']?>" class="btn" onclick="return chamarPhpAjax();">ALTERAR</a>
					  </div>
					</div>
			
				<?php
					endforeach
				?>
				</th>
				</tr>
            </section>
        </div>
</body>
</html>
<script type="text/javascript">
  function chamarPhpAjax() {
   $.ajax({
      url:'app/carrinho.php',
      complete: addcar('',2.5,1);
    }
  }
</script>
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

<?php
    include ('/settings/config.php');
    function addcar($nomeprod, $preco, $qtd){
        $sql = "INSERT INTO produto(nome_produto, preco,quantidade) VALUES('$nomeprod', $preco, $qtd)";
	    $in = mysqli_query($conn, $sql);
	    if($in){
		    echo ("<script>alert('Produto adicionado ao carrinho! '); location.href='carrinho.php';</script>"); 
	    }else{
	    	echo ("<script>alert('Erro, por favor tente novamente! '); location.href='produtos.php';</script>"); 
	    }
    }
?>
