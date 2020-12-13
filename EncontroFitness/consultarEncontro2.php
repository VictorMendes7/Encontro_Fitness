
<?php



use src\Encontro;
use src\RepositorioEncontro;

require_once 'src/Encontro.php';
require_once 'src/RepositorioEncontro.php';

// variáveis
$id = $_GET['id'];

// Classes e repositórios necessários
$Encontro = new Encontro();
$RU = new RepositorioEncontro();


// Consulta dados do usuário 
$Encontro = $RU->consultarEncontro($id, "consultar");
