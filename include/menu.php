<?php

  $page = $_SERVER["PHP_SELF"];
  $page = explode("/", $page);
  $page = $page[count($page)-1];

  $page = explode(".", $page);
  $page = $page[0];

  switch ($page) {
    case 'index':
      $index = "active";
    break;
    case 'materia_view':
    case 'materias':
      $materias = "active";
    break;
    case 'videos':
      $videos = "active";
    break;
    case 'faq_add':
    case 'faq':
      $faq = "active";
    break;
    case 'admin':
      $admin = "active";
    break;
    case 'contato':
      $contato = "active";
    break;
    default:
      $index = "active";
    break;
  }


?>
<div class="row" >
  <div class="span12">
    <div class="navbar" >
      <div class="navbar-inner pull-right" style="margin-top: 35px;">
        <ul class="nav" >
          <li class="<?php echo $index; ?>"><a href="index.php">Home</a></li>
          <li class="<?php echo $materias; ?>"><a href="materias.php">Matérias</a></li>
          <li class="<?php echo $videos; ?>"><a href="videos.php">Video Aulas</a></li>
          <li class="<?php echo $faq; ?>"><a href="faq.php">FAQ</a></li>
          <li class="<?php echo $admin; ?>"><a href="admin.php">Administrativo</a></li>
          <li  class="<?php echo $contato; ?>"><a href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
    <a class="brand" href="#"><img src="images/logo.jpg" width="150" alt="w3resource logo" /></a>
  </div>
</div>