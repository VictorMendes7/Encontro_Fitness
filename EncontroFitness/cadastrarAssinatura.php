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

    <title>Cadastro Assinatura</title>
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
                        <a class="nav-link" href="home.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Início</a>
                    </li>
                      <!-- Div e classe responsavel por nomes dos itens do menu e sub-menus -->
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle ml-2" href="#" data-toggle="dropdown" id="navDrop" >
                         Encontro
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="cadastroEncontro.php">Cadastrar</a>
                            <a class="dropdown-item" href="consultaEncontro.php">Consultar</a>
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
    <br><br><br><br><br>
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha do formulario -->
                    <div class="col-12 text-center my-7">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Cadastro Assinatura</h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos da coluna -->
                        
                         <form method="post" action="cadastrarAssinatura2.php">
                               
                                <div class="form-row">
                                    
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Valor:</label>
                                            <input type="text" class="form-control" name="valor" placeholder="R$:" required>
                                    
                                    </div>

                                    
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label > Tipo do Plano:</label>
                                            <select class="form-control" name="tipoPlano">
                                                  <option value="">Selecione</option>
                                				  <option value="Semanal">Mensal</option>
                                				  <option value="Mensal">Semestral</option>
                                				  <option value="Anual">Anual</option>
                                             </select>
                                    
                                    </div>

                                    <div class="form-group col-sm-6">
                                    
                                    <label >Cartao:</label>
                                    <input type="text" class="form-control" name="cartao" placeholder="" required>
                                    
                                    
                                    <input type="hidden" name="status"value="1" />
                            </div>
                                    
                                    
                             	</div>
                          
                             <div class="form-row">
                                 
                                 <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                     <a class="btn btn-danger" href="home2.php" role="button">Voltar</a>
                                     
                                 </div>
                                 
                             </div>
                             
                         </form>
                         
                     </div>
                     
                </div>
            
           </div>
                          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>             
     </body>
</html>
