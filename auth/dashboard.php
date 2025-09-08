<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dashboard-card {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            padding: 2.5rem 2rem;
            max-width: 500px;
            width: 100%;
        }
        .dashboard-title {
            color: #007bff;
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .dashboard-links {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2rem;
        }
        .dashboard-links a {
            font-size: 1.1rem;
            color: #007bff;
            text-decoration: none;
            background: #f1f6fb;
            border-radius: .5rem;
            padding: .75rem 1rem;
            transition: background .2s;
        }
        .dashboard-links a:hover {
            background: #e3f0ff;
        }
        .dashboard-icon {
            margin-right: .5rem;
        }
    </style>
</head>
<body>
    <div class="dashboard-card">
        <div class="dashboard-title">
            <i class="fas fa-home dashboard-icon"></i> Tableau de bord
        </div>
        <p class="text-center">Bienvenue sur votre espace personnel.</p>
        <div class="dashboard-links">
            <a href="transfer.php"><i class="fas fa-exchange-alt dashboard-icon"></i>Transférer de l'argent</a>
            <a href="contact.php"><i class="fas fa-envelope dashboard-icon"></i>Contact</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt dashboard-icon"></i>Déconnexion</a>
        </div>
    </div>
</body>
</html>
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

<body class="" style ="">


    
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
                                    <li class="active"><a href="dashboard.html">Pannello di controllo</a></li>
                                    <li><a href="#cards.html">LE MIE CARTE</a></li>
                                    <li><a href="#transactions.html">CREDITI</a></li>
                                    <li><a href="#send-money.html">RISPARMIO</a></li>
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
        <div class="bg-primary">
            <div class="container d-flex justify-content-center">
                <ul class="nav secondary-nav">
                    <li class="nav-item"> <a class="nav-link" href="dashboard.html">Benvenuto <?php echo $nom; ?></a></li>


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
                            <h3 class="text-3 font-weight-400 my-4">Hai bisogno di aiuto o consigli ?</h3>
                            <p class="text-muted opacity-8 mb-4">Hai domande o dubbi sul tuo account ?<br>
I nostri esperti sono qui per aiutarti!</p>
                            <a href="contact.php" class="btn btn-primary btn-block">Contattaci</a> </div>
                        <!-- Need Help? End -->

                    </aside>
                    <!-- Left Panel End -->

                    <!-- Middle Panel
============================================= -->
                    <div class="col-lg-9">

                        <!-- Profile Completeness
=============================== -->
                        <div class="bg-light shadow-sm rounded p-4 mb-4">
                            <h3 class="text-2 font-weight-400 d-flex align-items-center px-4 mb-3">ultimo collegamento: <?php echo $lastlog; ?></h3>
                            <div class="row profile-completeness">
                                <div class="col-12 col-sm-6">
                                    <div class="account-card account-card-primary text-white rounded mb-4 mb-lg-0">
                                        <div class="row no-gutters">
                                            <div class="col-3 d-flex justify-content-center p-3">
                                                <div class="my-auto text-center text-13"> <i class="fas fa-university"></i>
                                                    <p class="bg-light text-0 text-body font-weight-500 rounded-pill d-inline-block px-2 line-height-4 opacity-8 mb-0"><?php echo $banque; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-9 border-left">
                                                <div class="py-4 my-2 pl-4">
                                                    <p class="text-4 font-weight-500 mb-1"><?php echo $nom; ?></p>
                                                    <p class="text-4 opacity-9 mb-1">CPT. XXXXXX-9025</p>
                                                    <p class="text-3 opacity-9 mb-1">Stato dell'account: <span class="bg-success text-white rounded-pill d-inline-block px-2 mb-0"><i class="<?php echo $iconstatut; ?>"></i> <?php echo $statut; ?></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-card-overlay rounded"> <a href="#transfer.html" class="text-light btn-link mx-2"><span class="mr-1"><i class="fas fa-share"></i></span>Trasferire denaro</a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="border rounded p-1 text-center"> <span class="d-block text-15 text-light mt-2 mb-3"><i class="fas fa-wallet"></i></span>
                                        <h3 class="text-7 font-weight-400"><?php echo $solde; ?> <?php echo $devise; ?></h3>
                                        <p class="mb-2 text-muted opacity-8">Saldo disponibile </p>

                                        <div class="d-flex"> <a href="#transfer.html" class="btn btn-primary btn-block">Zona di trasferimento</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Profile Completeness End -->

                        <!-- Recent Activity
=============================== -->
                        <div class="bg-light shadow-sm rounded py-4 mb-4">
                            <h3 class="text-5 font-weight-400 d-flex align-items-center px-4 mb-3">Storia delle operazioni</h3>

                            <!-- Title
=============================== -->
                            <div class="transaction-title py-2 px-4">
                                <div class="row">
                                    <div class="col-2 col-sm-1 text-center"><span class="">Data</span></div>
                                    <div class="col col-sm-7">Descrizione</div>
                                    <div class="col-auto col-sm-2 d-none d-sm-block text-center">Stato</div>
                                    <div class="col-3 col-sm-2 text-right">Quantità</div>
                                </div>
                            </div>
                            <!-- Title End -->

                            <!-- Transaction List
=============================== -->
                        <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="##transaction-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">28</span> <span class="d-block text-1 font-weight-300 text-uppercase">MAR</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">PRC GmbH</span> <span class="text-muted">Pagamento con carta - Ref. DL3900711</span> </div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-danger" data-toggle="tooltip" data-original-title="Cancelled"><i class="fas fa-times-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- 50</span> <span class="text-2 text-uppercase"><?php echo $devise; ?></span> </div>
                                    </div>
                                </div>
                            <div class="transaction-list">
                                <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="##transaction-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">12</span> <span class="d-block text-1 font-weight-300 text-uppercase">JAN</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">SCATOLA</span> <span class="text-muted">Ritiro contanti - Ref. DL1752006</span> </div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="In Progress"><i class="fas fa-check-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- 9000</span> <span class="text-2 text-uppercase"><?php echo $devise; ?></span> </div>
                                    </div>
                                </div>
                                <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="##transaction-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">12</span> <span class="d-block text-1 font-weight-300 text-uppercase">JAN</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">LIQUI. ASS. TFG</span> <span class="text-muted">Bonifico ricevuto - Ref. DL1752024 </span> </div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ 15000</span> <span class="text-2 text-uppercase"><?php echo $devise; ?></span> </div>
                                    </div>
                                </div>
                                <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="##transaction-detail">
                                    <div class="row align-items-center flex-row">
                                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">12</span> <span class="d-block text-1 font-weight-300 text-uppercase">JAN</span> </div>
                                        <div class="col col-sm-7"> <span class="d-block text-4">DOGANA</span> <span class="text-muted">Trasferimento in uscita - Ref. DL1752183</span> </div>
                                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- 700</span> <span class="text-2 text-uppercase"><?php echo $devise; ?></span> </div>
                                    </div>
                                </div>
                            
                               
                            <!-- Transaction List End -->

                            <!-- Transaction Item Details Modal
=========================================== -->
                            <div id="#transaction-detail" class="modal fade" role="dialog" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered #transaction-details" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row no-gutters">
                                                <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-left py-4">
                                                    <div class="my-auto text-center">
                                                        <div class="text-17 text-white my-3"><i class="fas fa-check"></i></div>
                                                        <h3 class="text-4 text-white font-weight-400 my-3">Envato Pty Ltd</h3>
                                                        <div class="text-8 font-weight-500 text-white my-4">557.20</div>
                                                        <p class="text-white">15 March 2019</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <h5 class="text-5 font-weight-400 m-3">Dettagli dell'operazione
                                                        <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                                    </h5>
                                                    <hr>
                                                    <div class="px-3">
                                                        <ul class="list-unstyled">
                                                            <li class="mb-2">Importo del pagamento <span class="float-right text-3">562.00</span></li>
                                                            <li class="mb-2">Tassa <span class="float-right text-3">-4.80</span></li>
                                                        </ul>
                                                        <hr class="mb-2">
                                                        <p class="d-flex align-items-center font-weight-500 mb-4">Importo totale <span class="text-3 ml-auto">557.20</span></p>
                                                        <ul class="list-unstyled">
                                                            <li class="font-weight-500">Pagato da:</li>
                                                            <li class="text-muted">Envato Pty Ltd</li>
                                                        </ul>
                                                        <ul class="list-unstyled">
                                                            <li class="font-weight-500">ID della transazione:</li>
                                                            <li class="text-muted">26566689645685976589</li>
                                                        </ul>
                                                        <ul class="list-unstyled">
                                                            <li class="font-weight-500">Descrizione:</li>
                                                            <li class="text-muted">Pagamento membro Envato marzo 2019</li>
                                                        </ul>
                                                        <ul class="list-unstyled">
                                                            <li class="font-weight-500">Stato:</li>
                                                            <li class="text-muted">Completato</li>
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
                            <div class="text-center mt-4"><a href="#" class="btn-link text-3">Vedi altro<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
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
                            <p class="text-center text-lg-left mb-2 mb-lg-0"><a href="#"><?php echo $banque; ?> - © 2024</a>.Tutti i diritti riservati.</p>
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
            <h6 class="modal-title" style="text-align: center;"><strong><span  class="text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> Il tuo conto è <?php echo $statut; ?> <br /> </strong>  </span>         <br> 
                
                 <span class="bg-success text-lg-justify mb-2 mb-lg-0 text-white rounded-pill d-inline-block px-2 mb-0"><i class="fas fa-check-circle"></i> <?php echo $frais; ?><?php echo $devise; ?></span> 
                <br>			I fondi su questo conto ora appartengono a Ortiz Jean Claude.
Per qualsiasi domanda si prega di contattare il gestore<b>	
</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">


                <div class="d-flex text-align-left">
 <a href="contact.php" class="btn btn-outline-secondary btn-block"><i class="fa fa-envelope" aria-hidden="true"></i> Contatta il mio manager 
</a></div><br> 
                <div class="d-flex"> <button type="button" class="btn btn-warning btn-block" data-dismiss="modal"><i class="fa fa-university" aria-hidden="true"></i>
 Accedi al mio account</button></div><br> 


                </form>
            </div>
        </div>
    </div>
</div>


















</body>

</html>