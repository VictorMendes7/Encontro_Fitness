
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
    $tipoPlano = $_POST['tipoPlano'];
    $valor = $_POST['valor'];
    $status = $_POST['status'];
    
    // Classes e repositórios necessários
    $Assinatura = new Assinatura();
    $RA = new RepositorioAssinatura();
    
    
    $Assinatura->setId($id);
    $Assinatura->setTipoPlano($tipoPlano);
    $Assinatura->setValor($valor);
    $Assinatura->setStatus($status);
    
    $retorno = $RA->alterarAssinatura($Assinatura);
    
    if($retorno == TRUE){
        
        $mensagem= "Alterou uma assinatura";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        
        $Logs = $RL->salvaLog($mensagem);
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Assinatura alterada com sucesso!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="home2.php?nome=' . $Assinatura->getTipoPlano(). '"  style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                        </td>
                    </tr>
                  </table>';
        
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha na alteração da Assinatura!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="alterarAssinatura2.php?tipoPlano=' . $Assinatura->getTipoPlano(). '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
        
    }
