<?php

include("include/oConn.php");

$codigo = (int)$_GET['id'];

$select = "SELECT materias.*, usuarios.nome FROM materias
                    JOIN usuarios ON usuarios.id = materias.criador
                    WHERE materias.id = '".$codigo."'";
$result = mysql_query($select) or die(mysql_error());
$row = mysql_fetch_assoc($result);

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
        <h3><?php echo $row['titulo']; ?></h3>
      </div>

      <hr>

      <div class="row">
        <div class="span8 offset2">
          <p>
            <?php echo $row['texto']; ?>
          </p>
          <span style="color: #333; font-size: 11px;">Postado por <?php echo $row['nome']; ?> em <?php echo date("d/m/Y H:i", strtotime($value['criado'])); ?></span>
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
