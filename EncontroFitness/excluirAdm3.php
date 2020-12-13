
<?php
  

use src\Adm;
use src\RepositorioAdm;
use src\Logs;
use src\RepositorioLogs;


    require_once 'src/Logs.php';
    require_once 'src/RepositorioLogs.php';
    require_once 'src/Adm.php';
    require_once 'src/RepositorioAdm.php';

    // variáveis
    $id = $_POST['id'];

// Classes e repositórios necessários
    $Adm = new Adm();
    $RA = new RepositorioAdm();


    $retorno = $RA->excluirAdm($id);
    
    if ($retorno == TRUE) {
        $mensagem= "Conta do Adm foi excluida ";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        $Logs = $RL->salvaLog($mensagem);
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Adm excluido com sucesso!</b></td></tr>
                    <tr>
                     <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="home.php" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                        </td>
                    </tr>
                  </table>';
        
        
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha na exclusão da Agenda!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="excluirAdm2.php?id=' . $Adm->getid() . '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
        
    }
