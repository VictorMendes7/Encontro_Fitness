
<?php



    use src\Adm;
    use src\RepositorioAdm;

    require_once 'src/Adm.php';
    require_once 'src/RepositorioAdm.php';

    // variáveis
    $id = $_GET['id'];

    // Classes e repositórios necessários
    $Adm = new Adm();
    $RA = new RepositorioAdm();
    
    
    // Consulta dados do usuário 
    $Adm = $RA->consultarAdm($id, "consultar");
