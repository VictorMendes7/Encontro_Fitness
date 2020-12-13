<?php 
namespace src;
session_start();


require_once 'src/ConexaoMySQL.php';
require_once 'src/Logs.php';

class RepositorioLogs{

    private $ConexaoMySQL;
    private $Logs;
    
    public function __construct(){
        $this->ConexaoMySQL = new \ConexaoMySQL();
        $this->Logs = new \src\Logs();
    }
    
    // consultar usuario
    public function salvaLog($mensagem){
        
        date_default_timezone_set('america/recife');
        
        $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
        $hora  = date('Y-m-d H:i:s'); // Salva a data e hora atual (formato MySQL)
        $login = $_SESSION['login'];
        // Usamos o mysql_escape_string() para poder inserir a mensagem no banco
        
        //   sem ter problemas com aspas e outros caracteres
        
    
        
        $retorno = FALSE;
        
        $cadastro = "INSERT INTO LOGS VALUES (NULL, '".$hora."', '".$ip."','".$login."', '".$mensagem."')";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
      
        
        if ( $conexao->query($cadastro) === TRUE) {
            
            $retorno = TRUE;
            
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $retorno;
    }
    
    public function listarLogs(){
        
        $logs = null;
        
        $consulta = "SELECT * FROM LOGS ";
        
        $conexao = $this->ConexaoMySQL->abrirBanco();
        
        $resultado = $conexao->query($consulta);
        
        if ( $resultado->num_rows > 0 ){
            
            
            $contador = 0;
            while ( $linha = $resultado->fetch_assoc() ){
                
                $Logs = new Logs();
                $Logs->setId($linha['ID']);
                $Logs->setHora($linha['HORA']);
                $Logs->setIp($linha['IP']);
                $Logs->setLogin($linha['LOGIN']);
                $Logs->setMensagem($linha['MENSAGEM']);
                
                
           
                $logs[$contador] = $Logs;
                $contador++;
                
              
            }
            
            
        } else {
            
            echo '<br/>
                    <table width="400" border="0" style="background:red;color:white;border-radius:5px;" align="center">
                        <tr><td align="center"><b>nenhum Logs cadastrado!</b></td></tr>
                    </table>';
        }
        
        $this->ConexaoMySQL->fecharBanco();
        
        return $logs;
        
    }
}