
<?php
   //session_start();
   include 'verifica_Login.php';

use src\Usuario;
use src\RepositorioUsuario;
use src\Logs;
use src\RepositorioLogs;


    require_once 'src/Logs.php';
    require_once 'src/RepositorioLogs.php';
    require_once 'src/Usuario.php';
    require_once 'src/RepositorioUsuario.php';

    // variáveis
    $id = $_POST['id'];

// Classes e repositórios necessários
    $Usuario = new Usuario();
    $RU = new RepositorioUsuario();


    $retorno = $RU->excluirUsuario($id);
    
    if($retorno==TRUe){
        
        $mensagem= "Excluiu um Usuario";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        
        $Logs = $RL->salvaLog($mensagem);
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Usuário excluido com sucesso!</b></td></tr>
                    <tr>
                    <td align="center" colspan="2">
                    <br/>
                    <a href="home2.php?id=' . $Usuario->getId() . '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                 </td>
              </tr>
            </table>';
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha na exclusão do usuário!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="excluirUsuario2.php?id=' . $Usuario->getId() . '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
    }
