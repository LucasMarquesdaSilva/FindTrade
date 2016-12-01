<!DOCTYPE html>
<?php require_once ("logica-usuario.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>FindTrade</title>
    <meta name = "viewport" content ="width=device-width" />
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel = "stylesheet" type = "text/css" href="css/index.css" />

    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/wow.min.js"></script> -->


  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class = "container">
          <div class = "row row-top">
            <div class = "col-md-12">
            <div class="navbar-header">
              <a href="index.php"><img src="img/logos.png" width="210px" height="51px">
                </a>
                <button type="button" data-target=".navbar-collapse" data-toggle="collapse" class=" navbar-toggle"><span class="glyphicon glyphicon-th-large" aria-hiden="true"></button>
            </div>
            <div class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="produto-formulario.php">ADICIONAR PRODUTO</a></li>
                <li><a href="produto-lista.php">PRODUTOS</a></li>
                <li><a href="contato.php">CONTATO</a></li>
                <?php if(usuarioEstaLogado()) {?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= usuarioLogado() ?>
                       <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="logout.php">Sair</a></li>
                    </ul>
                 </li>
                 <?php } else {?>
                  <a href="login.php"><button type ="button" class = "btn-login btn btn-success navbar-btn">LOGIN</button></a>
                  <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </nav>
    </header>
    <main>
      <div class="container-fluid">
        <div class="row row-container">
           <div id="carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                 <div class="item active">
                    <img src="img/banner3.jpg" class="fullscreen" />
                 </div>
                 <div class="item">
                    <img src="img/banner2.jpg" class="fullscreen" />
                  </div>
              </div>
              <a href="#carousel" data-slide="prev" class="left carousel-control">
                 <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a href="#carousel" data-slide="next" class="right carousel-control" >
                 <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
           </div>
        </div>
      </div>
      <div class = "container-fluid container-fluid-main">
        <div class = "row row-main">
          <div class = "col-4 col-md-4">
            <div class = "img-item">
              <img src = "img/img_banner2.jpg" class="fullscreen" >
            </div>
            <div class = "sub-col col-md-12">
              <div class="content-col-home">
                <h5 class="h5-title">Apple Watch</h5>
                <p>O relógio inteligente da Apple.</p>
                <div class = "btn-container">
                  <a href="produto-lista.php" class="prod-home-visualizar">VISUALIZAR<i class = "glyphicon glyphicon-search" aria-hiden="true"></i></a>
                  <a href="produto-lista.php" class="prod-home-comprar">COMPRAR<i class="glyphicon glyphicon-shopping-cart" aria-hiden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
            <div class = "col-4 col-md-4">
              <div class = "img-item">
                <img src = "img/img_banner.jpg" class="fullscreen">
              </div>
              <div class = "sub-col col-md-12">
                <div class="content-col-home">
                  <h5 class="h5-title">Beats Solo 2</h5>
                  <p>Projetado para o som. Sintonizado na emoção.</p>
                  <div class = "btn-container">
                    <a href="produto-lista.php" class="prod-home-visualizar">VISUALIZAR<i class = "glyphicon glyphicon-search" aria-hiden="true"></i></a>
                    <a href="produto-lista.php" class="prod-home-comprar">COMPRAR<i class="glyphicon glyphicon-shopping-cart" aria-hiden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class = "col-4 col-md-4">
              <div class = "img-item">
                <img src = "img/img_banner1.jpg" class="fullscreen">
              </div>
              <div class = "sub-col col-md-12">
                <div class="content-col-home">
                  <h5 class="h5-title">iPhone</h5>
                  <p>Diversidade de modelos.</p>
                  <div class = "btn-container">
                    <a href="produto-lista.php" class="prod-home-visualizar">VISUALIZAR<i class = "glyphicon glyphicon-search" aria-hiden="true"></i></a>
                    <a href="produto-lista.php" class="prod-home-comprar">COMPRAR<i class="glyphicon glyphicon-shopping-cart" aria-hiden="true"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class = "container-fluid">
          <div class = "row col-body">
            <div class = "col-md-12">
                <h1 class="h1-body">Cadastre Seus produtos</h1>
                <p class="p-home-body">Não sabe o que fazer com aquele objeto que está parado ha muito tempo sem ser utilizado?
                <br />Cadastre ele em nosso site! Quem sabe não sirva de grande uso para outra
                pessoa e ambos se beneficiam.</p>
                  <a href="produto-formulario.php" class="a-cad-prod"><div class="cad-prod">CADASTRAR PRODUTO</div></a>
            </div>
          </div>
        </div>
      </main>
    <footer>
      <div class = "container-fluid rodape-container">
        <div class="container-footer">
          <div class = "row-rodape row">
            <div class = "col-rodape col-md-4">
              <ul class="li-suporte">
                <li class="col-header">Suporte</li>
                <li class="li-footer"><a href="#">Ajuda sobre troca de produtos</a></li>
                <li class="li-footer"><a href="#">Ajuda sobre cadastro</a></li>
                <li class="li-footer"><a href="#">Termos e condições de uso</a></li>
                <li class="li-footer"><a href="#">Política de privacidade</a></li>
              </ul>
            </div>
            <div class = "col-rodape col-md-4">
              <ul class="li-company">
                <li class="col-header">Empresa</li>
                <li class="li-footer"><a href="#">Sobre Nós</a></li>
                <li class="li-footer"><a href="contato.php">Contato</a></li>
              </ul>
            </div>
            <div class = "col-rodape col-md-4">
              <ul class="social-midia">
                <li class="col-header">Redes Sociais</li>
                <li class="col-body-li"><a class="btn btn-social-icon btn-facebook">
                  <span class="fa fa-facebook"></span>
                </a></li>
                <li class="col-body-li"><a class="btn btn-social-icon btn-twitter">
                  <span class="fa fa-twitter"></span>
                </a></li>
                <li class="col-body-li"><a class="btn btn-social-icon btn-instagram">
                  <span class="fa fa-instagram"></span>
                </a></li>
                <li class="col-body-li"><a class="btn btn-social-icon btn-google">
                  <span class="fa fa-google"></span>
                </a></li>
                <li class="col-body-li"><a class="btn btn-social-icon btn-tumblr">
                  <span class="fa fa-tumblr"></span>
                </a></li>
                <li class="col-body-li"><a class="btn btn-social-icon btn-yahoo">
                  <span class="fa fa-yahoo"></span>
                </a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-copyright col-md-12">
              <p>&copyFindTrade. todos os direitos reservados.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
