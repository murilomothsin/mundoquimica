<?php

session_start();

if(!isset($_SESSION['user'])){
  include('erro.php');
  die();
}
include('include/oConn.php');
$selectFAQ = "SELECT * FROM faq";
$result = mysql_query($selectFAQ) or die(mysql_error());

$i = 0;
while($row_faq = mysql_fetch_assoc($result)){
  $Listfaqs[$i++] = $row_faq;
}

function getPreview($text, $cut) {
  if(strlen($text) > $cut){
    return substr($text, 0, $cut);
  }
  return $text;
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
     <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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
            <li><a href="admin_videos_add.php"> Adicionar </a></li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="span12">
          <table class="table">
            <thead>
              <th>Código</th>
              <th>Pergunta</th>
              <th>Resposta</th>
              <th>Status</th>
              <th>&nbsp;</th>
            </thead>
            <?php
            if(isset($Listfaqs))
              foreach ($Listfaqs as $key => $value) {
              ?>
              <tr>
                <td><?php echo $value['id'];?></td>
                <td><?php echo getPreview($value['pergunta'], 45); ?></td>
                <td><?php echo getPreview($value['resposta'], 45); ?></td>
                <td><?php echo $value['publicar'] == 1 ? "Publicado" : "Não Publicado";?></td>
                <td><a href="admin_faq_add.php?acao=aprov&id=<?php echo $value['id']?>"><i style="padding: 2px;" class="fa fa-pencil-square-o"></i></a><a href="admin_faq_add.php?acao=del&id=<?php echo $value['id']?>"><i style="padding: 2px;" class="fa fa-times"></i></a></td>
              </tr>
              <?php
              }
            ?>
          </table>
        </div>
      </div>

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
