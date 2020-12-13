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

    <title>Alterar Assinatura</title>
  </head>
  <body>
       
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha Titulo -->
                    <div class="col-12 text-center my-5">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Alterar Assinatura</h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <!-- classe Row responsavel por uma linha Formulario -->
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos da coluna -->
                        
                         <form method="get" action="alterarAssinatura2.php">
                               
                                <div class="form-row">
                        
                                    <div class="form-group col-sm-6">
                                    
                                            <label > Tipo do Plano:</label>
                                            <select class="form-control" name="tipoPlano">
                                                  <option value="">Selecione</option>
                                				  <option value="Semanal">Semanal</option>
                                				  <option value="Mensal">Mensal</option>
                                				  <option value="Anual">Anual</option>
                                             </select>
                                    
                                    </div>
                          
                             	</div>
                          
                             <div class="form-row">
                                 
                                 <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Alterar</button>
                                     <a class="btn btn-danger" href="home.php" role="button">Voltar</a>
                                     
                                 </div>
                                 
                             </div>
                             
                         </form>
                         
                     </div>
                     
                </div>
            
           </div>        
     </body>
</html>
