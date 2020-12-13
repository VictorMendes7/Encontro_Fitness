
<?php



use src\Cartao;
use src\RepositorioCartao;

require_once 'src/Cartao.php';
require_once 'src/RepositorioCartao.php';

// variáveis
$id = $_GET['id'];

// Classes e repositórios necessários
$Cartao = new Cartao();
$RU = new RepositorioCartao();


// Consulta dados do usuário 
$Cartao = $RU->consultarCartao($id, "consultar");
