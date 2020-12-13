<?php
namespace src;


require_once 'src/Usuario.php';
require_once 'src/ConexaoMySQL.php';

class RepositorioUsuario
{
    private $ConexaoMySQL;
    private $Usuario;
    private $autenticado;
    
    public function __construct(){
        $this->autenticado = FALSE;
        $this->ConexaoMySQL = new \ConexaoMySQL();
        $this->Usuario = new Usuario();
    }
    
    // consultar usuario
    public function cadastrarUsuario($Usuario){
        
        $retorno = FALSE;
        
        $cadastro = " INSERT INTO USUARIO " .
            "(NOME, SOBRENOME, SEXO, DATANASCIMENTO,EMAIL,SENHA,ESTADOCIVIL,
              CPF,RG,UF,CIDADE,CEP,LOGRADOURO,COMPLEMENTO,PONTOREFERENCIA,
              LOGIN,NUMERO,BAIRRO,STATUS) VALUES " .
              "('" . $Usuario->getNome() ."',"."
              '" . $Usuario->getSobrenome() ."',"."
              '" . $Usuario->getSexo() ."',"."
              '" . $Usuario->getDataNascimento() ."',"."
              '" . $Usuario->getEmail() . "',"."
              '" . $Usuario->getSenha() . "',"."
              '" . $Usuario->getEstadoCivil() . "',"."
              '" . $Usuario->getCpf() . "',"."
              '" . $Usuario->getRg() . "',"."
              '" . $Usuario->getUf() . "',"."
              '" . $Usuario->getCidade() . "',"."
              '" . $Usuario->getCep() . "',"."
              '" . $Usuario->getLogradouro() . "',"."
              '" . $Usuario->getComplemento() . "',"."
              '" . $Usuario->getPontoReferencia() . "',"."
              '" . $Usuario->getLogin() . "',"."
              '" . $Usuario->getNumero() . "',"."
              '" . $Usuario->getBairro() . "',"."
              " . $Usuario->getStatus() . ")";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
       
        
        if ( $conexao->query($cadastro) === TRUE) {
            
            $retorno = TRUE;
            
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
    //autenticar login
    public function autenticarUsuario($login,$senha){
        $Usuario = new Usuario();
        $consulta = "SELECT * FROM USUARIO WHERE  STATUS = 1 AND LOGIN = '". $login ."' AND SENHA = '".$senha."';";
        $conexao = $this->ConexaoMySQL->abrirBanco();
        $resultado = $conexao->query($consulta);
        
        if ( $resultado->num_rows > 0 ){
            $linha = $resultado->fetch_assoc();
            
            $Usuario->setId($linha['ID']);
            $Usuario->setNome($linha['NOME']);
            $Usuario->setSobrenome($linha['SOBRENOME']);
            $Usuario->setSexo($linha['SEXO']);
            $Usuario->setDataNascimento($linha['DATANASCIMENTO']);
            $Usuario->setEmail($linha['EMAIL']);
            $Usuario->setSenha($linha['SENHA']);
            $Usuario->setEstadoCivil($linha['ESTADOCIVIL']);
            $Usuario->setCpf($linha['CPF']);
            $Usuario->setRg($linha['RG']);
            $Usuario->setUf($linha['UF']);
            $Usuario->setCidade($linha['CIDADE']);
            $Usuario->setCep($linha['CEP']);
            $Usuario->setLogradouro($linha['LOGRADOURO']);
            $Usuario->setComplemento($linha['COMPLEMENTO']);
            $Usuario->setPontoReferencia($linha['PONTOREFERENCIA']);
            $Usuario->setLogin($linha['LOGIN']);
            $Usuario->setNumero($linha['NUMERO']);
            $Usuario->setBairro($linha['BAIRRO']);
            $Usuario->setStatus($linha['STATUS']);
            
            $this->autenticado = TRUE;
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $Usuario;
    }
   
    
    //alterar usuario
    
    public function consultarUsuario($id,$modo){
        
        $Usuario = new Usuario();
        
        $consulta = "SELECT * FROM USUARIO WHERE ID = " . $id . ";";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        
        if ( $resultado->num_rows > 0 ){
            
            while( $linha = $resultado->fetch_assoc() )
            {
                $Usuario->setId($linha['ID']);
                $Usuario->setNome($linha['NOME']);
                $Usuario->setSobrenome($linha['SOBRENOME']);
                $Usuario->setSexo($linha['SEXO']);
                $Usuario->setDataNascimento($linha['DATANASCIMENTO']);
                $Usuario->setEmail($linha['EMAIL']);
                $Usuario->setSenha($linha['SENHA']);
                $Usuario->setEstadoCivil($linha['ESTADOCIVIL']);
                $Usuario->setCpf($linha['CPF']);
                $Usuario->setRg($linha['RG']);
                $Usuario->setUf($linha['UF']);
                $Usuario->setCidade($linha['CIDADE']);
                $Usuario->setCep($linha['CEP']);
                $Usuario->setLogradouro($linha['LOGRADOURO']);
                $Usuario->setComplemento($linha['COMPLEMENTO']);
                $Usuario->setPontoReferencia($linha['PONTOREFERENCIA']);
                $Usuario->setLogin($linha['LOGIN']);
                $Usuario->setNumero($linha['NUMERO']);
                $Usuario->setBairro($linha['BAIRRO']);
                $Usuario->setStatus($linha['STATUS']);
                
                if ( $modo == "consultar" ){
                    echo '<!doctype html>
                        <html lang="Pt-br">
                          <head>
                            <!-- Required meta tags -->
                            <meta charset="utf-8">
                            
                        
                            <!-- Bootstrap CSS -->
                            <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
                            <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
                            <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
                        
                            <title>Consultar Usuario</title>
                          </head>
                          <body>
                    	<div class="container">
                          <!-- Div responsavel por todo o formulario-->
                                    <div class="row">
                                      <!-- classe Row responsavel por uma linha do formulario -->
                                        <div class="col-12 text-center my-5">
                                            <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                                            <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Resultado da consulta</h1>
                                             <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                                        </div>
                                     </div>    
                                     <div class="row justify-content-center mb-5">
                                            
                                         <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos das coluna -->
                                            
                                             <form method="post" action="excluirUsuario3.php">
                                             
                                             		
                                                    <div class="form-row">
                                                        
                                                       <div class="form-group col-sm-6">
                                                                <label >Nome:</label>
                                                                <input type="text" class="form-control" name="nome" placeholder="Nome" value="'. $Usuario->getNome().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Sobrenome:</label>
                                                                <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="'.$Usuario->getSobrenome().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Login:</label>
                                                                <input type="text" class="form-control" name="login" placeholder="Login" value="'. $Usuario->getLogin().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Senha:</label>
                                                                <input type="password" class="form-control" name="senha" placeholder="Senha" value="'. $Usuario->getSenha().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >E-Mail:</label>
                                                                <input type="email" class="form-control" name="email" placeholder="@-Email" value="'. $Usuario->getEmail().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Sexo:</label>
                                                                <input type="text" class="form-control" name="sexo" value="'.$Usuario->getSexo().'" readonly>
                                                                      
                                                        
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Data de Nascimento:</label>
                                                                <input type="date" class="form-control" name="dataNascimento" value="'. $Usuario->getDataNascimento().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Estado Civil:</label>
                                                                <input type="text" class="form-control" name="estadoCivil" value="'.$Usuario->getEstadoCivil().'" readonly>
                                                                     
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >CPF:</label>
                                                                <input type="text" class="form-control" name="cpf" maxlength="14" placeholder="CPF" value="'. $Usuario->getCpf().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >RG:</label>
                                                                <input type="text" class="form-control" name="rg" maxlength="10" placeholder="RG" value="'. $Usuario->getRg().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >UF:</label>
                                                                <input type="text" class="form-control" name="uf" value="'. $Usuario->getUf().'" readonly >
                                                                     
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-row">
                                                        
                                                        <div class="form-group col-md-6">
                                                            
                                                            <label >Cidade:</label>
                                                            <input type="text" class="form-control" name="cidade" placeholder="Cidade" value="'. $Usuario->getCidade().'"readonly/>
                                                            
                                                        </div>
                                                        
                                                        <div class="form-group col-md-4">
                                                            
                                                            <label >Bairro:</label>
                                                            <input type="text" class="form-control" name="bairro" placeholder="Bairro" value="'. $Usuario->getBairro().'"readonly/>
                                                            
                                                        </div>
                                                            
                                                        <div class="form-group col-md-2">
                                                            
                                                            <label >CEP:</label>
                                                            <input type="text" class="form-control" maxlength="8" name="cep" placeholder="CEP" value="'. $Usuario->getCep().'" readonly/>
                                                            
                                                        </div>
                                                  </div>
                                                 
                                                 <div class="form-row">
                                                 
                                                     <div class="form-group col-sm-6">
                                                        
                                                                <label >Logradouro:</label>
                                                                <input type="text" class="form-control" name="logradouro" placeholder="Logradouro" value="'.$Usuario->getLogradouro().'"readonly>
                                                        
                                                    </div>
                                                     
                                                     <div class="form-group col-sm-4">
                                                        
                                                                <label >Complemento:</label>
                                                                <input type="text" class="form-control" name="complemento" placeholder="Complemento" value="'.$Usuario->getComplemento().'"readonly>
                                                        
                                                    </div>
                                                     
                                                     
                                                     <div class="form-group col-sm-2">
                                                     
                                                         <label >Numero:</label>
                                                            <input type="text" class="form-control"  name="numero" placeholder="N°" value="'. $Usuario->getNumero().'"readonly/>
                                                            
                                                                
                                                     </div>
                                                 
                                                     
                                                     
                                                 </div>
                                                 
                                                 <div class="form-row">
                                                 
                                                 		<div class="form-group col-sm-4">
                                                        
                                                                <label >Ponto de Referencia:</label>
                                                                <input type="tet" class="form-control" name="pontoReferencia" placeholder="Ponto de Referencia" value="'. $Usuario->getPontoReferencia().'"readonly>
                                                        
                                                       </div>
                                                               
                                                 </div>
                                                 
                                                 <div class="form-row">
                                                 
                                                 	<div class="col-sm-2">
                                                 	
                                                 		<label >Status:</label>
                                                 		
                                          					<input type="number" class="form-control" name="status" value="'. $Usuario->getStatus().'" readonly/> 
                                          					
                                                 	</div>
                                                 	
                                                 </div>
                                                 <div class="form-row">
                                                     
                                                     <div class="col-sm-12">
                                                        
                                                         <a class="btn btn-danger" href="home2.php" role="button">Voltar</a>
                                                         
                                                     </div>
                                                     
                                                 </div>
                                                 
                                             </form>
                                             
                                         </div>
                                         
                                    </div>
                                
                               </div>        
                         </body>
                    </html>';
                }
            }
            
        }
        else
        {
            
            echo '<br/><table width="400" border="0" style="background:red;color:white;border-radius:5px;" align="center"><tr><td align="center"><b>Usuário não encontrado!</b></td></tr></table>';
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $Usuario;
    }
    
    
    
    public function alterarUsuario($Usuario){
        
        $retorno = FALSE;
        
        
        $alterar = " UPDATE USUARIO SET LOGIN = '" . $Usuario->getLogin() .
        "', NOME = '" . $Usuario->getNome() .
        "', SOBRENOME = '" . $Usuario->getSobrenome().
        "', SEXO = '" . $Usuario->getSexo() .
        "', DATANASCIMENTO = '" . $Usuario->getDataNascimento() .
        "', EMAIL = '". $Usuario->getEmail() .
        "', SENHA = '" . $Usuario->getSenha() .
        "', ESTADOCIVIL = '" . $Usuario->getEstadoCivil() .
        "', CPF = '" . $Usuario->getCpf() .
        "', RG = '" . $Usuario->getRg() .
        "', UF = '" . $Usuario->getUf() .
        "', CIDADE = '" . $Usuario->getCidade() .
        "', CEP = '" . $Usuario->getCep() .
        "', LOGRADOURO = '" . $Usuario->getLogradouro() .
        "', COMPLEMENTO = '" . $Usuario->getComplemento() .
        "', PONTOREFERENCIA = '" . $Usuario->getPontoReferencia() .
        "', NUMERO = '" . $Usuario->getNumero() .
        "', BAIRRO = '" . $Usuario->getBairro() .
        "', STATUS = " . $Usuario->getStatus() .
        " WHERE ID = " . $Usuario->getId() . ";";
        
        
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        if ( $conexao->query($alterar) === TRUE) {
            
            $retorno = TRUE;
  
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
    public function listarUsuario(){
        
        $usuarios = null;
        
        $consulta = "SELECT * FROM USUARIO";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        if ( $resultado->num_rows > 0 ){
            
            
            $contador = 0;
            while ( $linha = $resultado->fetch_assoc() ){
                
                $Usuario = new Usuario();
                $Usuario->setId($linha['ID']);
                $Usuario->setNome($linha['NOME']);
                $Usuario->setSobrenome($linha['SOBRENOME']);
                $Usuario->setSexo($linha['SEXO']);
                $Usuario->setDataNascimento($linha['DATANASCIMENTO']);
                $Usuario->setEmail($linha['EMAIL']);
                $Usuario->setSenha($linha['SENHA']);
                $Usuario->setEstadoCivil($linha['ESTADOCIVIL']);
                $Usuario->setCpf($linha['CPF']);
                $Usuario->setRg($linha['RG']);
                $Usuario->setUf($linha['UF']);
                $Usuario->setCidade($linha['CIDADE']);
                $Usuario->setCep($linha['CEP']);
                $Usuario->setLogradouro($linha['LOGRADOURO']);
                $Usuario->setComplemento($linha['COMPLEMENTO']);
                $Usuario->setPontoReferencia($linha['PONTOREFERENCIA']);
                $Usuario->setLogin($linha['LOGIN']);
                $Usuario->setNumero($linha['NUMERO']);
                $Usuario->setBairro($linha['BAIRRO']);
                $Usuario->setStatus($linha['STATUS']);
                
                $usuarios[$contador] = $Usuario;
                $contador++;
                
                
            }
            
            
        } else {
            
            echo '<br/>
                    <table width="400" border="0" style="background:red;color:white;border-radius:5px;" align="center">
                        <tr><td align="center"><b>nenhum Usuario  cadastrado!</b></td></tr>
                    </table>';
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $usuarios;
        
    }
    
    public function excluirUsuario($id){
        
        $retorno = FALSE;
        
        $excluir = "DELETE FROM USUARIO WHERE ID = " . $id . ";";
        
       
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        if ( $conexao->query($excluir) === TRUE) {
            
            $retorno = TRUE;
           
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
       
    }
    
    public function getAutenticado() {
        return $this->autenticado;
    }
    
    
}

