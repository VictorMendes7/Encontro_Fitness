
<?php


session_start();
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
    $nomeCartao = $_POST['nomeCartao'];
    $cpf = $_POST['cpf'];
    $numeroCartao = $_POST['numeroCartao'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $codSeguranca = $_POST['codSeguranca'];
    
    // Classes e repositórios necessários
    $Cartao = new Cartao();
    $RU = new RepositorioCartao();
    $Cartao->setId($id);
    $Cartao->setNomeCartao($nomeCartao);
    $Cartao->setCpf($cpf);
    $Cartao->setNumeroCartao($numeroCartao);
    $Cartao->setMes($mes);
    $Cartao->setAno($ano);
    $Cartao->setCodSeguranca($codSeguranca);
    
    $retorno = $RU->alterarCartao($Cartao);
    
    if($retorno==TRUE){
        $mensagem= "Alterou informações do Cartao";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        
        $Logs = $RL->salvaLog($mensagem);
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Cartao alterado com sucesso!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="home.php?id=' . $Cartao->getId(). '"  style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                        </td>
                    </tr>
                  </table>';
        
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha na alteração do Cartao!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="alterarCartao2.php?id=' . $Cartao->getId(). '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
    }
