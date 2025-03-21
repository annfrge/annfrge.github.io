<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $titulo; ?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="keywords" content="café, cafetería, desayuno, menú, postres"/>
    
<!-- Favicon -->
<link rel="icon" href="img/favicon.ico">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Candal&family=Parkinsans:wght@300..800&family=Paytone+One&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">

<!-- Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.min.css" rel="stylesheet">

<!-- Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?render=6LcLDGEqAAAAALrMvzbZnBUnmZ0k-p7DnccMXLDc&badge=inline"></script>

<!-- Google Tag Manager -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GFC8T778DQ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-GFC8T778DQ');
</script>
  </head>

  <body>
    <header id="subir">
      <!--Spinner-->
    <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-dark" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!--Spinner termina-->

    
    <!--Navbar-->
    <div class="container-fluid  sticky-top p-0">
        <div class="container">
            <nav class="navbar navbar-expand-xl pt-3">
                <button type="button" class="hamburger"data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="logo-text"><a href="index.php"><h1>acho coffee</h1></a></div>
                    <div class="navbar-nav d-inline-flex">
                    <div>
                        <a href="index.php" class="nav-item <?= ($pagina == 'index.php') ? 'active' : '' ?>">Inicio</a>
                    </div>
                    <div>
                        <a href="carta.php" class="nav-item <?= ($pagina == 'carta.php') ? 'active' : '' ?>">Carta</a>
                    </div>
                    <a href="contacto.php" class="nav-item <?= ($pagina == 'contacto.php') ? 'active' : '' ?>">Contacto</a>
                </div>
            </nav>
        </div>
    </div>
</header>