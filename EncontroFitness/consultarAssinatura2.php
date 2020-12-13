
<?php


    use src\RepositorioAssinatura;
    use src\Assinatura;

    require_once 'src/RepositorioAssinatura.php';
    require_once 'src/Assinatura.php';

    // variáveis
    $tipoPlano = $_POST['tipoPlano'];

    // Classes e repositórios necessários
    $Assinatura = new Assinatura();
    $RA = new RepositorioAssinatura();
    
    
    // Consulta dados do usuário 
    $Assinatura = $RA->consultarAssinatura($tipoPlano, "consultar");
            