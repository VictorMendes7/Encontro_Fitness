<?php
namespace src;


require_once 'src/Cartao.php';
require_once 'src/ConexaoMySQL.php';

class RepositorioCartao
{
    private $ConexaoMySQL;
    private $Cartao;
    private $autenticado;
    
    public function __construct(){
        $this->autenticado = FALSE;
        $this->ConexaoMySQL = new \ConexaoMySQL();
        $this->Cartao = new Cartao();
    }
    
    // consultar Cartao
    public function cadastrarCartao($Cartao){
        
        $retorno = FALSE;
        echo $Cartao->getNomeCartao();
        echo ',';
        echo $Cartao->getCpf();
        echo ',';
        echo $Cartao->getNumeroCartao();
        echo ',';
        echo $Cartao->getMes();
        echo ',';
        echo $Cartao->getAno();
        echo ',';
        echo $Cartao->getCodSeguranca();
        $cadastro = " INSERT INTO Cartao " .
            "(NOMECARTAO, CPF, NUMEROCARTAO, MES, ANO, CODSEGURANCA) VALUES " .
              "('" . $Cartao->getNomeCartao() ."',"."
              " . $Cartao->getCpf() .","."
              " . $Cartao->getNumeroCartao() .","."
              " . $Cartao->getMes() .","."
              " . $Cartao->getAno() . ","."
              " . $Cartao->getCodSeguranca() . ")";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
       
        
        if ( $conexao->query($cadastro) === TRUE) {
            
            $retorno = TRUE;
            
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
   
   
    
    //alterar Cartao
    
    public function consultarCartao($id,$modo){
        
        $Cartao = new Cartao();
        
        $consulta = "SELECT * FROM Cartao WHERE ID = " . $id . ";";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        
        if ( $resultado->num_rows > 0 ){
            
            while( $linha = $resultado->fetch_assoc() )
            {
                $Cartao->setId($linha['ID']);
                $Cartao->setNomeCartao($linha['NOMECARTAO']);
                $Cartao->setCpf($linha['CPF']);
                $Cartao->setNumeroCartao($linha['NUMEROCARTAO']);
                $Cartao->setMes($linha['MES']);
                $Cartao->setAno($linha['ANO']);
                $Cartao->setCodSeguranca($linha['CODSEGURANCA']);
                
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
                        
                            <title>Consultar Cartao</title>
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
                                            
                                             <form method="post" action="excluirCartao3.php">
                                             
                                             		
                                                    <div class="form-row">
                                                        
                                                       <div class="form-group col-sm-6">
                                                                <label >Nome Cartao:</label>
                                                                <input type="text" class="form-control" name="nome" placeholder="Nome" value="'. $Cartao->getNomeCartao().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >CPF:</label>
                                                                <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="'.$Cartao->getCpf().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Numero Cartao:</label>
                                                                <input type="text" class="form-control" name="login" placeholder="Login" value="'. $Cartao->getNumeroCartao().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Mes:</label>
                                                                <input type="text" class="form-control" name="senha" placeholder="Senha" value="'. $Cartao->getMes().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Ano:</label>
                                                                <input type="text" class="form-control" name="email" placeholder="@-Email" value="'. $Cartao->getAno().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Codigo Segurança:</label>
                                                                <input type="text" class="form-control" name="sexo" value="'.$Cartao->getCodSeguranca().'" readonly>
                                                                      
                                                        
                                                        </div>
                                                        
                                                        
                                                       
                                                
                                                 <div class="form-row">
                                                     
                                                     <div class="col-sm-12">
                                                        
                                                         <a class="btn btn-danger" href="home.php" role="button">Voltar</a>
                                                         
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
        
        return $Cartao;
    }
    
    
    
    public function alterarCartao($Cartao){
        
        $retorno = FALSE;
        
        
        $alterar = " UPDATE Cartao SET ID = " . $Cartao->getId() .
        ", NOMECARTAO = '" . $Cartao->getNomeCartao() .
        "', CPF = " . $Cartao->getCpf().
        ", NUMEROCARTAO = " . $Cartao->getNumeroCartao() .
        ", MES = " . $Cartao->getMes() .
        ", ANO = ". $Cartao->getAno() .
        ", CODSEGURANCA = " . $Cartao->getCodSeguranca() .
        " WHERE ID = " . $Cartao->getId() . ";";
        
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        if ( $conexao->query($alterar) === TRUE) {
            
            $retorno = TRUE;
  
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
    public function listarCartao(){
        
        $Cartaos = null;
        
        $consulta = "SELECT * FROM Cartao";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        if ( $resultado->num_rows > 0 ){
            
            
            $contador = 0;
            while ( $linha = $resultado->fetch_assoc() ){
                
                $Cartao = new Cartao();
                $Cartao->setId($linha['ID']);
                $Cartao->setNomeCartao($linha['NOMECARTAO']);
                $Cartao->setCpf($linha['CPF']);
                $Cartao->setNumeroCartao($linha['NUMEROCARTAO']);
                $Cartao->setMes($linha['MES']);
                $Cartao->setAno($linha['ANO']);
                $Cartao->setCodSeguranca($linha['CODSEGURANCA']);
                
                $Cartaos[$contador] = $Cartao;
                $contador++;
                
                
            }
            
            
        } else {
            
            echo '<br/>
                    <table width="400" border="0" style="background:red;color:white;border-radius:5px;" align="center">
                        <tr><td align="center"><b>nenhum Cartao  cadastrado!</b></td></tr>
                    </table>';
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $Cartaos;
        
    }
    
    public function excluirCartao($id){
        
        $retorno = FALSE;
        
        $excluir = "DELETE FROM Cartao WHERE ID = " . $id . ";";
        
       
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

