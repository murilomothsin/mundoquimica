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

    <style type="text/css">
    .listaImagens{
      min-height: 320px;
    }
    .text-link {
      color: #333;
    }
    .text-link:hover {
      text-decoration: none;
      color: #333;
    }
    </style>
  </head>

  <body>

    <div class="container">

      <?php include('include/menu.php'); ?>

      <hr>

      <div class="jumbotron">
        <h1>Qual o propósito deste site?</h1>
        <p class="lead">No ensino médio principalmente no 3° ano observamos que química orgânica é de extrema importância para a formação do aluno, um conhecimento significativo em qualquer área da ciência significa bons resultados no futuro, seja ele no ensino médio, técnico ou na faculdade. Este site propõe um novo parâmetro de educação, um meio alternativo para as aulas de química, com a possibilidade de ser acessado nos laboratórios de informática de quaisquer escolas ou até mesmo da casa do estudante, o site busca atingir também a sociedade curiosa que busca entender melhor a química orgânica.</p>
        <a class="btn btn-large btn-success" href="materias.php">Começar agora</a>
      </div>

      <hr>

      <div class="row">
        <div class="span6">
          <h3>O que é a Química Orgânica? </h3>
          <p>
             A Química Orgânica é um ramo da química que estuda a estrutura, propriedades, composição, reações, e síntese de compostos orgânicos que, por definição, contenham carbono. Compostos orgânicos são moléculas formadas de carbono e hidrogênio, e podem conter diversos outros elementos. Muitos deles contêm nitrogênio, oxigênio, halogênios e, mais raramente, fósforo e enxofre.
          </p>
        </div>
        <div class="span6">
          <h3>Qual sua importância?</h3>
          <p>
            Tudo que é vida é composto por átomos de carbono, o que dá característica à Química Orgânica. Assim o estudo dela é crucial na medicina, por exemplo, levando em conta que medicamentos são todos baseados em substâncias orgânicas que reagem em nosso organismo. Os compostos orgânicos integram diversos materiais, tais como combustíveis, polímeros, pesticidas, herbicidas, fertilizantes, detergentes, aditivos alimentares, cosméticos, perfumes e medicamentos. Química Orgânica está inserida na nossa vida de uma forma muito natural, e às vezes nem percebemos, e é fato que o mundo não funcionaria se não fosse ela.
          </p>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="span12">
          <h3>Como nomear</h3>
        </div>
        <div class="span12">
          <ul class="thumbnails">
            <li class="span4 listaImagens">
              <a href="#" class="thumbnail">
                <img src="images/quimica1.jpg" alt="">
                <h3 class="text-link">Radicais</h3>
              </a>
            </li>
            <li class="span4 listaImagens">
              <div class="thumbnail">
                <img src="images/quimica6.gif" alt="">
                <h3 class="text-link">Prefixos</h3>
              </div>
            </li>
            <li class="span4 listaImagens">
              <a href="#" class="thumbnail">
                <img src="images/quimica2.jpg" alt="">
                <h3 class="text-link">Infixos</h3>
              </a>
            </li>
            <li class="span4 listaImagens">
              <a href="#" class="thumbnail">
                <img src="images/quimica3.jpg" alt="">
                <h3 class="text-link">Sufixos</h3>
              </a>
            </li>
            <li class="span4 listaImagens">
              <a href="#" class="thumbnail">
                <img src="images/quimica4.jpg" alt="">
                <h3 class="text-link">Fórmula Estrutural</h3>
              </a>
            </li>
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

