
<?php



    use src\Usuario;
    use src\RepositorioUsuario;

    require_once 'src/Usuario.php';
    require_once 'src/RepositorioUsuario.php';

    // variáveis
    $id = $_GET['id'];

    // Classes e repositórios necessários
    $Usuario = new Usuario();
    $RU = new RepositorioUsuario();
    
    
    // Consulta dados do usuário 
    $Usuario = $RU->consultarUsuario($id, "consultar");
