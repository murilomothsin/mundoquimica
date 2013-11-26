<?php

session_start();

if(!isset($_SESSION['user'])){
  include('erro.php');
  die();
}

include('include/oConn.php');

if(isset($_GET['acao']) && $_GET['acao'] == 'del'){
  $codigo = (int)$_GET['id'];
  $delVideo = "DELETE FROM videos WHERE id = '".$codigo."'";
  $result = mysql_query($delVideo) or die(mysql_error());
  header('Location: admin_videos.php');
  die();
}

if(isset($_GET['acao']) && $_GET['acao'] == 'edit'){
  $codigo = (int)$_GET['id'];
  $selectVideo = "SELECT videos.*, usuarios.nome as userCriador FROM videos
                            JOIN usuarios ON usuarios.id = videos.criador
                            WHERE videos.id = '".$codigo."'
                            LIMIT 1";
  $result = mysql_query($selectVideo) or die(mysql_error());
  $Video = mysql_fetch_assoc($result);
}

if(isset($_POST['bt'])){

  include('include/oConn.php');

  if($_POST['method'] == 'insert'){
    $titulo = mysql_real_escape_string($_POST['titulo']);
    $texto = mysql_real_escape_string(addslashes($_POST['texto']));
    $insert = "INSERT INTO videos (titulo, embed, criado, criador)
                                    VALUES ('".$titulo."', '".$texto."', now(), ".$_SESSION['idusuario'].")";
    $query = mysql_query($insert) or die(mysql_error());
  }elseif($_POST['method'] == 'update'){
    $titulo = mysql_real_escape_string($_POST['titulo']);
    $texto = mysql_real_escape_string(addslashes($_POST['texto']));
    $update = "UPDATE videos SET titulo = '".$titulo."', embed = '".$texto."' WHERE id = '".(int)$_GET['id']."'";
    $query = mysql_query($update) or die(mysql_error());
  }
  header('Location: admin_videos.php');
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
        <div class="span5"><h3>Vídeos</h3></div>
        <div class="span7">
          <ul class="nav nav-pills pull-right">
            <li><a href="admin_videos.php"> Voltar </a></li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="span10 offset1" >
          <form method="post" enctype="multipart/form-data" onsubmit="return validaForm();">
            <center>
              <input type="text" style="width: 90%;" maxlength="225" name="titulo" class="form-control" placeholder="Título do vídeo" value="<?php if(isset($_GET) && $_GET['acao'] == 'edit') echo stripslashes($Video['titulo']); ?>" ><br>
              <textarea name="texto" style="width: 90%; height: 400px;" class="form-control" placeholder="Cole o código Embed do vídeo..."><?php if(isset($_GET) && $_GET['acao'] == 'edit') echo stripslashes($Video['embed']); ?></textarea> <br>
              <p style="font-size: 11px; text-align: right; width: 90%;"><?php if(isset($_GET) && $_GET['acao'] == 'edit') echo "Criado por: ".$Video['userCriador'].",&nbsp; em ".$Video['criado']; ?></p>
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
