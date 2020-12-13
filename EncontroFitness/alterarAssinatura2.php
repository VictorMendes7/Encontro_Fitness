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

    <title>Alterar Assinatura </title>
  </head>
    
  <?php 

    use src\Assinatura;
    use src\RepositorioAssinatura;

    require_once 'src/RepositorioAssinatura.php';
    require_once 'src/Assinatura.php';

    // variáveis
    $tipoPlano = $_GET['tipoPlano'];
    
    // Classes e repositórios necessários
    $Assinatura = new Assinatura();
    $RA = new RepositorioAssinatura();
    
    $Assinatura = $RA->consultarAssinatura($tipoPlano, "alterar");
       

?>
    
  <body>
       
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha do formulario -->
                    <div class="col-12 text-center my-5">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Alterar Assinatura</h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos das coluna -->
                        
                         <form method="post" action="alterarAssinatura3.php">
                         
                         		
                                <div class="form-row">
                                    
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Valor:</label>
                                            <input type="text" class="form-control" name="valor" placeholder="R$:" value="<?php echo $Assinatura->getValor(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label > Tipo do Plano:</label>
                                            <select class="form-control" name="tipoPlano" value="<?php echo $Assinatura->getTipoPlano(); ?>">
                                                  <option value="">Selecione</option>
                                				  <option value="Semanal">Semanal</option>
                                				  <option value="Mensal">Mensal</option>
                                				  <option value="Anual">Anual</option>
                                             </select>
                                    
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                    <div class="form-group col-sm-6">
                                
                             			<label >Status:</label>
                             		
                      					<input type="radio" name="status" value="1" <?php if ( $Assinatura->getStatus() == 1 ) echo "selected"; ?>> Ativo
                      					<input type="radio" name="status" value="0" <?php if ( $Assinatura->getStatus() == 0 ) echo "selected"; ?>> Inativo
                        		 	
                        		 	</div>
                        		 	
                             	</div>
                   
                             	<div class="form-row">
                                 
                                 	<div class="col-sm-12">
                                    	<button type="submit" class="btn btn-primary">Alterar</button>
                                     	<a class="btn btn-danger" href="home2.php" role="button">Voltar</a>
                                     
                                 	</div>
                                 
                             	</div>
                              
                              </form>
                              
                             </div>
                
                     </div>
                     
                </div>
                 
     </body>
</html>