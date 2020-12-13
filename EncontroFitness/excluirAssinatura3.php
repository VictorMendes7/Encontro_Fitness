
<?php


    use src\RepositorioAssinatura;
    use src\Assinatura;
    use src\Logs;
    use src\RepositorioLogs;
    
    
    require_once 'src/Logs.php';
    require_once 'src/RepositorioLogs.php';
    require_once 'src/RepositorioAssinatura.php';
    require_once 'src/Assinatura.php';

    // variáveis
    $id = $_POST['id'];

// Classes e repositórios necessários
    $Assinatura = new Assinatura();
    $RA = new RepositorioAssinatura();


    $retorno = $RA->excluirAssinatura($id);
    
    if($retorno == TRUE){
        
        
        $mensagem= "Excluiu uma assinatura";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        
        $Logs = $RL->salvaLog($mensagem);
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b> Assinatura excluida com sucesso!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="excluirAssinatura.php?tipoPlano=' . $Assinatura->getTipoPlano() . '"  style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                        </td>
                    </tr>
                  </table>';
        
       
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha na exclusão da Assinatura!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="excluirAssinatura.php?tipoPlano=' . $Assinatura->getTipoPlano() . '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
    }
        