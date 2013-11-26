<?php

session_start();

if(!isset($_SESSION['user'])){
  include('erro.php');
  die();
}
include('include/oConn.php');
$selectVideos = "SELECT videos.*, usuarios.nome FROM videos
                    JOIN usuarios ON usuarios.id = videos.criador";
$result = mysql_query($selectVideos) or die(mysql_error());

$i = 0;
while($row_videos = mysql_fetch_assoc($result)){
  $Listvideos[$i++] = $row_videos;
}

function getPreview($text) {
  if(strlen($text) > 45){
    return substr($text, 0, 45);
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
              <th>Título</th>
              <th>Adiconado</th>
              <th>Criador</th>
              <th>&nbsp;</th>
            </thead>
            <?php
            if(isset($Listvideos))
              foreach ($Listvideos as $key => $value) {
              ?>
              <tr>
                <td><?php echo $value['id'];?></td>
                <td><?php echo $value['titulo'];?></td>
                <td><?php echo date("d/m/Y H:i", strtotime($value['criado']));?></td>
                <td><?php echo $value['nome'];?></td>
                <td><a href="admin_videos_add.php?acao=edit&id=<?php echo $value['id']?>"><i style="padding: 2px;" class="fa fa-pencil-square-o"></i></a><a href="admin_videos_add.php?acao=del&id=<?php echo $value['id']?>"><i style="padding: 2px;" class="fa fa-times"></i></a></td>
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
