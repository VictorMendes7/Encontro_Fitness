 <?php
    use src\Adm;
    use src\RepositorioAdm;
    use src\Logs;
    use src\RepositorioLogs;
    
    
    require_once 'src/Logs.php';
    require_once 'src/RepositorioLogs.php';
    require_once 'src/Adm.php';
    require_once 'src/RepositorioAdm.php';
    
    // Atributos
    
    $nomeCompleto = $_POST['nomeCompleto'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $status = $_POST['status'];
      
    
    $Adm = new Adm();    
    $RA = new RepositorioAdm();
    
    $Adm->setNomeCompleto($nomeCompleto);
    $Adm->setRg($rg);
    $Adm->setCpf($cpf);
    $Adm->setLogin($login);
    $Adm->setSenha($senha);
    $Adm->setStatus($status);
    
    
    $retorno = $RA->cadastrarAdm($Adm);
    if ($retorno == TRUE) {
        
        $mensagem= "Cadastrou um Adm";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        
        $Logs = $RL->salvaLog($mensagem);
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Adm cadastrado com sucesso!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="index.php" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                        </td>
                    </tr>
                  </table>';
        
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha no Cadastro do Adm!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="cadastroAdm.php" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
        
    }
    

    