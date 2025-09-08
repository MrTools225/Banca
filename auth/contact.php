<?php
include('config.php');
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['username']))
{
   header('Location: ./login=error.php');
   exit;
}
if (isset($_SESSION['expires_by']))
{
   $expires_by = intval($_SESSION['expires_by']);
   if (time() < $expires_by)
   {
      $_SESSION['expires_by'] = time() + intval($_SESSION['expires_timeout']);
   }
   else
   {
      unset($_SESSION['username']);
      unset($_SESSION['expires_by']);
      unset($_SESSION['expires_timeout']);
      header('Location: ./login=error.php');
      exit;
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/logo.png" rel="icon">
<title><?php echo $banque; ?> - Contact</title>
<meta name="description" content="This professional design html template is for build a Money Transfer and online payments website.">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
============================================= -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" type="text/css">

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .contact-card {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            padding: 2.5rem 2rem;
            max-width: 400px;
            width: 100%;
        }
        .contact-title {
            color: #007bff;
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .btn-primary {
            background: linear-gradient(90deg, #007bff 0%, #00c6ff 100%);
            border: none;
        }
    </style>

<!-- Preloader -->
<div id="preloader" style="display: none;">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================================= -->
  <!-- Header
============================================= -->
<header id="header">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <!-- Logo
============================= -->
                        <div class="logo">
                            <a class="d-flex" href="#index.html" title="<?php echo $banque; ?> - Acceuil"><img src="images/logo.png" alt="<?php echo $banque; ?>"></a>
                        </div>
                        <!-- Logo end -->
                        <!-- Collapse Button
============================== -->
                        <button class="navbar-toggler" type="button" data-toggle="" data-target="#header-nav" aria-expanded="false"> <span></span> <span></span> <span></span> </button>

                        <!-- Collapse Button end -->

                        <!-- Primary Navigation
============================== -->
                        <nav class="primary-menu navbar navbar-expand-lg">
                            <div id="header-nav" class="navbar-collapse collapse muted " style="">
                                <ul class="navbar-nav mr-auto">
                                    <li class="active"><a href="dashboard.php">Dashboard</a></li>
                                    <li><a href="#cards.html">LE MIE CARTE</a></li>
                                    <li><a href="#transactions.html">CREDITI</a></li>
                                    <li><a href="#send-money.html">RISPARMI</a></li>
                                    <li><a href="#help.html">ASSICURAZIONE</a></li>

                                   
                                </ul>
                            </div>
                        </nav>
                        <!-- Primary Navigation end -->
                    </div>
                    <div class="header-column justify-content-end">
                        <!-- Login & Signup Link
============================== -->
                        <nav class="login-signup navbar navbar-expand">
                            <ul class="navbar-nav">
                                <li> </li>
                                <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-outline-primary shadow-none " href="./login1.php">Disconnetti</a></li>
                            </ul>
                        </nav>
                        <!-- Login & Signup Link end -->
                    </div>
                </div>
            </div>
        </header>
  <!-- Header End --> 
    
<!-- Page Header
============================================= -->
<section class="page-header page-header-text-light bg-dark-3 py-5">
  <div class="container">
    <div class="row text-center">
      
      <div class="col-12">
        <h1>Il tuo manager è a tua disposizione</h1>
      </div>
    </div>
  </div>
</section>
<!-- Page Header End --> 
    
  <!-- Content
  ============================================= -->
  <div id="content">
  <div class="container">
      <div class="row">
      
      <div class="col-md-4 mb-4">
      <div class="bg-white shadow-md rounded h-100 p-3">
      	<div class="featured-box text-center">
              <div class="featured-box-icon text-primary mt-4"> <i class="fas fa-user"></i></div>
              <h3>Amministratore</h3>
              <p><?php echo $nomgest; ?></p>
            </div>
      </div>
      </div>
      
      <div class="col-md-4 mb-4">
      <div class="bg-white shadow-md rounded h-100 p-3">
      	<div class="featured-box text-center">
              <div class="featured-box-icon text-primary mt-4"> <i class="fas fa-phone"></i> </div>
              <h3>Telefono</h3>
              <p class="mb-0"><?php echo $telgest; ?></p>
              
            </div>
      </div>
      </div>
      
      <div class="col-md-4 mb-4">
      <div class="bg-white shadow-md rounded h-100 p-3">
      	<div class="featured-box text-center">
              <div class="featured-box-icon text-primary mt-4"> <i class="fas fa-envelope"></i> </div>
              <h3>Indirizzo e-mail</h3>
              <p><?php echo $mailgest; ?></p>
            </div>
      </div>
      </div>
      
      
      
      
      </div>
    </div>
    
    
    
    <br>    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


  
  <!-- Content end -->
  
      <!-- Footer
============================================= -->
<footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg d-lg-flex align-items-center">
                        <ul class="nav justify-content-center justify-content-lg-start text-3">
                            <li class="nav-item"> <a class="nav-link active" href="#">Numeri utili</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Strumenti pratici</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Aiuto</a></li>



                        </ul>
                    </div>
                    <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
                        <ul class="social-icons justify-content-center">
                            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                            <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="" data-original-title="Youtube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-copyright pt-3 pt-lg-2 mt-2">
                    <div class="row">
                        <div class="col-lg">
                            <p class="text-center text-lg-left mb-2 mb-lg-0"><a href="#"><?php echo $banque; ?> - © 2019</a>. Tutti i diritti riservati.</p>
                        </div>
                        <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"> <a class="nav-link active" href="#">Sicurezza</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Termini</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Riservatezza</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>