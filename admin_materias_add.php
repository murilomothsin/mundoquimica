<?php

session_start();

if(!isset($_SESSION['user'])){
  include('erro.php');
  die();
}

include('include/oConn.php');

if(isset($_GET['acao']) && $_GET['acao'] == 'del'){
  $codigo = (int)$_GET['id'];
  $delMateria = "DELETE FROM materias WHERE id = '".$codigo."'";
  $result = mysql_query($delMateria) or die(mysql_error());
  header('Location: admin_materias.php');
  die();
}

if(isset($_GET['acao']) && $_GET['acao'] == 'edit'){
  $codigo = (int)$_GET['id'];
  $selectMateria = "SELECT materias.*, usuarios.nome as userCriador FROM materias
                            JOIN usuarios ON usuarios.id = materias.criador
                            WHERE materias.id = '".$codigo."'
                            LIMIT 1";
  $result = mysql_query($selectMateria) or die(mysql_error());
  $Materia = mysql_fetch_assoc($result);
}

if(isset($_POST['bt'])){

  include('include/oConn.php');

  if($_POST['method'] == 'insert'){
    $titulo = mysql_real_escape_string($_POST['titulo']);
    $texto = mysql_real_escape_string(addslashes($_POST['texto']));
    $insert = "INSERT INTO materias (titulo, texto, criado, criador)
                                    VALUES ('".$titulo."', '".$texto."', now(), ".$_SESSION['idusuario'].")";
    $query = mysql_query($insert) or die(mysql_error());
  }elseif($_POST['method'] == 'update'){
    $titulo = mysql_real_escape_string($_POST['titulo']);
    $texto = mysql_real_escape_string(addslashes($_POST['texto']));
    $update = "UPDATE materias SET titulo = '".$titulo."', texto = '".$texto."' WHERE id = '".(int)$_GET['id']."'";
    $query = mysql_query($update) or die(mysql_error());
  }
  header('Location: admin_materias.php');
  die();
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
            <li><a href="admin_materias.php"> Voltar </a></li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="span10 offset1" >
          <form method="post" enctype="multipart/form-data" onsubmit="return validaForm();">
            <center>
              <input type="text" style="width: 90%;" maxlength="225" name="titulo" class="form-control" placeholder="Título da matéria" value="<?php if(isset($_GET) && $_GET['acao'] == 'edit') echo stripslashes($Materia['titulo']); ?>" ><br>
              <textarea name="texto" style="width: 90%; height: 400px;" class="form-control" placeholder="Digite o texto da matéria aqui..."><?php if(isset($_GET) && $_GET['acao'] == 'edit') echo stripslashes($Materia['texto']); ?></textarea> <br>
              <p style="font-size: 11px; text-align: right; width: 90%;"><?php if(isset($_GET) && $_GET['acao'] == 'edit') echo "Criado por: ".$Materia['userCriador'].",&nbsp; em ".$Materia['criado']; ?></p>
              <span class="input-group-btn">
                <?php
                if(isset($_GET) && $_GET['acao'] == 'edit')
                  echo '<input type="hidden" value="update" name="method" />';
                else
                  echo '<input type="hidden" value="insert" name="method" />';
                 ?>
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
