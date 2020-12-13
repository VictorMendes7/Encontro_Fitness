<?php

if (!isset($_SESSION['logado']) || $_SESSION['logado'] != TRUE)
{
    //session_start();
    include 'verifica_Login.php';
}


?>


   

<!doctype html>
<html lang="Pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/1e56767019.js"></script> 
    <title>Encontro Fitness</title>
  </head>
  <body>
 								
       <!-- classe responsavel por tamanho do menu,cor e backgroud -->
     <nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-gradient-dark">
         <div class="">
      
             <!-- classe responsavel pelo nome que ficara ao lado do menu-->
             <a class="navbar-brand h1 mb-0" href="#">Encontro Fitness</a>

             <!-- classe responsavel pelo botão -->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                 <span class="navbar-toggler-icon"></span>
             </button>

                   <!-- Div e classe responsavel por nomes dos itens do menu -->
             <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Início</a>
                    </li>
                      <!-- Div e classe responsavel por nomes dos itens do menu e sub-menus -->
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle ml-2" href="#" data-toggle="dropdown" id="navDrop" >
                         Encontro
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="cadastroEncontro.php">Cadastrar</a>
                            <a class="dropdown-item" href="consultarEncontro.php">Consultar</a>
                            <a class="dropdown-item" href="alterarEncontro.php">Alterar</a>
                            <a class="dropdown-item" href="excluirEncontro.php">Excluir</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ml-2" href="#" data-toggle="dropdown" id="navDrop">
                        Cartao
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="cadastrarCartao.php">Cadastrar</a>
                            <a class="dropdown-item" href="consultaCartao.php">Consultar</a>
                            <a class="dropdown-item" href="alterarCartao.php">Alterar</a>
                            <a class="dropdown-item" href="excluirCartao.php">Excluir</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle ml-2" href="#" data-toggle="dropdown" id="navDrop" >
                         Mapa
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="teste.html">Consultar</a>
                        </div>
                       
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ml-2" href="#" data-toggle="dropdown" id="navDrop">
                        Premium Fitness
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="cadastrarAssinatura.php">Cadastrar</a>
                        </div>
                    </li>




                    
                </ul>    
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                        <i class="fa fa-user-circle fa-2x  "></i>
                        </a>
                        <div class="dropdown-menu" >
                            <!--  <a class="dropdown-item" href="alterarUsuario.php"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> Alterar dados da conta</a>
                            --><a class="dropdown-item" href=""><i class="fas fa-sign-out-alt"></i>Perfil</a>
                            <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a>
                        </div>
                     </li>
                </ul><!--
                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar...">
                    <button class="btn btn-dark" type="submit">OK</button>
                 </form>
                  -->
             </div>
       </div>  
    </nav>
      <!-- Div e classe responsavel por o slide de imagens abaixo do menu -->
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
         <!--  Ol responsavel por indicadores dos slides -->
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1" ></li>
            <li data-target="#carouselSite" data-slide-to="2" ></li>
        </ol>
        
        <div class="carousel-inner ">
            
            <div class="carousel-item active">
                <img src="img/fitness001-1920.jpg" class="img-fluid d-block">
                <!-- div e classe responsavel pelo texto nos slides -->
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1></h1>
                    <p class="lead"></p>
                </div>
            </div>
              
            
            <div class="carousel-item">
                 <img src="img/fitness002-1920.jpg" class="img-fluid d-block"> 
                
                 <div class="carousel-caption d-none d-md-block text-dark">
                    <h1></h1>
                    <p class="lead">
                    </p>
                </div>
            </div>    
        
            <div class="carousel-item">
                <img src="img/fitness003-1500.jpg" class="img-fluid d-block">
                
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1></h1>
                    <p class="lead"></p>
                </div>
            </div>
       </div> 
            <!--  classe responsavel por botão de voltar e avançar os slide -->
            <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Anterior</span>
                
           </a>
            <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Avançar</span>
                
          </a>
    </div>
    

 
 <div class="jumbotron jumbotron-fluid">
 	<div class="container">
 		<div class="row">
 			<div class="col-12 text-center">
 				<img src="img/senac-2.png" class="img-fluid ">
 				<h3 class="display-4">Projeto Integrador</h3>
 				<p class="lead">Turma De Análise E Desenvolvimento De Sistemas - 2019/2021</p>
 				<hr>
 			</div>
 		</div>
 
 	</div>
 
 </div>
 <div class="container">
     <div class="row">
     			<div class="col-12">
     				<h1 class=>Membros da Equipe:</h1>
     				<div class="list-group">
                          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Heitor Cassimiro</a>
                          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Victor Mendes</a>
                          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Mateus Felipe</a>
                          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Everton Oliveira</a>
                    </div>
     			</div>
     			
     		</div>
    </div>	<br> <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>