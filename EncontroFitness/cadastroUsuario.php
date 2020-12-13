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

    <title>Cadastro Usuario</title>
  </head>
  <body>
       
	<div class="container">
      <!-- Div responsavel por todo o formulario-->
                <div class="row">
                  <!-- classe Row responsavel por uma linha do formulario -->
                    <div class="col-12 text-center my-5">
                        <!-- classe Col responsavel por uma coluna e tamanho do formulario -->
                        <h1 class="display-4"> <i class="fa fa-clipboard text-primary"></i> Cadastro Usuario</h1>
                         <!-- classe display responsavel por dar mais destaque e tamanho ao titulo -->
                    </div>
                 </div>    
                 <div class="row justify-content-center mb-5">
                        
                     <div class="col-sm-12 col-md-10 col-lg-8"> <!-- Definindo os tamanhos da coluna -->
                        
                         <form method="post" action="cadastroUsuario2.php">
                         
                                <div class="form-row">
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Nome:</label>
                                            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Sobrenome:</label>
                                            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Login:</label>
                                            <input type="text" class="form-control" name="login" placeholder="Login" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Senha:</label>
                                            <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >E-Mail:</label>
                                            <input type="email" class="form-control" name="email" placeholder="@-Email" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Sexo:</label>
                                            <select class="form-control" name="sexo">
                                                  <option value="">Selecione</option>
                                                  <option value="Masculino">Masculino</option>
                                                  <option value="Feminino">Feminino</option>
                                             </select>
                                    
                                    </div>
                                    
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Data de Nascimento:</label>
                                            <input type="date" class="form-control" name="dataNascimento" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >Estado Civil:</label>
                                            <select class="form-control" name="estadoCivil">
                                                  <option value="">Selecione</option>
                                                  <option value="solteiro">Solteiro</option>
                                                  <option value="viúvo">Viúvo</option>
                                                  <option value="casado">Casado</option>
                                                  <option value="divorciado">Divorciado</option>
                                             </select>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >CPF:</label>
                                            <input type="text" class="form-control" name="cpf" maxlength="14" placeholder="CPF" required>
                                    
                                    </div>
                                    
                                    <div class="form-group col-sm-12">
                                    
                                            <label >RG:</label>
                                            <input type="text" class="form-control" name="rg" maxlength="10" placeholder="RG">
                                    
                                    </div>
                                    

                                    
                                    <div class="form-group col-sm-6">
                                    
                                            <label >UF:</label>
                                            <select class="form-control" name="uf" required>
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
                                        <input type="text" class="form-control" name="cidade" placeholder="Cidade" required />
                                        
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        
                                        <label >Bairro:</label>
                                        <input type="text" class="form-control" name="bairro" placeholder="Bairro" required/>
                                        
                                    </div>
                                        
                                    <div class="form-group col-md-2">
                                        
                                        <label >CEP:</label>
                                        <input type="text" class="form-control" maxlength="8" name="cep" placeholder="CEP" required />
                                        
                                    </div>
                              </div>
                             
                             <div class="form-row">
                             
                                 <div class="form-group col-sm-6">
                                    
                                            <label >Logradouro:</label>
                                            <input type="text" class="form-control" name="logradouro" placeholder="Logradouro" required>
                                    
                                </div>
                                 
                                 <div class="form-group col-sm-4">
                                    
                                            <label >Complemento:</label>
                                            <input type="text" class="form-control" name="complemento" placeholder="Complemento" required>
                                    
                                </div>
                                 
                                 
                                 <div class="form-group col-sm-2">
                                      		<label >Numero:</label>
                                        	<input type="text" class="form-control"  name="numero" placeholder="N°" required />
                                            <input type="hidden" class="form-control" name="dataCadastro"  required>
                                    
                                 </div>
                        
                             </div>
                             
                             <div class="form-row">
                                    
                                    <div class="form-group col-md-12">
                                        <label >Ponto de Referencia:</label>
                                         <input type="text" class="form-control" name="pontoReferencia" placeholder="Ponto de Referencia">
                                    
                                    </div>
                                    
                                    </div>
                                    
                                    
                                    <input type="hidden" name="status"value="1" />
                           </div>
                              </div>
                             
                             <div class="form-row">
                                 
                                 <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                     <a class="btn btn-danger" href="index.php" role="button">Voltar</a>
                                     
                                 </div>
                                 
                             </div>
                             
                         </form>
                         
                     </div>
                     
                </div>
            
           </div>        
     </body>
</html>
