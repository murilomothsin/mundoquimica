<?php

include("include/oConn.php");

$select = "SELECT * FROM faq";
$result = mysql_query($select) or die(mysql_error());
$listfaq = array();
while ( $row = mysql_fetch_assoc($result) ) {
  $listfaq[] = $row;
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
        <h1>FAQ</h1>
      </div>

      <hr>

      <div class="row">
        <div class="span12">
          <?php
          foreach ($listfaq as $key => $value) {
          ?>
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $key; ?>">
                  <?php echo $value['pergunta']; ?>
                </a>
              </div>
              <div id="collapse<?php echo $key; ?>" class="accordion-body collapse">
                <div class="accordion-inner">
                  <?php echo $value['resposta']; ?>
                </div>
              </div>
            </div>
          </div>
          <?php  
          }
          ?>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="span4 offset5">
          <h3><a href="faq_add.php">Enviar uma pergunta!</a></h3>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Química <?php echo date('Y'); ?></p>
      </footer>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
