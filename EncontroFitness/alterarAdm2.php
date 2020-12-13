<?php

if (!isset($_SESSION['logado']) || $_SESSION['logado'] != TRUE)
{
    //session_start();
    include 'verifica_Login.php';
}


?>
<!doctype html>

<?php 

    use src\Adm;
    use src\RepositorioAdm;

    require_once 'src/Adm.php';
    require_once 'src/RepositorioAdm.php';

    // variáveis
    $id = $_GET['id'];
    
    // Classes e repositórios necessários
    $Adm = new Adm();
    $RA = new RepositorioAdm();
    
    $Adm= $RA->consultarAdm($id, "alterar" );
       

?>
<html lang="Pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">

    <title>Alterar Adm</title>
  </head>
  <body>
       
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha do formulario -->
                    <div class="col-12 text-center my-5">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Alterar Adm</h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos da coluna -->
                        
                         <form method="post" action="alterarAdm3.php">
                               
                                <div class="form-row">
                                
                                    <div class="form-group col-sm-6">
                                            <input type="hidden" name="id" value="<?php echo $Adm->getId(); ?>" />
                                            <label >Nome Completo:</label>
                                            <input type="text" class="form-control" name="nomeCompleto" value="<?php echo $Adm->getNomeCompleto(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >CPF:</label>
                                            <input type="text" class="form-control"  maxlength="14" name="cpf" value="<?php echo $Adm->getCpf(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >RG:</label>
                                            <input type="text" class="form-control"  maxlength="10" name="rg" value="<?php echo $Adm->getRg(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Login:</label>
                                            <input type="text" class="form-control" name="login" value="<?php echo $Adm->getLogin(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Senha:</label>
                                            <input type="password" class="form-control" name="senha"  value="<?php echo $Adm->getSenha(); ?>">
                                            
                                    </div>
                                    
                                    <div class="col-sm-6">
                             	
                             		<label >Status:</label>
                             		
                      					<input type="radio" name="status" value="1" <?php if ( $Adm->getStatus() == 1 ) echo "checked"; ?>> Ativo
                      					<input type="radio" name="status" value="0" <?php if ( $Adm->getStatus() == 0 ) echo "checked"; ?>> Inativo
                        		 	
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
