 <!-- ======= Header ======= -->

 <?php 
  require_once "config.php";
?>
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="<?=baseUrl() ?>" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>Chummaedi Amrullah</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= baseUrl()?>" class="active">Home</a></li>
          <li><a href="<?= baseUrl("?hal=about")?>">About</a></li>
          <li><a href="<?= baseUrl("?hal=study")?>">Study</a></li>
          <li><a href="<?= baseUrl("?hal=task")?>">Task</a></li>
          <li><a href="<?= baseUrl("?hal=portofolio")?>">Portofolio</a></li>
          <li><a href="<?= baseUrl("?hal=tugashtml")?>"></a></li>

        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://www.facebook.com/chummaedi.amrullah" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/moh.chummaedi/?hl=id" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/moh-chummaedi-amrullah-a63933161/?originalSubdomain=id" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->