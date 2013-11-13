<?php

session_start();

if(!isset($_SESSION['user'])){
  include('erro.php');
  die();
}

if(isset($_GET['acao']) && $_GET['acao'] == 'del'){
  $codigo = (int)$_GET['id'];
  echo $codigo;
}
die();

if(isset($_POST['bt'])){
  include('include/oConn.php');
  $titulo = mysql_real_escape_string($_POST['titulo']);
  $texto = mysql_real_escape_string(addslashes($_POST['texto']));

  $insert = "INSERT INTO materias (titulo, texto, criado, criador)
                                  VALUES ('".$titulo."', '".$texto."', now(), ".$_SESSION['idusuario'].")";
  $query = mysql_query($insert) or die(mysql_error());
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MundoQuimica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MundoQuimica">
     <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <?php include('include/admin_menu.php'); ?>

      <hr>

      <div class="row">
        <div class="span5"><h3>Matérias</h3></div>
        <div class="span7">
          <ul class="nav nav-pills pull-right">
            <li><a href="admin_materias_add.php"> Adicionar </a></li>
            <li><a href="#"> Adicionar </a></li>
            <li><a href="#"> Adicionar </a></li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="span10 offset1" >
          <?php
            if(isset($query) && $query === true){
              ?>
              <div class="alert">
                <h3>OK!</h3>
                <p>
                  Sua matéria foi adicionada com sucesso ao banco de dados!
                </p>
              </div>
              <?php
            }elseif(isset($query) && $query === false){
              ?>
              <div class="alert alert-error">
                <h3>Erro!</h3>
                <p>
                  Não foi possivel adicionar sua matéria ao banco de dados!
                </p>
              </div>
              <?php
            }
          ?>
          <form method="post" enctype="multipart/form-data" onsubmit="return validaForm();">
            <center>
              <input type="text" style="width: 90%;" maxlength="225" name="titulo" class="form-control" placeholder="Título da matéria"><br>
              <textarea name="texto" style="width: 90%; height: 400px;" class="form-control" placeholder="Digite o texto da matéria aqui..."></textarea> <br>
              <span class="input-group-btn">
                <button class="btn btn-default" name="bt" value="Gravar" type="submit">Gravar</button>
              </span>
            </center>
          </form>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Química <?php echo date('Y'); ?></p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-carousel.js"></script>


  </body>
</html>
