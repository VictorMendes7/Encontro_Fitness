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

    <title>Alterar Cartao</title>
  </head>
    
    <?php 

    use src\Cartao;
    use src\RepositorioCartao;

    require_once 'src/Cartao.php';
    require_once 'src/RepositorioCartao.php';

    // variáveis
    $id = $_GET['id'];
    
    // Classes e repositórios necessários
    $Cartao = new Cartao();
    $RU = new RepositorioCartao();
    
    $Cartao = $RU->consultarCartao($id, "alterar" );
       

?>
    
  <body>
       
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha do formulario -->
                    <div class="col-12 text-center my-5">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Alterar Cartao</h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos das coluna -->
                        
                         <form method="post" action="alterarCartao3.php">
                         		<input type="hidden" name="id" value="<?php echo $Cartao->getId(); ?>" />
                                <div class="form-row">
                                    
                                    <div class="form-group col-sm-6">
                                            
                                            <label >Nome Cartão:</label>
                                            <input type="text" class="form-control" name="nomeCartao" placeholder="" value="<?php echo $Cartao->getNomeCartao(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >CPF:</label>
                                            <input type="text" class="form-control" name="cpf" placeholder="" value="<?php echo $Cartao->getCpf(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Numero Cartão:</label>
                                            <input type="text" class="form-control" name="numeroCartao" placeholder="" value="<?php echo $Cartao->getNumeroCartao(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Mes:</label>
                                            <input type="text" class="form-control" name="mes" placeholder="" value="<?php echo $Cartao->getMes(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Ano:</label>
                                            <input type="text" class="form-control" name="ano" placeholder="" value="<?php echo $Cartao->getAno(); ?>">
                                    
                                    </div>

                                    <div class="form-group col-sm-6">
                                    
                                    <label >Código de Segurança:</label>
                                    <input type="text" class="form-control" name="codSeguranca" placeholder="" value="<?php echo $Cartao->getCodSeguranca(); ?>">
                            
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
