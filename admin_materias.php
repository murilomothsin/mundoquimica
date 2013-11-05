<?php

session_start();

if(!isset($_SESSION['user'])){
  include('erro.php');
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
            <li><a href="admin_materias_add.php"> Adicionar </a></li>
            <li><a href="#"> Adicionar </a></li>
            <li><a href="#"> Adicionar </a></li>
          </ul>
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
