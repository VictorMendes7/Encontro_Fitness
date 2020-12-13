<?php

if (!isset($_SESSION['logado']) || $_SESSION['logado'] != TRUE)
{
    //session_start();
    include 'verifica_Login.php';
}


?>

<!doctype html>
<html lang="Pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">

    <title>Alterar Usuario</title>
  </head>
    
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
    
    $Usuario = $RU->consultarUsuario($id, "alterar" );
       

?>
    
  <body>
       
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha do formulario -->
                    <div class="col-12 text-center my-5">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Alterar Usuario</h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos das coluna -->
                        
                         <form method="post" action="alterarUsuario3.php">
                         		<input type="hidden" name="id" value="<?php echo $Usuario->getId(); ?>" />
                                <div class="form-row">
                                    
                                    <div class="form-group col-sm-6">
                                            
                                            <label >Nome:</label>
                                            <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $Usuario->getNome(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Sobrenome:</label>
                                            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="<?php echo $Usuario->getSobrenome(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Login:</label>
                                            <input type="text" class="form-control" name="login" placeholder="Login" value="<?php echo $Usuario->getLogin(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Senha:</label>
                                            <input type="password" class="form-control" name="senha" placeholder="Senha" value="<?php echo $Usuario->getSenha(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >E-Mail:</label>
                                            <input type="email" class="form-control" name="email" placeholder="@-Email" value="<?php echo $Usuario->getEmail(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Sexo:</label>
                                            <select class="form-control" name="sexo">
                                                  <option value="">Selecione</option>
                                                  <option value="Masculino" <?php if ( $Usuario->getSexo() == "Masculino" ) echo "selected"; ?>>Masculino</option>
	 					                          <option value="Feminino" <?php if ( $Usuario->getSexo() == "Feminino" ) echo "selected"; ?>>Feminino</option>
                                             </select>
                                    
                                    </div>
                                    
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Data de Nascimento:</label>
                                            <input type="date" class="form-control" name="dataNascimento" value="<?php echo $Usuario->getDataNascimento(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Estado Civil:</label>
                                            <select class="form-control" name="estadoCivil">
                                                  <option value="">Selecione</option>
                                                  <option value="solteiro" <?php if ( $Usuario->getEstadoCivil() == "Solteiro" ) echo "selected"; ?>>Solteiro</option>
	 					                          <option value="viúvo" <?php if ( $Usuario->getEstadoCivil() == "Viúvo" ) echo "selected"; ?>>Viúvo</option>
                                                  <option value="casado" <?php if ( $Usuario->getEstadoCivil() == "Casado" ) echo "selected"; ?>>Casado</option>
                                                  <option value="divorciado" <?php if ( $Usuario->getEstadoCivil() == "Divorciado" ) echo "selected"; ?>>Divorciado</option>
                                             </select>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >CPF:</label>
                                            <input type="text" class="form-control" name="cpf" maxlength="14" placeholder="CPF" value="<?php echo $Usuario->getCpf(); ?>">
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >RG:</label>
                                            <input type="text" class="form-control" name="rg" maxlength="10" placeholder="RG" value="<?php echo $Usuario->getRg(); ?>">
                                    
                                    </div>
                                    

                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >UF:</label>
                                            <select class="form-control" name="uf" value="<?php echo $Usuario->getUf(); ?>" >
                                                  <option value="AC">Acre</option>
                                                  <option value="AL">Alagoas</option>
                                                  <option value="AP">Amapá</option>
                                                  <option value="AM">Amazonas</option>
                                                  <option value="BA">Bahia</option>
                                                  <option value="CE">Ceará</option>
                                                  <option value="DF">Distrito Federal</option>
                                                  <option value="ES">Espírito Santo</option>
                                                  <option value="GO">Goiás</option>
                                                  <option value="MA">Maranhão</option>
                                                  <option value="MT">Mato Grosso</option>
                                                  <option value="MS">Mato Grosso do Sul</option>
                                                  <option value="MG">Minas Gerais</option>
                                                  <option value="PA">Pará</option>
                                                  <option value="PB">Paraíba</option>
                                                  <option value="PR">Paraná</option>
                                                  <option value="PE">Pernambuco</option>
                                                  <option value="PI">Piauí</option>
                                                  <option value="RJ">Rio de Janeiro</option>
                                                  <option value="RN">Rio Grande do Norte</option>
                                                  <option value="RS">Rio Grande do Sul</option>
                                                  <option value="RO">Rondônia</option>
                                                  <option value="RR">Roraima</option>
                                                  <option value="SC">Santa Catarina</option>
                                                  <option value="SP">São Paulo</option>
                                                  <option value="SE">Sergipe</option>
                                                  <option value="TO">Tocantins</option>
                                             </select>
                                    
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    
                                    <div class="form-group col-md-6">
                                        
                                        <label >Cidade:</label>
                                        <input type="text" class="form-control" name="cidade" placeholder="Cidade" value="<?php echo $Usuario->getCidade(); ?>"/>
                                        
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        
                                        <label >Bairro:</label>
                                        <input type="text" class="form-control" name="bairro" placeholder="Bairro" value="<?php echo $Usuario->getBairro(); ?>"/>
                                        
                                    </div>
                                        
                                    <div class="form-group col-md-2">
                                        
                                        <label >CEP:</label>
                                        <input type="text" class="form-control" maxlength="8" name="cep" placeholder="CEP" value="<?php echo $Usuario->getCep(); ?>" />
                                        
                                    </div>
                              </div>
                             
                             <div class="form-row">
                             
                                 <div class="form-group col-sm-6">
                                    
                                            <label >Logradouro:</label>
                                            <input type="text" class="form-control" name="logradouro" placeholder="Logradouro" value="<?php echo $Usuario->getLogradouro(); ?>">
                                    
                                </div>
                                 
                                 <div class="form-group col-sm-4">
                                    
                                            <label >Complemento:</label>
                                            <input type="text" class="form-control" name="complemento" placeholder="Complemento" value="<?php echo $Usuario->getComplemento(); ?>">
                                    
                                </div>
                                 
                                 
                                 <div class="form-group col-sm-2">
                                 
                                     <label >Numero:</label>
                                        <input type="text" class="form-control"  name="numero" placeholder="N°" value="<?php echo $Usuario->getNumero(); ?>"/>
                                        
                                            
                                 </div>
                             
                                 
                                 
                             </div>
                             
                             <div class="form-row">
                             
                             		<div class="form-group col-sm-4">
                                    
                                            <label >Ponto de Referencia:</label>
                                            <input type="tet" class="form-control" name="pontoReferencia" placeholder="Ponto de Referencia" value="<?php echo $Usuario->getPontoReferencia(); ?>">
                                    
                                   </div>
                                
                                        
                                    
                          
                             </div>
                             
                             <div class="form-row">
                             
                             	<div class="col-sm-12">
                             	
                             		<label >Status:</label>
                             		
                      					<input type="radio" name="status" value="1" <?php if ( $Usuario->getStatus() == 1 ) echo "checked"; ?>> Ativo
                      					<input type="radio" name="status" value="0" <?php if ( $Usuario->getStatus() == 0 ) echo "checked"; ?>> Inativo
                        		 
                             	</div>
                             	
                             </div>
                             
                             <div class="form-row">
                                 
                                 <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Alterar</button>
                                     <a class="btn btn-danger" href="home2.php" role="button">Voltar</a>
                                     
                                 </div>
                                 
                             </div>
                             
                         </form>
                         
                     </div>
                     
                </div>
            
           </div>        
     </body>
</html>
