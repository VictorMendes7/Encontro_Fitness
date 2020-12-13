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

    <title>Alterar Encontro</title>
  </head>
    
    <?php 

    use src\Encontro;
    use src\RepositorioEncontro;

    require_once 'src/Encontro.php';
    require_once 'src/RepositorioEncontro.php';

    // variáveis
    $id = $_GET['id'];
    
    // Classes e repositórios necessários
    $Encontro = new Encontro();
    $RU = new RepositorioEncontro();
    
    $Encontro = $RU->consultarEncontro($id, "alterar" );
       

?>
    
  <body>
       
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha do formulario -->
                    <div class="col-12 text-center my-5">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Alterar Encontro</h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos das coluna -->
                        
                         <form method="post" action="alterarEncontro3.php">
                         		<input type="hidden" name="id" value="<?php echo $Encontro->getId(); ?>" />
                                <div class="form-row">
                                    
                                    <div class="form-group col-sm-6">
                                            
                                            <label >Tipo:</label>
                                            <input type="text" class="form-control" name="tipo" placeholder="Tipo" value="<?php echo $Encontro->getTipo(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >horario:</label>
                                            <input type="text" class="form-control" name="horario" placeholder="horario" value="<?php echo $Encontro->getHorario(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Descrecao:</label>
                                            <input type="text" class="form-control" name="descricao" placeholder="descricao" value="<?php echo $Encontro->getDescricao(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Máximo Pessoas:</label>
                                            <input type="text" class="form-control" name="maxpessoas" placeholder="Senha" value="<?php echo $Encontro->getMaxPessoas(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Local:</label>
                                            <input type="text" class="form-control" name="local" placeholder="local" value="<?php echo $Encontro->getLocal(); ?>">
                                    
                                    </div>

                                    <div class="form-group col-sm-6">
                                    
                                    <label >Modalidade:</label>
                                    <input type="text" class="form-control" name="modalidade" placeholder="modalidade" value="<?php echo $Encontro->getModalidade(); ?>">
                            
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
