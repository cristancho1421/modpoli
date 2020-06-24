<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Politecnico Internacional - Estudiantes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="<?php echo web_root; ?>plugins/homepage/assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>plugins/homepage/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>plugins/homepage/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>plugins/homepage/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>plugins/homepage/assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>plugins/homepage/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/est.css">
  <link href="<?php echo web_root; ?>plugins/homepage/assets/color/default.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">
  <script src="https://kit.fontawesome.com/654b456803.js" crossorigin="anonymous"></script>


  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo web_root; ?>plugins/homepage/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo web_root; ?>plugins/homepage/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo web_root; ?>plugins/homepage/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo web_root; ?>plugins/homepage/assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Lumia
    Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>


<body>
  <div id="wrapper">
    <header>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-static-top">
        <div class="">
          <div class="container">

            <!-- top menu -->
            <div class="header">
              <nav>
                <ul class="nav-menu">
                  <li class="inicio">
                    <a href="index.php"><i class="icon-home"></i> Inicio </a>
                  </li>
                  <li class="salir">
                    <a href="logout.php"> Salir<i class="fas fa-sign-out-alt"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- end menu -->

          </div>
        </div>
      </div>
    </header>

    <section id="maincontent">
      <div class="container">
        <?php check_message(); ?>
        <?php require_once $content; ?>
      </div>
    </section>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/jquery.js"></script>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/raphael-min.js"></script>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/bootstrap.js"></script>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/jquery.elastislide.js"></script>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/jquery.flexslider.js"></script>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/jquery-hover-effect.js"></script>
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/animate.js"></script>

    <!-- Template Custom JavaScript File -->
    <script src="<?php echo web_root; ?>plugins/homepage/assets/js/custom.js"></script>

</body>

</html>