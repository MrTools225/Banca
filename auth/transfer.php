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
</head>

<body class="" style="">

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
                            <a class="d-flex" href="index.html" title="Payyed - HTML Template"><img src="images/logo.png" alt="Payyed"></a>
                        </div>
                        <!-- Logo end -->
                        <!-- Collapse Button
============================== -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
                        <!-- Collapse Button end -->

                        <!-- Primary Navigation
============================== -->
                        <nav class="primary-menu navbar navbar-expand-lg">
                            <div id="header-nav" class="collapse navbar-collapse">
                                <ul class="navbar-nav mr-auto">
                                    <li class="active"><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="transactions.html">CREDITS</a></li>
                                    <li><a href="send-money.html">EPARGNES</a></li>
                                    <li><a href="help.html">ASSURANCES</a></li>
                                    
                                    <li class="dropdown dropdown-mega"> 
                                        <ul class="dropdown-menu" style="height: 0px; padding-top: 1.54698e-06px; margin-top: 0px; padding-bottom: 1.54698e-06px; margin-bottom: 0px; margin-left: -567.5px; display: none;">
                                            <li>
                                                <div class="dropdown-mega-content">
                                                    <div class="row">
                                                        <div class="col-lg-3"> <span class="sub-title">Homepage</span>
                                                            <ul class="dropdown-mega-submenu">
                                                                <li><a class="dropdown-item" href="index.html">Home Version 1</a></li>
                                                                <li><a class="dropdown-item" href="index-2.html">Home Version 2</a></li>
                                                                <li><a class="dropdown-item" href="landing-page-send.html">Landing Page - Send</a></li>
                                                                <li><a class="dropdown-item" href="landing-page-receive.html">Landing Page - Receive</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3"> <span class="sub-title">Account</span>
                                                            <ul class="dropdown-mega-submenu">
                                                                <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                                                                <li><a class="dropdown-item" href="profile-cards-and-bank-accounts.html">Cards &amp; Bank Accounts</a></li>
                                                                <li><a class="dropdown-item" href="profile-notifications.html">Notifications</a></li>
                                                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Login<i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i></a>
                                                                    <ul class="dropdown-menu" style="">
                                                                        <li><a class="dropdown-item" href="login.html">Login Page 1</a></li>
                                                                        <li><a class="dropdown-item" href="login-2.html">Login Page 2</a></li>
                                                                        <li><a class="dropdown-item" href="login-3.html">Login Page 3</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Signup<i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i></a>
                                                                    <ul class="dropdown-menu" style="">
                                                                        <li><a class="dropdown-item" href="signup.html">Signup Page 1</a></li>
                                                                        <li><a class="dropdown-item" href="signup-2.html">Signup Page 2 </a></li>
                                                                        <li><a class="dropdown-item" href="signup-3.html">Signup Page 3 </a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3"> <span class="sub-title">Dashboard</span>
                                                            <ul class="dropdown-mega-submenu">
                                                                <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                                                                <li><a class="dropdown-item" href="transactions.html">Transactions</a></li>
                                                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Send Money<i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i></a>
                                                                    <ul class="dropdown-menu" style="display: none; height: 134px; padding-top: 10px; margin-top: -40px; padding-bottom: 10px; margin-bottom: 0px;">
                                                                        <li><a class="dropdown-item" href="send-money.html">Send Money</a></li>
                                                                        <li><a class="dropdown-item" href="send-money-confirm.html">Send Money Confirm</a></li>
                                                                        <li><a class="dropdown-item" href="send-money-success.html">Send Money Success </a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Request Money<i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i></a>
                                                                    <ul class="dropdown-menu" style="display: none; height: 0.00826562px; padding-top: 0.00123364px; margin-top: -0.00493455px; padding-bottom: 0.00123364px; margin-bottom: 0px;">
                                                                        <li><a class="dropdown-item" href="request-money.html">Request Money</a></li>
                                                                        <li><a class="dropdown-item" href="request-money-confirm.html">Request Money Confirm</a></li>
                                                                        <li><a class="dropdown-item" href="request-money-success.html">Request Money Success </a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Deposit Money<i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i></a>
                                                                    <ul class="dropdown-menu" style="display: none; height: 33.4012px; padding-top: 2.49427px; margin-top: -9.97707px; padding-bottom: 2.49427px; margin-bottom: 0px;">
                                                                        <li><a class="dropdown-item" href="deposit-money.html">Deposit Money</a></li>
                                                                        <li><a class="dropdown-item" href="deposit-money-confirm.html">Deposit Money Confirm</a></li>
                                                                        <li><a class="dropdown-item" href="deposit-money-success.html">Deposit Money Success </a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Withdraw Money<i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i></a>
                                                                    <ul class="dropdown-menu" style="display: none; height: 134px; padding-top: 10px; margin-top: -40px; padding-bottom: 10px; margin-bottom: 0px;">
                                                                        <li><a class="dropdown-item" href="withdraw-money.html">Withdraw Money</a></li>
                                                                        <li><a class="dropdown-item" href="withdraw-money-confirm.html">Withdraw Money Confirm</a></li>
                                                                        <li><a class="dropdown-item" href="withdraw-money-success.html">Withdraw Money Success </a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3"> <span class="sub-title">Others</span>
                                                            <ul class="dropdown-mega-submenu">
                                                                <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                                                <li><a class="dropdown-item" href="fees.html">Fees</a></li>
                                                                <li><a class="dropdown-item" href="help.html">Help</a></li>
                                                                <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                                                                <li><a class="dropdown-item" href="elements.html">Elements</a></li>
                                                                <li><a class="dropdown-item" href="elements-2.html">Elements 2</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
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
                                <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-outline-primary shadow-none d-none d-sm-block" href="">Décconnexion</a></li>
                            </ul>
                        </nav>
                        <!-- Login & Signup Link end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        
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

                        <!-- Profile Completeness
=============================== -->
                        
                        <!-- Profile Completeness End -->

                        <!-- Recent Activity
=============================== -->
                        <div class="bg-light shadow-sm rounded py-4 mb-4"><div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
            <div class="text-center bg-primary p-4 rounded mb-4">
              <h3 class="text-10 text-white font-weight-400"><?php echo $solde; ?> <?php echo $devise; ?> </h3>
              <p class="text-white">Solde disponible</p>
              <a href="" class="btn btn-outline-light btn-sm shadow-none text-uppercase rounded-pill text-1">Mes bénéficiaires</a> </div>


            <form id="form-send-money" action="process.php" method="post">

            <input type="hidden" name="step" value="infovir">
              <div class="form-group">
                <label for="payerName">Nom du bénéficiaire</label>
                <input type="text" value="" class="form-control" name="nom" id="payerName" required="" placeholder="Nom">
              </div>
              
              <div class="form-group">
                <label for="payerName">IBAN</label>
                <input type="text" value="" class="form-control" name="iban" id="payerName" required="" placeholder="IBAN">
              </div>
              <div class="form-group">
                <label for="payerName">BIC/SWIFT</label>
                <input type="text" value="" class="form-control" name="bic" id="payerName" required="" placeholder="Code BIC/SWIFT">
              </div>
              
              
              <div class="form-group">
                <label for="youSend">Montant</label>
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text"><?php echo $devise; ?> </span> </div>
                  <input type="text" class="form-control" name="mvir" id="youSend" value="1,000" placeholder="">
                </div>
              </div>
              <button class="btn btn-primary btn-block">Confirmer</button>
            </form>
          </div>
                                    </div>
                                
                                
                                
                                
                                
                                
                            
                            

                            <!-- Transaction Item Details Modal
  =========================================== -->
                            <div id="transaction-detail" class="modal fade" role="dialog" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row no-gutters">
                                                <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-left py-4">
                                                    <div class="my-auto text-center">
                                                        <div class="text-17 text-white my-3"><i class="fas fa-check"></i></div>
                                                        <h3 class="text-4 text-white font-weight-400 my-3">Envato Pty Ltd</h3>
                                                        <div class="text-8 font-weight-500 text-white my-4">$557.20</div>
                                                        <p class="text-white">15 March 2019</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <h5 class="text-5 font-weight-400 m-3">Détails de l'opération
                                                        <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                                    </h5>
                                                    <hr>
                                                    <div class="px-3">
                                                        <ul class="list-unstyled">
                                                            <li class="mb-2">Payment Amount <span class="float-right text-3">$562.00</span></li>
                                                            <li class="mb-2">Fee <span class="float-right text-3">-$4.80</span></li>
                                                        </ul>
                                                        <hr class="mb-2">
                                                        <p class="d-flex align-items-center font-weight-500 mb-4">Total Amount <span class="text-3 ml-auto">$557.20</span></p>
                                                        <ul class="list-unstyled">
                                                            <li class="font-weight-500">Paid By:</li>
                                                            <li class="text-muted">Envato Pty Ltd</li>
                                                        </ul>
                                                        <ul class="list-unstyled">
                                                            <li class="font-weight-500">Transaction ID:</li>
                                                            <li class="text-muted">26566689645685976589</li>
                                                        </ul>
                                                        <ul class="list-unstyled">
                                                            <li class="font-weight-500">Description:</li>
                                                            <li class="text-muted">Envato March 2019 Member Payment</li>
                                                        </ul>
                                                        <ul class="list-unstyled">
                                                            <li class="font-weight-500">Status:</li>
                                                            <li class="text-muted">Completed</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Transaction Item Details Modal End -->

                            <!-- View all Link
  =============================== -->
                            <div class="text-center mt-4"></div>
                            <!-- View all Link End -->

                        
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
                            <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
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
                            <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright © 2019 <a href="#">Payyed</a>. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
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
    <a id="back-to-top" data-toggle="tooltip" title="" href="javascript:void(0)" data-original-title="Back to Top" style="display: none;"><i class="fa fa-chevron-up"></i></a>

    <!-- Script -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/theme.js"></script>












</body></html>