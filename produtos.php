<?php 
// Inicia sessões 
session_start(); 
 
// Verifica se existe usuario logado
if(!isset($_SESSION["usuario"])) 
{ 
// Usuário não logado! Redireciona para a página de login 
header("Location: cadastro.html"); 
exit; 
} 
?>
<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HomeBeer - Produtos</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/produtos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="icon" href="img/icone.png" type="image/x-icon"/>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

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
                        <li><a href="produtos.html">PRODUTOS</a></li>
                        <li><a href="#">MINHA CONTA</a></li>
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

                <!-- PRODUTOS -->
            <div class="produt-list">
                <div class="card">
                  <div class="top-section">
                    <img id="image-container" src="img/produtos/2.jpg" alt="">
                    <div class="price">R$2,50</div>
                  </div>
                  <div class="product-info">
                    <div class="name">CERVEJA OLD SCHOOL WITBIER 500 ML</div>
                    <div class="dis">Cerveja de trigo clara e referescante, com casca de laranja e sementes de coentro.</div>
                    <a class="btn" href="#">COMPRAR</a>
                  </div>
                </div>

                <div class="card">
                  <div class="top-section">
                    <img id="image-container" src="img/produtos/2.jpg" alt="">
                    <div class="price">R$2,50</div>
                  </div>
                  <div class="product-info">
                    <div class="name">CERVEJA OLD SCHOOL WITBIER 500 ML</div>
                    <div class="dis">Cerveja de trigo clara e referescante, com casca de laranja e sementes de coentro.</div>
                    <a class="btn" href="#">COMPRAR</a>
                  </div>
                </div>

                <div class="card">
                  <div class="top-section">
                    <img id="image-container" src="img/produtos/2.jpg" alt="">
                    <div class="price">R$2,50</div>
                  </div>
                  <div class="product-info">
                    <div class="name">CERVEJA OLD SCHOOL WITBIER 500 ML</div>
                    <div class="dis">Cerveja de trigo clara e referescante, com casca de laranja e sementes de coentro.</div>
                    <a class="btn" href="#">COMPRAR</a>
                  </div>
                </div>

                <div class="card">
                  <div class="top-section">
                    <img id="image-container" src="img/produtos/2.jpg" alt="">
                    <div class="price">R$2,50</div>
                  </div>
                  <div class="product-info">
                    <div class="name">CERVEJA OLD SCHOOL WITBIER 500 ML</div>
                    <div class="dis">Cerveja de trigo clara e referescante, com casca de laranja e sementes de coentro.</div>
                    <a class="btn" href="#">COMPRAR</a>
                  </div>
                </div>
            </div>
                
            </section>
        </div>
</body>
</html>
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
