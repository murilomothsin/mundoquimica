<?php 

  $page = $_SERVER["PHP_SELF"];
  $page = explode("/", $page);
  $page = $page[count($page)-1];

  $page = explode(".", $page);
  $page = $page[0];

  switch ($page) {
    case 'admin_materias':
      $materias = "active";
    break;
    case 'admin_videos':
      $videos = "active";
    break;
    case 'admin_faq':
      $faq = "active";
    break;
    default:
      $materias = "active";
    break;
  }


?>
<div class="row">
  <div class="span12">
    <span style="float: right;">
      <span class="msgLogado">Bem vindo, <?php echo $_SESSION['username']; ?> </span>
      <a href="logout.php">Sair</a>
    </span>
  </div>
</div>
<div class="row" >
  <div class="span12">
    <div class="navbar" >
      <div class="navbar-inner pull-right" style="margin-top: 35px;">
        <ul class="nav" >
          <li class="<?php echo $materias; ?>"><a href="admin_materias.php">Matérias</a></li>
          <li class="<?php echo $videos; ?>"><a href="admin_videos.php">Video Aulas</a></li>
          <li class="<?php echo $faq; ?>"><a href="admin_faq.php">F.A.Q.</a></li>
        </ul>
      </div>
    </div>
    <a class="brand" href="#"><img src="images/logo.jpg" width="150" alt="w3resource logo" /></a>
  </div>
</div>