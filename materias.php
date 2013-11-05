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
          <table class="table">
            <thead>
              <th>
                Código
              </th>
              <th>
                Título
              </th>
              <th>
                Publicação
              </th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Teste</td>
                <td>04/11/2013</td>
              </tr>
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
