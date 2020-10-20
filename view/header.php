<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>développeur web sébastien girard</title>
  <meta content="site développeur web  girard sébastien" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Template body CSS File -->
  <link href="styles.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="photo profile" class="img-fluid rounded-circle">

      
        <h1 class="text-light"><a href="index.html"><?php echo $identity['prenom'] .' '. $identity['nom'];?></a></h1>
 

    
        <div class="social-links mt-3 text-center">
          <a href="mailto: sebstien25girard08@gmail.com" class="b1-mail-send"><i class='bx bx-mail-send'></i></a>
          <a href="#" target="_blank" class="github"><i class='bx bxl-github'></i></a>
          <a href="https://join.skype.com/invite/pnxFXhmsBNOu" target="_blank" class="google-plus"><i
              class="bx bxl-skype"></i></a>
          <a href="https://www.linkedin.com/in/sébastienGirardDevbackend" target="_blank" class="linkedin"><i
              class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span> Accueil</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>Sur moi</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span> Experiences</span></a></li>
          <li><a href="#services"><i class="bx bx-server"></i> Compétences informatiques</a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->