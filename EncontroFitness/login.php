<?php
session_start();

use src\Usuario;
use src\RepositorioUsuario;
use src\Adm;
use src\RepositorioAdm;
use src\Logs;
use src\RepositorioLogs;


require_once 'src/Logs.php';
require_once 'src/RepositorioLogs.php';
require_once 'src/Usuario.php';
require_once 'src/RepositorioUsuario.php';
require_once 'src/Adm.php';
require_once 'src/RepositorioAdm.php';

//impedir que o usuario passe para a tela de home.php sem prencher os campos
if(!empty($_POST['login']) || !empty($_POST['senha'])){
   

//validar login e senha digitados na tela index.php
$login =  $_POST['login'];
$senha =  $_POST['senha'];

$Usuario = new Usuario();
$RU = new RepositorioUsuario();

$Usuario = $RU->autenticarUsuario($login,$senha);

if($RU->getAutenticado() == TRUE){
    $_SESSION['id']  = $Usuario->getId();
    $_SESSION['logado'] = TRUE;
    $_SESSION['login'] = $login;
    header('Location: home.php');
    
    
    
    $mensagem= "Iniciou uma sessão no site";
    
    // Classes e repositórios necessários
    $Logs = new Logs();
    $RL = new RepositorioLogs();
    
    
    $Logs = $RL->salvaLog($mensagem);
    
    
}else{
    
    $login =  $_POST['login'];
    $senha =  $_POST['senha'];
    
    $Adm = new Adm();
    $RA = new RepositorioAdm();
    
    $Adm = $RA->autenticarAdm($login,$senha);
    
    $_SESSION['idAdm']  = $Adm->getId();
    $_SESSION['logado'] = TRUE;
    $_SESSION['login'] = $login;
    header('Location: home2.php');
    
    $mensagem= "Iniciou uma sessão no site";
    
    // Classes e repositórios necessários
    $Logs = new Logs();
    $RL = new RepositorioLogs();
    
    $Logs = $RL->salvaLog($mensagem);
    exit();
    
} 


   

   
}
    





    
 
