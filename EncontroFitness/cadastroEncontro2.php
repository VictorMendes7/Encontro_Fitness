<?php
    use src\Encontro;
    use src\RepositorioEncontro;
    
    require_once 'src/Encontro.php';
    require_once 'src/RepositorioEncontro.php';
    
    // Atributos
    
    $tipo = $_POST['tipo'];
    $horario = $_POST['horario'];
    $descricao = $_POST['descricao'];
    $max_pessoas = $_POST['max_pessoas'];
    $local = $_POST['local'];
    $modalidade = $_POST['modalidade'];

    
   
    $Encontro = new Encontro();    
    $RE = new RepositorioEncontro();
    
    $Encontro->setTipo($tipo);
    $Encontro->setHorario($horario);
    $Encontro->setDescricao($descricao);
    $Encontro->setMax_pessoas($max_pessoas);
    $Encontro->setLocal($local);
    $Encontro->setModalidade($modalidade);
    
    $retorno = $RE->cadastrarEncontro($Encontro);

    if($retorno==TRUE){
       
        echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:green;color:white;border-radius:5px;" ><td align="center"><b>Encontro cadastrado com sucesso!</b></td></tr>
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
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha no Cadastro do Encontro!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="cadastroEncontro.php" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
    }
    

    