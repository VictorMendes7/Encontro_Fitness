
<?php


session_start();
include 'verifica_Login.php';

    use src\Usuario;
    use src\RepositorioUsuario;
    use src\Logs;
    use src\RepositorioLogs;
    
    
    require_once 'src/Logs.php';
    require_once 'src/RepositorioLogs.php';
    require_once 'src/Usuario.php';
    require_once 'src/RepositorioUsuario.php';

    // variáveis 
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $sexo = $_POST['sexo'];
    $dataNascimento = $_POST['dataNascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $estadoCivil = $_POST['estadoCivil'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $complemento = $_POST['complemento'];
    $pontoReferencia = $_POST['pontoReferencia'];
    $login = $_POST['login'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $status = $_POST['status'];
    
    // Classes e repositórios necessários
    $Usuario = new Usuario();
    $RU = new RepositorioUsuario();
    $Usuario->setId($id);
    $Usuario->setNome($nome);
    $Usuario->setSobrenome($sobrenome);
    $Usuario->setSexo($sexo);
    $Usuario->setDataNascimento($dataNascimento);
    $Usuario->setEmail($email);
    $Usuario->setSenha($senha);
    $Usuario->setEstadoCivil($estadoCivil);
    $Usuario->setCpf($cpf);
    $Usuario->setRg($rg);
    $Usuario->setUf($uf);
    $Usuario->setCidade($cidade);
    $Usuario->setCep($cep);
    $Usuario->setLogradouro($logradouro);
    $Usuario->setComplemento($complemento);
    $Usuario->setPontoReferencia($pontoReferencia);
    $Usuario->setLogin($login);
    $Usuario->setNumero($numero);
    $Usuario->setBairro($bairro);
    $Usuario->setStatus($status);
    
    $retorno = $RU->alterarUsuario($Usuario);
    
    if($retorno==TRUE){
        $mensagem= "Alterou informações do Usuario";
        
        // Classes e repositórios necessários
        $Logs = new Logs();
        $RL = new RepositorioLogs();
        
        
        $Logs = $RL->salvaLog($mensagem);
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Usuário alterado com sucesso!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="alterarUsuario2.php?id=' . $Usuario->getId(). '"  style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                        </td>
                    </tr>
                  </table>';
        
    }
    else
    {
        
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha na alteração do usuário!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="alterarUsuario2.php?id=' . $Usuario->getId(). '" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
    }
