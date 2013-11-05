<?php
if(isset($_POST['bt']) && $_POST['bt'] == 'Login')
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Química</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Química">
     <!-- Le Wild Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Le Wild HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <?php include('include/menu.php'); ?>

      <hr>

      <div class="jumbotron">
        <h1>Admin</h1>
      </div>

      <hr>

      <div class="row">
        <div class="span12" style="">
          <form action="admin.php" method="post" enctype="multipart/form-data" onsubmit="return validaForm();">
            <div class="form-group">
              <div class="input-group">
                <center>
                  <input type="text" name="user" class="form-control" placeholder="Usário"><br>
                  <input type="password" name="password" class="form-control" placeholder="Senha"><br>
                  <span class="input-group-btn">
                    <button class="btn btn-default" name="bt" value="Login" type="submit">Login</button>
                  </span>
                </center>
              </div>
            </div>
          </form>
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
