
<?php


session_start();
include 'verifica_Login.php';

    use src\Encontro;
    use src\RepositorioEncontro;
    use src\Logs;
    use src\RepositorioLogs;
    
    
    require_once 'src/Logs.php';
    require_once 'src/RepositorioLogs.php';
    require_once 'src/Encontro.php';
    require_once 'src/RepositorioEncontro.php';

    // variáveis 
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $horario = $_POST['horario'];
    $descricao = $_POST['descricao'];
    $maxpessoas = $_POST['maxpessoas'];
    $local = $_POST['local'];
    $modalidade = $_POST['modalidade'];
    
    // Classes e repositórios necessários
    $Encontro = new Encontro();
    $RU = new RepositorioEncontro();
    $Encontro->setId($id);
    $Encontro->setTipo($tipo);
    $Encontro->setHorario($horario);
    $Encontro->setDescricao($descricao);
    $Encontro->setMax_pessoas($maxpessoas);
    $Encontro->setLocal($local);
    $Encontro->setModalidade($modalidade);
    
    $retorno = $RU->alterarEncontro($Encontro);
    
    if($retorno==TRUE){
        $mensagem= "Alterou informações do Encontro";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        
        $Logs = $RL->salvaLog($mensagem);
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Encontro alterado com sucesso!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="home.php?id=' . $Encontro->getId(). '"  style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                        </td>
                    </tr>
                  </table>';
        
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha na alteração do Encontro!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="alterarEncontro2.php?id=' . $Encontro->getId(). '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
    }
