<?php
error_reporting(E_ALL ^ E_NOTICE);
  require_once("mostra-alerta.php"); ?>
  <?php require_once ("logica-usuario.php"); ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>FindTrade</title>
      <meta name = "viewport" content ="width=device-width" />
      <link rel="shortcut icon" href="img/favicon.png">
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel = "stylesheet" type = "text/css" href="css/index.css" />
      <link rel = "stylesheet" type = "text/css" href="css/loja.css" />
      <link rel = "stylesheet" type = "text/css" href="css/login.css" />
      <link rel="stylesheet" type="text/css" href="css/animate.css" />
      <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- <script src="js/wow.min.js"></script> -->


    </head>
    <body>
      <div class = "header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class = "container">
            <div class = "row">
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
      </div>

	<!-- <div class="container">
		<div class="principal">
		    <?php  mostraAlerta("success"); ?>
		    <?php mostraAlerta("danger"); ?>
</div>
</div> -->
