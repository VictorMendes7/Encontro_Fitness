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

    <title>Cadastro Adm</title>
  </head>
  <body>
       
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha do formulario -->
                    <div class="col-12 text-center my-5">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Cadastro Adm</h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos da coluna -->
                        
                         <form method="post" action="cadastroAdm2.php">
                               
                                <div class="form-row">
                                
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Nome Completo:</label>
                                            <input type="text" class="form-control" name="nomeCompleto" placeholder="Nome Completo" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >CPF:</label>
                                            <input type="text" class="form-control"  maxlength="14" name="cpf" placeholder="CPF" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >RG:</label>
                                            <input type="text" class="form-control"  maxlength="10" name="rg" placeholder="RG" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Login:</label>
                                            <input type="text" class="form-control" name="login" placeholder="Login" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Senha:</label>
                                            <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                                            <input type="hidden" name="status" value="1" required/>
                                    </div>
                                    
                             	</div>
                          
                             <div class="form-row">
                                 
                                 <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                     <a class="btn btn-danger" href="home.php" role="button">Voltar</a>
                                     
                                 </div>
                                 
                             </div>
                             
                         </form>
                         
                     </div>
                     
                </div>
            
           </div>        
     </body>
</html>
