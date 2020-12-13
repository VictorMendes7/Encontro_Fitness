 <?php
    use src\Assinatura;
    use src\RepositorioAssinatura;
    use src\Logs;
    use src\RepositorioLogs;
    
    
    require_once 'src/Logs.php';
    require_once 'src/RepositorioLogs.php';
    require_once 'src/Assinatura.php';
    require_once 'src/RepositorioAssinatura.php';
    
    // Atributos
    
    $tipoPlano = $_POST['tipoPlano'];
    $valor = $_POST['valor'];
    $status = $_POST['status'];
    
    
    $Assinatura = new Assinatura();    
    $RA = new RepositorioAssinatura();


    $Assinatura->setTipoPlano($tipoPlano);
    $Assinatura->setValor($valor);
    $Assinatura->setStatus($status);
    
    
    
    $retorno = $RA->cadastrarAssinatura($Assinatura);
    
    if ($retorno == TRUE) {
        
        $mensagem= "Cadastrou uma assinatura";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        $Logs = $RL->salvaLog($mensagem);
  
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Assinatura cadastrada com sucesso!</b></td></tr>
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
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha no Cadastro da Assinatura!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="cadastrarAssinatura.php" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
    }
    ?>
    