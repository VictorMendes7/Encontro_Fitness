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
      
    <title>Administração</title>
  </head>
  <body>
      
       <!-- classe responsavel por tamanho do menu,cor e backgroud -->
     <nav class="navbar fixed-top navbar-expand-lg navbar-positon-fixed navbar-dark bg-gradient-dark">
         <div class="container">
      
             <!-- classe responsavel pelo nome que ficara ao lado do menu-->
             <a class="navbar-brand h1 mb-0" href="#">Administração</a>

             <!-- classe responsavel pela botão -->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                 <span class="navbar-toggler-icon"></span>
             </button>

                   <!-- Div e classe responsavel por nomes dos itens do menu -->
             <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home2.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Início</a>
                    </li>
                      <!-- Div e classe responsavel por nomes dos itens do menu e sub-menus -->
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                         Usuario
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="cadastroUsuario.php">Cadastrar</a>
                            <a class="dropdown-item" href="consultarUsuario.php">Consultar</a>
                            <a class="dropdown-item" href="alterarUsuario.php">Alterar</a>
                            <a class="dropdown-item" href="excluirUsuario.php">Excluir</a>
                        </div>
                    </li>

                    <!--  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                        Adm
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="cadastroAdm.php">Cadastrar</a>
                            <a class="dropdown-item" href="consultaAdm.php">Consultar</a>
                            <a class="dropdown-item" href="alterarAdm.php">Alterar</a>
                            <a class="dropdown-item" href="excluirAdm.php">Excluir</a>
                        </div>
                    </li>
                  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                        Assinatura
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="consultarAssinatura.php">Consultar</a>
                            <a class="dropdown-item" href="alterarAssinatura.php">Alterar</a>
                            <a class="dropdown-item" href="excluirAssinatura.php">Excluir</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                        Log
                        </a>
                        <div class="dropdown-menu">
                           
                            <a class="dropdown-item" href="listarLogs.php">Consultar</a>
                            
                        </div>
                    </li>
                    
                </ul>    
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                        <i class="fa fa-user-circle fa-2x  "></i>
                        </a>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item" href="alterarAdm.php"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> Alterar dados da conta</a>
                            <a class="dropdown-item" href="logout.php">Sair</a>
                        </div>
                     </li>
                </ul><!--
                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar...">
                    <button class="btn btn-dark" type="submit">OK</button>
                 </form>
                  -->
             </div>
       </div>  
    </nav>
      <!-- Div e classe responsavel por o slide de imagens abaixo do menu -->
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
         <!--  Ol responsavel por indicadores dos slides -->
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1" ></li>
            <li data-target="#carouselSite" data-slide-to="2" ></li>
        </ol>
        
        <div class="carousel-inner ">
            
        <div class="carousel-item active">
                <img src="img/imagemfundo.png" class="img-fluid d-block">
                <!-- div e classe responsavel pelo texto nos slides -->
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1></h1>
                    <p class="lead"></p>
                </div>
            </div>
  
       </div> 
            <!--  classe responsavel por botão de voltar e avançar os slide -->
            <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Anterior</span>
                
           </a>
            <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Avançar</span>
                
          </a>
    </div>
      <!--
      <!--Divs e classes responsavel por scrollspy  -->
      <!--
    <div class="container">
        
          <div class="row">
              <div class="col-12 text-center my-5">
                   <h1 class="display-4">Perguntas de um Operário Letrado</h1> 
                    <p>Quem construiu Tebas, a das sete portas?Nos livros vem o nome dos reis,Mas foram os reis que transportaram as pedras?</p>
              </div>
          </div>  
        
              <div class="row mb-5">
                <div class=" col-sm-6 col-md-4 mb-3">
                  <nav id="navbarVertical" class="navbar navbar-light bg-light">
                      <nav class="nav nav-pills flex-column">
                          <a class="nav-link" href="#item1">Humildade</a>
                          
                          <nav class="nav nav-pills flex-column">
                                <a class="nav-link ml-3" href="#item1-1">Humildade2</a>
                                <a class="nav-link ml-3" href="#item1-2">Humildade3</a>
                          </nav>
                          
                          <a class="nav-link my-2" href="#item2">Jardins</a>
                          <a class="nav-link my-2" href="#item3">Descaminhos</a>
                          
                          <nav class="nav nav-pills flex-column">
                                <a class="nav-link ml-3" href="#item3-1">Descaminhos2</a>
                                <a class="nav-link ml-3" href="#item3-2">Descaminhos3</a>
                          </nav>
                      </nav> 
                  </nav>
                </div> 
                  
                <div class="col-sm-6 col-md-8">
                    <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">
                        
                        <h4 id="item1"> Font Awesome </h4>
                        <p> Get vector icons and social logos on your website with Font Awesome, the web's most popular icon set and toolkit.</p>
                        
                        <h5 id="item1-1"> Basic Use</h5>
                        <p> You can place Font Awesome icons just about anywhere using a style prefix and the icon’s name. We’ve tried to make it so that icons will take on the characteristics and appear alongside text naturally.</p>
                        
                        <h5 id="item1-2">Your Project’s Styling</h5>
                        <p> Font Awesome icons automatically inherit CSS size and color. This means they blend in with text inline wherever you put them. Font Awesome tries not to be too opinionated, and sets just the basic styling rules icons need to render properly in context.</p>
                        
                        <h4 id="item2"> Desktop-Friendly </h4>
                        <p> Font Awesome is fantastic to work with on the desktop, especially with all-new ligatures. Try it in your next design or presentation!</p>
                        
                        <h4 id="item3"> Power Transforms </h4>
                        <p> Go further - Shrink, grow, and rotate your icons on a granular scale. Layer or mask multiple icons together with pinpoint accuracy. Or make quick work of counters and badges.</p>
                        
                        <h5 id="item3-1"> Manage Use Your Way</h5>
                        <p> Use Font Awesome how you want: via our CDN, Download Font Awesome to host yourself, or install the latest via npm. We've got component packages and CSS-processors too.</p>
                        
                        <h5 id="item3-2"> Basic Styling Included </h5>
                        <p> Size your icons in relation to your UI. rotate, align, mirror, pull and stack them with ease too thanks to our bundled styling.</p>
                        
                    </div> 
                </div>
              </div>
        -->
                <!-- Divs e classes responsaveis pelos cards -->
      <!-- 
                <div class="row justify-content-sm-center">
                    
                    <div class="col-sm-6 col-md-4">
                        
                        <div class="card mb-5">
                            
                            <img class="card-img-top" src="img/card3.png">
                            <div class="card-body">
                                <h4 class="card-title">Font Awesome Icons</h4>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    Your Project’s Styling</h6> 
                                <p class="card-text">Font Awesome icons automatically inherit CSS size and color. This means they blend in with text inline wherever you put them. Font Awesome tries not to be too opinionated, and sets just the basic styling rules icons need to render properly in context.</p>
                            </div>
             -->
                            <!-- ul e classe responsavel pela lista -->
      <!--
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Support</li>
                                <li class="list-group-item list-group-item-primary">License Info</li>
                                <li class="list-group-item list-group-item-secondary">Purchasing Font Awesome Pro</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Detalhes</a>
                                <a href="#" class="card-link">mais</a>
                            </div>
                    -->
                            <!-- Div e classe responsavel pelo rodapé -->
      <!-- 
                            <div class="card-footer text-muted">
                                community
                            </div>
                        </div>
                    </div> 
                    
                    <div class="col-sm-6 col-md-4">
                        
                        <div class="card mb-5">
                            
                            <img class="card-img-top" src="img/card1.png">
                            <div class="card-body">
                               <h4 class="card-title">Additional </h4>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    Styling Options</h6> 
                                <p class="card-text">While the basic way to reference an icon is simple and hopefully straight-forward, we’ve provided support-level styling for things like sizing icons, aligning and listing icons, as well as rotating and transforming icons.
                                
                                You can also add your own custom styling to Font Awesome icons by adding your own CSS rules in your project’s code. Here’s a quick example.</p>
                            </div>
            -->
                            <!-- ul  responsavel pela list group -->
                   <!--
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Support</li>
                                <li class="list-group-item list-group-item-success">License Info</li>
                                <li class="list-group-item list-group-item-danger">Purchasing Font Awesome Pro</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Detalhes</a>
                                <a href="#" class="card-link">mais</a>
                            </div>
                   -->
                            <!-- Div e classe responsavel pelo rodapé -->
                  <!-- 
                            <div class="card-footer text-muted">
                                community
                            </div>
                        </div>
                    </div> 
                    
                    <div class="col-sm-6 col-md-4">
                        
                        <div class="card mb-5">
                            
                            <img class="card-img-top" src="img/card2.webp">
                            <div class="card-body">
                               <h4 class="card-title">Icon Cheatsheet</h4>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    Built into Our Icon Search</h6> 
                                <p class="card-text">Now that you’ve gotten everything set up and know how to reference icons, our online documentation tries to make it easy for you to find and insert icons with a few helpers.

                                In our icon gallery and search listings, we’ve provided a quick way to toggle some extra information on or off for each icon listed. That extra information includes each icon’s name, unicode character value, and a control to copy the icon as a glyph.</p>
                            </div>
                       -->
                            <!-- ul  responsavel pela list group -->
                      <!-- 
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Support</li>
                                <li class="list-group-item list-group-item-warning">License Info</li>
                                <li class="list-group-item list-group-item-info">Purchasing Font Awesome Pro</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal" >Detalhes</a>
                                <a href="#" class="card-link">mais</a>
                            </div>
                         -->
                            <!-- Div e classe responsavel pelo rodapé -->
                          <!--
                            <div class="card-footer text-muted">
                                community
                            </div>
                        </div>
                    </div>
               </div>
            </div>
          -->
                <!-- Div e classe responsavel pelo modal -->
      <!--
            <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Introduction</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <h5> JS </h5>
                                        <p> Many of our components require the use of JavaScript to function. Specifically, they require jQuery, Popper.js, and our own JavaScript plugins. Place the following s near the end of your pages, right before the closing We use jQuery’s slim build, but the full version is also supported.</p>
                                    </div>
                                    
                                    <div class="col-6">
                                        <h5> Starter template </h5>
                                        <p> Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this:.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">fechar
                            </button>    
                        </div>
                    </div>
                </div>
            </div>
 -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>