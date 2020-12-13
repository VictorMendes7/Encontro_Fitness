
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
    $nomeCompleto = $_POST['nomeCompleto'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $status = $_POST['status'];
    
    // Classes e repositórios necessários
    $Adm = new Adm();
    $RA = new RepositorioAdm();
    $Adm->setId($id);
    $Adm->setNomeCompleto($nomeCompleto);
    $Adm->setCpf($cpf);
    $Adm->setRg($rg);
    $Adm->setLogin($login);
    $Adm->setSenha($senha);
    $Adm->setStatus($status);
    
    $retorno = $RA->alterarAdm($Adm);
    
    if ($retorno == TRUE) {
        
        $mensagem= "Alterou informações do Adm";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        $Logs = $RL->salvaLog($mensagem);
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Adm alterado com sucesso!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="alterarAdm2.php?id=' . $Adm->getId(). '"  style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                        </td>
                    </tr>
                  </table>';
        
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha na alteração do Adm!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="alterarAdm2.php?id=' . $Adm->getId(). '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
        
       
        
    }
  
    
    
  