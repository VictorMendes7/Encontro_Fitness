<?php
namespace src;


require_once 'src/ConexaoMySQL.php';
require_once 'src/Assinatura.php';

class RepositorioAssinatura
{
    private $ConexaoMySQL;
    private $Assinatura;
    
    public function __construct(){
        $this->ConexaoMySQL = new \ConexaoMySQL();
        $this->Assinatura = new Assinatura();
    }
    
    // consultar usuario
    public function cadastrarAssinatura($Assinatura){
        
        $retorno = FALSE;
        
        $cadastro = " INSERT INTO ASSINATURA " .
            "(TIPOPLANO, VALOR, STATUS) VALUES " .
              "('" . $Assinatura->getTipoPlano() ."',"."
              " . $Assinatura->getValor() . ","."
              " . $Assinatura->getStatus() . ")";
        
       
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        //print $cadastro;
        
        if ( $conexao->query($cadastro) === TRUE) {
            
            $retorno = TRUE;
            
           
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
   
    
    
    
    public function consultarAssinatura($tipoPlano, $modo){
        
        $Assinatura = new Assinatura();
        
        $consulta = "SELECT * FROM ASSINATURA WHERE TIPOPLANO = '" . $tipoPlano . "';";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        
        if ( $resultado->num_rows > 0 ){
            
            while( $linha = $resultado->fetch_assoc() )
            {
                $Assinatura->setId($linha['ID']);
                $Assinatura->setTipoPlano($linha['TIPOPLANO']);
                $Assinatura->setValor($linha['VALOR']);
                $Assinatura->setStatus($linha['STATUS']);
                
                if ( $modo == "consultar" ){
                    echo '<!doctype html>
                        <html lang="Pt-br">
                          <head>
                            <!-- Required meta tags -->
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        
                            <!-- Bootstrap CSS -->
                            <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
                            <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
                            <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
                        
                            <title>Consultar Assinatura </title>
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
                                                    
                                                     <form method="post" action="excluirAssinatura3.php">
                                                     
                                                     		
                                                            <div class="form-row">
                                                                
                                                                <div class="form-group col-sm-6">
                                                                	<input type="hidden" name="id" value="'. $Assinatura->getId().'" />
                                                                        <label >Descrição:</label>
                                                                        <input type="text" class="form-control" name="descricao" placeholder="Descrição" value="'. $Assinatura->getDescricao().'" readonly >
                                                                
                                                                </div>
                                                                
                                                                <div class="form-group col-sm-6">
                                                                
                                                                        <label >Valor:</label>
                                                                        <input type="text" class="form-control" name="valor" placeholder="R$:" value="'. $Assinatura->getValor().'" readonly>
                                                                
                                                                </div>
                                                                
                                                                <div class="form-group col-sm-6">
                                                                
                                                                        <label > Tipo do Plano:</label>
                                                                        <select class="form-control" name="tipoPlano" value="'. $Assinatura->getTipoPlano().'" disabled>
                                                                              <option value="">Selecione</option>
                                                            				  <option value="Semanal">Semanal</option>
                                                            				  <option value="Mensal">Mensal</option>
                                                            				  <option value="Anual">Anual</option>
                                                                         </select>
                                                                
                                                                </div>
                                               
                                                                <div class="form-group col-sm-6">
                                                            
                                                         			<label >Status:</label>
                
                                						            <input type="number" class="form-control" name="status" value="'.$Assinatura->getStatus().'" readonly />
                                			
                                                    		 	</div>
                                                    		 	
                                                         	</div>
                                               
                                                         	<div class="form-row">
                                                             
                                                             	<div class="col-sm-12">
                                                                	<button type="submit" class="btn btn-primary">Excluir</button>
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
            
            echo '<br/>
                  <table width="400" border="0"  align="center">
                    <tr style="background:red;color:white;border-radius:5px;" ><td align="center"><b>Falha no consulta da Assinatura!</b></td></tr>
                    <tr>
                       <td align="center" colspan="2">
                          <br/>
                          <a href="consultarAssinatura.php" style="background:#005b96;border-radius:5px;padding: 7px 18px;color: white;text-decoration: none;">Voltar</a>
                       </td>
                    </tr>
                  </table>';
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $Assinatura;
    }
    
    public function alterarAssinatura($Assinatura){
        
        $retorno = FALSE;
        
        
        $alterar = " UPDATE ASSINATURA SET TIPOPLANO = '" . $Assinatura->getTipoPlano() .
        "', STATUS = " . $Assinatura->getStatus() .
        " WHERE ID = " . $Assinatura->getId() . ";";
        
        
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        if ( $conexao->query($alterar) === TRUE) {
            
            $retorno = TRUE;
           
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
    public function excluirAssinatura($id){
        
        $retorno = FALSE;
       
        $excluir = "DELETE FROM ASSINATURA WHERE ID = " . $id . ";";
        
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        if ( $conexao->query($excluir) === TRUE) {
            
            $retorno = TRUE;
               
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
        
    }
    
    
}

