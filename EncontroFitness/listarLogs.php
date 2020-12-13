<?php

if (!isset($_SESSION['logado']) || $_SESSION['logado'] != TRUE)
{
    //session_start();
    include 'verifica_Login.php';
}


?>
<!doctype html>

<?php

use src\Logs;
use src\RepositorioLogs;

require_once 'src/Logs.php';
require_once 'src/RepositorioLogs.php';

$RL = new RepositorioLogs();



$logs = $RL->listarLogs();
$contador = 0;


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

    <title>Relatorio Logs</title>
  </head>
  <body>
       
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha Titulo -->
                    <div class="col-12 text-center my-5">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"><i class="fa fa-clipboard text-primary"></i> Relatório de Logs </h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <!-- classe Row responsavel por uma linha Formulario -->
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos da coluna -->
                        
                         <form method="post" action="consultarAssinatura2.php">
                               
                                <div class="form-row">
                        
                                    <div class="form-group col-sm-1">
                                    
                                            <label class="form-control "> ID</label>
                                      
                                    </div>
                                    
                                    <div class="form-group col-sm-3">
                                    
                                            <label class="form-control "> DATA</label>
                                      
                                    </div>
                                    
                                   <!--   <div class="form-group col-sm-2">
                                    
                                            <label class="form-control "> IP:</label>
                                      
                                    </div>
                                    -->
                                    
                                    <div class="form-group col-sm-2">
                                    
                                            <label class="form-control "> LOGIN</label>
                                      
                                    </div>
                                    
                                    <div class="form-group col-sm-4">
                                    
                                            <label class="form-control "> MENSAGEM</label>
                                      
                                    </div>
                          
                             	</div>
                             	
                          			<?php 
                                    
                                        $quantidade = (is_array($logs) ? count($logs) : 0 );
                                        
                                       
                                        while($contador < $quantidade)
                                        {
                                            $Logs = $logs[$contador];
                                            
                                            
                                    ?>
                          
                              <div class="form-row">
                        
                                    <div class="form-group col-sm-1">
                                    	
                                    	<input type="text" class="form-control"  value="<?php echo $Logs->getId(); ?>">
                                           
                                    </div>
                                    
                                    <div class="form-group col-sm-3">
                                    
                                    	<input type="text" class="form-control"  value="<?php echo $Logs->getHora(); ?>">
                                    	
                                            
                                      
                                    </div>
                                    <!--  
                                    <div class="form-group col-sm-2">
                                    
                                    	<input type="text" class="form-control"  value="<?php echo $Logs->getIp(); ?>">
                                           
                                      
                                    </div>
                                    -->
                                    <div class="form-group col-sm-2">
                                    
                                    	<input type="text" class="form-control"  value="<?php echo $Logs->getLogin(); ?>">
                                            
                                      
                                    </div>
                                    
                                    <div class="form-group col-sm-4">
                                    
                                    	<textarea type="text" class="form-control" ><?php echo $Logs->getMensagem(); ?></textarea>
                                            
                                      
                                    </div>
                          
                             	</div>
                             	<?php 
                                    $contador++;
                                }
                                
                                ?>
                          
                             <div class="form-row">
                                 
                                 <div class="col-sm-12">
                                    
                                     <a class="btn btn-danger" href="home2.php" role="button">Voltar</a>
                                     
                                 </div>
                                 
                             </div>
                             
                         </form>
                         
                     </div>
                     
                </div>
            
           </div>        
     </body>
</html>
