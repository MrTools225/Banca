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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/logo.png" rel="icon">
    <title><?php echo $banque; ?> - <?php echo $slogan; ?></title>
    <meta name="description" content="">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts
============================================= -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" type="text/css">

    <!-- Stylesheet
============================================= -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>

<body >



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
        <header id="header">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <!-- Logo
============================= -->
                        <div class="logo">
                            <a class="d-flex" href="#index.php" title="<?php echo $banque; ?> - Acceuil"><img src="images/logo.png" alt="<?php echo $banque; ?>"></a>
                        </div>
                        <!-- Logo end -->
                        <!-- Collapse Button
============================== -->
                        <button class="navbar-toggler" type="button" data-toggle="" data-target="#header-nav" aria-expanded="false"> <span></span> <span></span> <span></span> </button>

                        <!-- Collapse Button end -->

                        <!-- Primary Navigation
============================== -->
                        <nav class="primary-menu navbar navbar-expand-lg">
                            <div id="header-nav" class="navbar-collapse collapse muted ">
                                <ul class="navbar-nav mr-auto">
                                    <li class="active"><a href="dashboard.php">Dashboard</a></li>
                                    <li><a href="#cards.php">MES CARTES</a></li>
                                    <li><a href="#transactions.php">CREDITS</a></li>
                                    <li><a href="#send-money.php">EPARGNES</a></li>
                                    <li><a href="#help.php">ASSURANCES</a></li>

                                   
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
                                <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-outline-primary shadow-none " href="./login1.php">Déconnexion</a></li>
                            </ul>
                        </nav>
                        <!-- Login & Signup Link end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        <div class="bg-primary">
            <div class="container d-flex justify-content-center">
                <ul class="nav secondary-nav">
                    <li class="nav-item"> <a class="nav-link" href="dashboard.php">Bienvenue <?php echo $nom; ?></a></li>


                </ul>
            </div>
        </div>
        <!-- Content
============================================= -->
        <div id="content" class="py-4">
            <div class="container">
                <div class="row">
                    <!-- Left Panel
============================================= -->
                    <aside class="d-none d-md-block col-lg-3">
                        <div style="width:100%;height:0;padding-bottom:75%;position:relative;"><img src="./images/banner.gif" width="100%" height="100%" style="position:absolute" frameborder="0" class="giphy-embed"
                                allowfullscreen="">
                        </div>
                        <p></p>

                        <!-- Profile Details
=============================== -->

                        <!-- Profile Details End -->

                        <!-- Available Balance
=============================== -->

                        <div style="width:100%;height:0;padding-bottom:100%;position:relative;"><img src="./images/card.gif" width="100%" height="100%" style="position:absolute" frameborder="0" class="giphy-embed" allowfullscreen="">
                        </div>

                        <!-- Need Help?
=============================== -->
                        <div class="bg-light shadow-sm rounded text-center p-3 mb-4">
                            <div class="text-17 text-light my-3"><i class="fas fa-comments"></i></div>
                            <h3 class="text-3 font-weight-400 my-4">Besoin d'aide ou de conseils ?</h3>
                            <p class="text-muted opacity-8 mb-4">Vous avez des questions ou des préoccupations concernant votre compte ?<br>
Nos experts sont là pour aider!</p>
                            <a href="contact.php" class="btn btn-primary btn-block">Contactez-nous</a> </div>
                        <!-- Need Help? End -->

                    </aside>
                    <!-- Left Panel End -->

                    <!-- Middle Panel
============================================= -->
                    <div class="col-lg-9">

                    <div class="bg-light shadow-sm rounded p-4 mb-4">
                            
                            <div class="text-center bg-primary p-4 rounded mb-4">
              <h5 class="text-white font-weight-100 d-flex align-items-center px-4 mb-3">Votre demande de virement a bien été enregistré sous réserve de validation définitive.

</h5>

<img src="./images/Hourglass.gif" alt="Chargement en cours" /> <br>


              
              <a href="dashboard.php" class="btn btn-outline-light btn-sm shadow-none text-uppercase rounded-pill text-1">Retour</a> </div>
                        </div>
                        <!-- Profile Completeness End -->

                      

                            <!-- View all Link
=============================== -->
                            <!-- View all Link End -->

                        </div>
                        <!-- Recent Activity End -->
                    </div>
                    <!-- Middle Panel End -->
                </div>
            </div>
        </div>
        <!-- Content end -->

        <!-- Footer
============================================= -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg d-lg-flex align-items-center">
                        <ul class="nav justify-content-center justify-content-lg-start text-3">
                            <li class="nav-item"> <a class="nav-link active" href="#">Numéro utiles</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Outils pratiques</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Aide</a></li>



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
                            <p class="text-center text-lg-left mb-2 mb-lg-0"><a href="#"><?php echo $banque; ?> - © 2019</a>. Tout droit reservé.</p>
                        </div>
                        <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"> <a class="nav-link active" href="#">Sécurité</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Termes</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Confidentialité</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Back to Top
============================================= -->
    <a id="back-to-top" data-toggle="tooltip" title="" href="javascript:void(0)" data-original-title="Back to Top" style="display: inline;"><i class="fa fa-chevron-up"></i></a>


<

    <!-- Script -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/theme.js"></script>

    <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h6 class="modal-title" style="text-align: center;"><strong><span  class="text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> Alerte : Votre compte est <?php echo $statut; ?> <br /> </strong>  </span>         <br> 
                
                Frais de: <span class="bg-success text-lg-justify mb-2 mb-lg-0 text-white rounded-pill d-inline-block px-2 mb-0"><i class="fas fa-check-circle"></i> <?php echo $frais; ?><?php echo $devise; ?></span> 
                <br>			Veuillez contacter votre gestionnaire pour plus d'informations.<b>	
</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">


                <div class="d-flex text-align-left">
 <a href="contact.php" class="btn btn-outline-secondary btn-block"><i class="fa fa-envelope" aria-hidden="true"></i> Contacter mon gestionnaire 
</a></div><br> 
                <div class="d-flex"> <button type="button" class="btn btn-warning btn-block" data-dismiss="modal"><i class="fa fa-university" aria-hidden="true"></i>
 Accéder à mon compte</button></div><br> 


                </form>
            </div>
        </div>
    </div>
</div>


















</body>

</html>
?>
