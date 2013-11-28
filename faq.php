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
<<<<<<< HEAD
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $key; ?>">
                  <?php echo $value['pergunta']; ?>
=======
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  Quando um composto é orgânico?
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse">
                <div class="accordion-inner">
                  Possui carbono em sua molécula.
                </div>
              </div>
            </div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                  O que a Química Orgânica estuda?
>>>>>>> 4e837bbc67132fe2959332a2109463b00e85a403
                </a>
              </div>
              <div id="collapse<?php echo $key; ?>" class="accordion-body collapse">
                <div class="accordion-inner">
<<<<<<< HEAD
                  <?php echo $value['resposta']; ?>
=======
                  Todos os compostos que derivam dos seres vivos.
                </div>
              </div>
            </div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                  O que é a “Teoria da Força Vital”?
                </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  Foi uma antiga teoria em que se acreditava que apenas seres vivos pudessem produzir matéria orgânica. Porém em  1828, Friedrich Wöhler (químico alemão: 1800-1882), a partir do cianato de amônio, produziu a uréia; começando, assim, a queda da teoria da força vital.
                </div>
              </div>
            </div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                  Qual a definição de carbono primário?
                </a>
              </div>
              <div id="collapseFour" class="accordion-body collapse">
                <div class="accordion-inner">
                  É o carbono que está ligado a apenas um outro carbono, já o secundário se liga a dois carbonos, o terciário a três e o quaternário a quatro carbonos.
>>>>>>> 4e837bbc67132fe2959332a2109463b00e85a403
                </div>
              </div>
            </div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
                  Quando uma cadeia é saturada?
                </a>
              </div>
              <div id="collapseFive" class="accordion-body collapse">
                <div class="accordion-inner">
                  Quando os carbonos estão ligados apenas por ligação simples.
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
