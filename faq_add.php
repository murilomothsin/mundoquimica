<?php

include('include/oConn.php');

if(isset($_POST['bt'])){

  include('include/oConn.php');

  if($_POST['pergunta'] != '' && $_POST['resposta'] != ''){
    $pergunta = mysql_real_escape_string(addslashes($_POST['pergunta']));
    $resposta = mysql_real_escape_string(addslashes($_POST['resposta']));

    $insert = "INSERT INTO faq (pergunta, resposta)
                                    VALUES ('".$pergunta."', '".$resposta."')";
    $query = mysql_query($insert) or die(mysql_error());
    header('Location: faq.php?st=ok');
    die();
  }else{
    header('Location: faq_add.php?st=err');
    die();
  }
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
        <div class="span5"><h3>Enviar uma FAQ</h3></div>
        <div class="span7">
          <ul class="nav nav-pills pull-right">
            <li><a href="admin_videos.php"> Voltar </a></li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="span10 offset1" >
          <form method="post" enctype="multipart/form-data" onsubmit="">
            <center>
              <textarea name="pergunta" style="width: 90%; height: 150px;" class="form-control" placeholder="Pergunta"></textarea> <br>
              <textarea name="resposta" style="width: 90%; height: 150px;" class="form-control" placeholder="Resposta"></textarea> <br>
              <span class="input-group-btn">
                <button class="btn btn-default" name="bt" value="Gravar" type="submit">Enviar</button>
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