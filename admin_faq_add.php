<?php

session_start();

if(!isset($_SESSION['user'])){
  include('erro.php');
  die();
}

include('include/oConn.php');

if(isset($_GET['acao']) && $_GET['acao'] == 'del'){
  $codigo = (int)$_GET['id'];
  $delFAQ = "DELETE FROM faq WHERE id = '".$codigo."'";
  $result = mysql_query($delFAQ) or die(mysql_error());
  header('Location: admin_faq.php');
  die();
}

if(isset($_GET['acao']) && $_GET['acao'] == 'aprov'){
  $codigo = (int)$_GET['id'];
  $selectFAQ = "SELECT * FROM faq
                            WHERE id = '".$codigo."'
                            LIMIT 1";
  $result = mysql_query($selectFAQ) or die(mysql_error());
  $FAQ = mysql_fetch_assoc($result);
}

if(isset($_POST['bt'])){

  include('include/oConn.php');

  if($_POST['method'] == 'aprov'){
    $pergunta = mysql_real_escape_string($_POST['pergunta']);
    $resposta = mysql_real_escape_string(addslashes($_POST['resposta']));
    $publicar = (int)$_POST['publicar'];
    $update = "UPDATE faq SET pergunta = '".$pergunta."', resposta = '".$resposta."', publicar = '".$publicar."' WHERE id = '".(int)$_GET['id']."'";
    $query = mysql_query($update) or die(mysql_error());
  }
  header('Location: admin_faq.php');
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
              <textarea name="pergunta" style="width: 90%; height: 200px;" class="form-control" placeholder="Pergunta"><?php if(isset($_GET) && $_GET['acao'] == 'aprov') echo stripslashes($FAQ['pergunta']); ?></textarea> <br>
               <textarea name="resposta" style="width: 90%; height: 200px;" class="form-control" placeholder="Pergunta"><?php if(isset($_GET) && $_GET['acao'] == 'aprov') echo stripslashes($FAQ['resposta']); ?></textarea> <br>
               <?php
                  $sim = '';
                  $nao = '';
                if(isset($_GET) && $_GET['acao'] == 'aprov'){
                  if($FAQ['publicar'] == 1)
                    $sim = 'checked="checked"';
                  else
                    $nao = 'checked="checked"';
                }
               ?>
               <center >
                <table border="0">
                  <tr>
                    <td width="175">Publicar?</td>
                    <td width="100"><label style="float: left;"><input type="radio" <?php echo $sim; ?> name="publicar" value="1"> Sim </label></td>
                    <td width="100"><label style="float: left;"><input type="radio" name="publicar" <?php echo $nao; ?> value="0"> Não </label></td>
                  </tr>
                </table>
              </center><br />
              <span class="input-group-btn">
                <?php
                if(isset($_GET) && $_GET['acao'] == 'aprov')
                  echo '<input type="hidden" value="aprov" name="method" />';
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
