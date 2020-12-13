<?php
    use src\Cartao;
    use src\RepositorioCartao;
    use src\Logs;
    use src\RepositorioLogs;
    
    
    require_once 'src/Logs.php';
    require_once 'src/RepositorioLogs.php';
    require_once 'src/Cartao.php';
    require_once 'src/RepositorioCartao.php';
    
    // Atributos
    
    $nomecartao = $_POST['nomecartao'];
    $cpf = $_POST['cpf'];
    $numerocartao = $_POST['numerocartao'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $codseguranca = $_POST['codseguranca'];
    
    
    $Cartao = new Cartao();    
    $RA = new RepositorioCartao();


    $Cartao->setNomeCartao($nomecartao);
    $Cartao->setCpf($cpf);
    $Cartao->setNumeroCartao($numerocartao);
    $Cartao->setMes($mes);
    $Cartao->setAno($ano);
    $Cartao->setCodSeguranca($codseguranca);
    
    
    
    $retorno = $RA->cadastrarCartao($Cartao);
    
    if ($retorno == TRUE) {
        
        $mensagem= "Cadastrou uma Cartao";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        $Logs = $RL->salvaLog($mensagem);
  
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Cartao cadastrada com sucesso!</b></td></tr>
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
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha no Cadastro da Cartao!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="cadastrarCartao.php" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
    }
    ?>
    