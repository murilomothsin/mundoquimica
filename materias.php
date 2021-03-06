<?php

include("include/oConn.php");

$select = "SELECT materias.*, usuarios.nome FROM materias
                    JOIN usuarios ON usuarios.id = materias.criador";
$result = mysql_query($select) or die(mysql_error());
$listmaterias = array();
while ( $row = mysql_fetch_assoc($result) ) {
  $listmaterias[] = $row;
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
        <h1>Matérias</h1>
      </div>

      <hr>

      <div class="row">
        <div class="span12">
          <table class="table table-hover">
            <thead>
              <th style="width: 5%;">
                Código
              </th>
              <th style="width: 25%;">
                Título
              </th>
              <th style="width: 45%;">
                Texto
              </th>
              <th style="width: 25%;">
                Publicação
              </th>
            </thead>
            <tbody>
              <?php
              foreach ($listmaterias as $key => $value) {
              ?>
              <tr>
                <td><?php echo $value['id'];?></td>
                <td><a href="materia_view.php?id=<?php echo $value['id']; ?>"><?php echo getPreview($value['titulo'], 35);?></a></td>
                <td><a href="materia_view.php?id=<?php echo $value['id']; ?>"><?php echo getPreview($value['texto'], 75);?></a></td>
                <td><?php echo "Por ".$value['nome']." - ".date("d/m/Y H:i", strtotime($value['criado']));?></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
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