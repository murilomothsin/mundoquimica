<?php

include("include/oConn.php");

$select = "SELECT videos.*, usuarios.nome FROM videos
                    JOIN usuarios ON usuarios.id = videos.criador";
$result = mysql_query($select) or die(mysql_error());
$listvideos = array();
while ( $row = mysql_fetch_assoc($result) ) {
  $listvideos[] = $row;
}

function getPreview($text, $caracs) {
  if(strlen($text) > $caracs){
    return substr($text, 0, $caracs);
  }
  return $text;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Química</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Química">
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

      <?php include('include/menu.php'); ?>

      <hr>

      <div class="jumbotron">
        <h1>Videos</h1>
      </div>

      <hr>

      <div class="row">
        <div class="span12">
          <ul class="thumbnails">
            <?php
              foreach ($listvideos as $key => $value) {
              ?>
              <li class="span4 listaImagens">
                <div class="thumbnail" style="height: 240px;">
                  <center>
                    <?php echo stripcslashes($value['embed']); ?>
                  </center>
                </div>
              </li>
              <?php
              }
              ?>
          </ul>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Química <?php echo date('Y'); ?></p>
      </footer>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-carousel.js"></script>


  </body>
</html>
