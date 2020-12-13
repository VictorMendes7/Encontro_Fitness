
<?php
   //session_start();
   include 'verifica_Login.php';

use src\Cartao;
use src\RepositorioCartao;
use src\Logs;
use src\RepositorioLogs;


    require_once 'src/Logs.php';
    require_once 'src/RepositorioLogs.php';
    require_once 'src/Cartao.php';
    require_once 'src/RepositorioCartao.php';

    // variáveis
    $id = $_POST['id'];

// Classes e repositórios necessários
    $Cartao = new Cartao();
    $RU = new RepositorioCartao();


    $retorno = $RU->excluirCartao($id);
    
    if($retorno==TRUe){
        
        $mensagem= "Excluiu um Cartao";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        
        $Logs = $RL->salvaLog($mensagem);
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Cartão excluido com sucesso!</b></td></tr>
                    <tr>
                    <td align="center" colspan="2">
                    <br/>
                    <a href="home.php?id=' . $Cartao->getId() . '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                 </td>
              </tr>
            </table>';
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha na exclusão do Cartão!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="excluirCartao2.php?id=' . $Cartao->getId() . '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
    }
