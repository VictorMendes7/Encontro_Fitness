<?php
namespace src;


require_once 'src/Encontro.php';
require_once 'src/ConexaoMySQL.php';

class RepositorioEncontro
{
    private $ConexaoMySQL;
    private $Encontro;
    private $autenticado;
    
    public function __construct(){
        $this->autenticado = FALSE;
        $this->ConexaoMySQL = new \ConexaoMySQL();
        $this->Encontro = new Encontro();
    }
    
    // consultar encontro
    public function cadastrarEncontro($Encontro){
        echo $Encontro->getTipo();
        echo $Encontro->getHorario();
        echo $Encontro->getDescricao();
        echo $Encontro->getMaxPessoas();
        echo $Encontro->getLocal();
        echo $Encontro->getModalidade();
        $retorno = FALSE;
        
        $cadastro = " INSERT INTO ENCONTRO " .
            "(TIPO, HORARIO, DESCRICAO, MAX_PESSOAS, LOCAL, MODALIDADE) VALUES " .
            "('" . $Encontro->getTipo() ."',"."
            '" . $Encontro->getHorario() ."',"."
            '" . $Encontro->getDescricao() ."',"."
            " . $Encontro->getMaxPessoas() .","."
            '" . $Encontro->getLocal() . "',"."
            '" . $Encontro->getModalidade() . "')";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
       
        
        if ( $conexao->query($cadastro) === TRUE) {
            
            $retorno = TRUE;
            
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
   
   
    
    //alterar Encontro
    
    public function consultarEncontro($id,$modo){
        
        $Encontro = new Encontro();
        
        $consulta = "SELECT * FROM Encontro WHERE ID = " . $id . ";";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        
        if ( $resultado->num_rows > 0 ){
            
            while( $linha = $resultado->fetch_assoc() )
            {
                $Encontro->setId($linha['ID']);
                $Encontro->setTipo($linha['TIPO']);
                $Encontro->setHorario($linha['HORARIO']);
                $Encontro->setDescricao($linha['DESCRICAO']);
                $Encontro->setMax_pessoas($linha['MAX_PESSOAS']);
                $Encontro->setLocal($linha['LOCAL']);
                $Encontro->setModalidade($linha['MODALIDADE']);
                
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
                        
                            <title>Consultar Encontro</title>
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
                                            
                                             <form method="post" action="excluirEncontro3.php">
                                             
                                             		
                                                    <div class="form-row">
                                                        
                                                       <div class="form-group col-sm-6">
                                                                <label >Nome:</label>
                                                                <input type="text" class="form-control" name="nome" placeholder="Nome" value="'. $Encontro->getTipo().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Sobrenome:</label>
                                                                <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="'.$Encontro->getHorario().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Login:</label>
                                                                <input type="text" class="form-control" name="login" placeholder="Login" value="'. $Encontro->getDescricao().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Máximo de Pessoas:</label>
                                                                <input type="text" class="form-control" name="max" placeholder="Max" value="'. $Encontro->getMaxPessoas().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >E-Mail:</label>
                                                                <input type="email" class="form-control" name="email" placeholder="@-Email" value="'. $Encontro->getLocal().'"readonly>
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                        
                                                                <label >Sexo:</label>
                                                                <input type="text" class="form-control" name="sexo" value="'.$Encontro->getModalidade().'" readonly>
                                                                      
                                                        
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
        
        return $Encontro;
    }
    
    
    
    public function alterarEncontro($Encontro){
        
        $retorno = FALSE;

        
        $alterar = " UPDATE ENCONTRO SET ID = " . $Encontro->getId() .",
        TIPO = '" . $Encontro->getTipo() ."',
        HORARIO = '" . $Encontro->getHorario() ."',
        DESCRICAO = '" . $Encontro->getDescricao() ."',
        MAX_PESSOAS = " . $Encontro->getMaxPessoas() .",
        LOCAL = '". $Encontro->getLocal() ."', 
        MODALIDADE = '". $Encontro->getModalidade() ."' 
        WHERE ID = " . $Encontro->getId() . ";";
        
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        if ( $conexao->query($alterar) === TRUE) {
            
            $retorno = TRUE;
  
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
    public function listarEncontro(){
        
        $Encontros = null;
        
        $consulta = "SELECT * FROM Encontro";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        if ( $resultado->num_rows > 0 ){
            
            
            $contador = 0;
            while ( $linha = $resultado->fetch_assoc() ){
                
                $Encontro = new Encontro();
                $Encontro->setId($linha['ID']);
                $Encontro->setTipo($linha['TIPO']);
                $Encontro->setHorario($linha['HORARIO']);
                $Encontro->setDescricao($linha['DESCRICAO']);
                $Encontro->setMax_pessoas($linha['MAX_PESSOAS']);
                $Encontro->setLocal($linha['LOCAL']);
                $Encontro->setModalidade($linha['MODALIDADE']);
                
                $encontros[$contador] = $Encontro;
                $contador++;
                
                
            }
            
            
        } else {
            
            echo '<br/>
                    <table width="400" border="0" style="background:red;color:white;border-radius:5px;" align="center">
                        <tr><td align="center"><b>nenhum Encontro  cadastrado!</b></td></tr>
                    </table>';
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $encontros;
        
    }
    
    public function excluirEncontro($id){
        
        $retorno = FALSE;
        
        $excluir = "DELETE FROM Encontro WHERE ID = " . $id . ";";
        
       
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

