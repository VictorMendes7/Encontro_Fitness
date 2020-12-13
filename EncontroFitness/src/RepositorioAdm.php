<?php
namespace src;
//session_start();


require_once 'src/Adm.php';
require_once 'src/ConexaoMySQL.php';

class RepositorioAdm
{
    private $ConexaoMySQL;
    private $Adm;
    
    public function __construct(){
        $this->ConexaoMySQL = new \ConexaoMySQL();
        $this->Adm = new Adm();
    }
    
    // consultar Agenda
    public function cadastrarAdm($Adm){
        
        $retorno = FALSE;
        
        $cadastro = " INSERT INTO ADM " .
            "(NOMECOMPLETO, RG, CPF, LOGIN,SENHA,STATUS
              ) VALUES " .
              "('" . $Adm->getNomeCompleto() ."',"."
              '" . $Adm->getRg() ."',"."
              '" . $Adm->getcpf() ."',"."
              '" . $Adm->getLogin() ."',"."
              '" . $Adm->getSenha() . "',"."
               " . $Adm->getStatus().  ")";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        //print $cadastro;
        
        if ( $conexao->query($cadastro) === TRUE) {
            
            $retorno = TRUE;
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
    public function autenticarAdm($login,$senha){
        $Adm = new Adm();
        $consulta = "SELECT * FROM ADM WHERE LOGIN = '". $login ."' AND SENHA = '".$senha."';";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        $resultado = $conexao->query($consulta);
        
        if ( $resultado->num_rows > 0 ){
            $linha = $resultado->fetch_assoc();
            
            $Adm->setId($linha['ID']);
            $Adm->setNomeCompleto($linha['NOMECOMPLETO']);
            $Adm->setRg($linha['RG']);
            $Adm->setCpf($linha['CPF']);
            $Adm->setLogin($linha['LOGIN']);
            $Adm->setSenha($linha['SENHA']);
            $Adm->setStatus($linha['STATUS']);
         
        }
        else{
            $_SESSION['nao_autenticado'] = true;
            header('Location: index.php');
            exit();
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $Adm;
    }
    
    
    
    //alterar Agenda
    
    public function consultarAdm($id,$modo){
        
        $Adm = new Adm();
        
        $consulta = "SELECT * FROM ADM WHERE ID = '" . $id . "';";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        
        if ( $resultado->num_rows > 0 ){
            
            while( $linha = $resultado->fetch_assoc() )
            {
                $Adm->setId($linha['ID']);
                $Adm->setNomeCompleto($linha['NOMECOMPLETO']);
                $Adm->setRg($linha['RG']);
                $Adm->setCpf($linha['CPF']);
                $Adm->setLogin($linha['LOGIN']);
                $Adm->setSenha($linha['SENHA']);
                $Adm->setStatus($linha['STATUS']);
                
                
                if ( $modo == "consultar" ){
                    echo '
                        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
                        <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
                        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
                        <table width="600" border="0" align="center">

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
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos da coluna -->
                        
                         <form method="post" action="alterarAdm3.php">
                               
                                <div class="form-row">

                                   <div class="form-group col-sm-6">
                                            
                                            <label >ID:</label>
                                            <input type="text" class="form-control" value= "' . $Adm->getId() . '" readonly >
                                    
                                    </div>
                                
                                    <div class="form-group col-sm-6">
                                            
                                            <label >Nome Completo:</label>
                                            <input type="text" class="form-control" value= "' . $Adm->getNomeCompleto() . '" readonly>
                                    
                                    </div>
                                      
                   
                                    <div class="form-group col-sm-6">
                                    
                                            <label >CPF:</label>
                                            <input type="text" class="form-control" value= "' . $Adm->getCpf() . '" readonly>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >RG:</label>
                                            <input type="text" class="form-control" value= "' . $Adm->getRg() . '" readonly>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Login:</label>
                                            <input type="text" class="form-control" value= "' . $Adm->getLogin() . '" readonly >
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Senha:</label>
                                            <input type="password" class="form-control" value= "' . $Adm->getSenha() . '" readonly >
                                            
                                    </div>
                                    
                                    <div class="col-sm-6">
                             	
                             		<label >Status:</label>
                             		
                      					<input type="text" class="form-control" value= "' . $Adm->getStatus() . '" readonly>
                        		 	
                        		 	</div>
                                    
                             	</div>
                          
                             <div class="form-row">
                                 
                                 <div class="col-sm-12">
                                    
                                     <a class="btn btn-primary" href="home.php" role="button">Voltar</a>
                                     
                                 </div>
                                 
                             </div>
                             
                         </form>
                         
                     </div>
                     
                </div>
            
           </div>        ';
                }
            }
            
        }
        else
        {
            
            echo '<br/><table width="400" border="0" style="background:red;color:white;border-radius:5px;" align="center"><tr><td align="center"><b>Adm não encontrado!</b></td></tr>
            <tr>
            <td colspan="2" align="center">
            <a href="consultaAdm.php" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
            </td>
            </tr>
            </table>';
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $Adm;
    }
    
    public function listarAdm(){
        
        $locals = null;
        
        $consulta = "select * from adm ";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        if ( $resultado->num_rows > 0 ){
            
            
            $contador = 0;
            while ( $linha = $resultado->fetch_assoc() ){
                
                $Adm = new Adm();
                $Adm->setId($linha['ID']);
                $Adm->setNomeCompleto($linha['NOMECOMPLETO']);
                $Adm->setRg($linha['RG']);
                $Adm->setCpf($linha['CPF']);
                $Adm->setLogin($linha['LOGIN']);
                $Adm->setSenha($linha['SENHA']);
                $Adm->setStatus($linha['STATUS']);
                
                $adms[$contador] = $Adm;
                $contador++;
                
                
            }
            
            
        } else {
            
            echo '<br/>
                    <table width="400" border="0" style="background:red;color:white;border-radius:5px;" align="center">
                        <tr><td align="center"><b>nenhum Local cadastrado!</b></td></tr>
                    </table>';
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $adms;
        
    }
    
    
    public function alterarAdm($Adm){
        
        $retorno = FALSE;
        
        
        $alterar = " UPDATE ADM SET ID = '" . $Adm->getId() .
        "', NOMECOMPLETO = '" . $Adm->getNomeCompleto() .
        "', RG = '" . $Adm->getRg().
        "', CPF = '" . $Adm->getCpf() .
        "', LOGIN= '" . $Adm->getLogin() .
        "', SENHA= '" . $Adm->getSenha() .
        "', STATUS= " . $Adm->getStatus() .
        " WHERE ID = " . $Adm->getId() . ";";
        
       
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        if ( $conexao->query($alterar) === TRUE) {
            
            $retorno = TRUE;
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
    public function excluirAdm($id){
        
        $retorno = FALSE;
        
        $excluir = "DELETE FROM ADM WHERE ID = '" . $id . "';";
        
        
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        if ( $conexao->query($excluir) === TRUE) {
            
            $retorno = TRUE;
            
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
    
}

