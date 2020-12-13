<?php 
session_start();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" rel="stylesheet"  >
  </head>
  <body>
  <?php 
      if(isset($_SESSION['nao_autenticado'])):
        ?>
    <div class="notifi">
      <p>ERRO: Login ou senha inválidos.</p>
    </div>
    <?php 
      endif;
      unset($_SESSION['nao_autenticado']);
    ?>
     <div class="LoginBox">
        <img src="Ft0.png" class="user">
        <h2>Entre aqui </h2>
        <form action="login.php" method="POST">
          <p>Login</p>
            <input type="text" name="login" placeholder="Login" required >
           <p>Senha</p>
           <input type="password" name="senha" placeholder="Password" required >
           <input type="submit" name="" value="Entrar">
           <a href="cadastroUsuario.php" > Inscrever-se </a>
         </form>
       </div>
  </body>
</html>
