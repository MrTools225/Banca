<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'loginform')
{
   $success_page = './lgn=ok.php';
   $error_page = './login=error.php';
   $database = './usersdb.php';
   $crypt_pass = md5($_POST['password']);
   $found = false;
   $fullname = '';
   $session_timeout = 600;
   if(filesize($database) > 0)
   {
      $items = file($database, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      foreach($items as $line)
      {
         list($username, $password, $email, $name, $active) = explode('|', trim($line));
         if ($username == $_POST['username'] && $active != "0" && $password == $crypt_pass)
         {
            $found = true;
            $fullname = $name;
         }
      }
   }
   if($found == false)
   {
      header('Location: '.$error_page);
      exit;
   }
   else
   {
      if (session_id() == "")
      {
         session_start();
      }
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['fullname'] = $fullname;
      $_SESSION['expires_by'] = time() + $session_timeout;
      $_SESSION['expires_timeout'] = $session_timeout;
      $rememberme = isset($_POST['rememberme']) ? true : false;
      if ($rememberme)
      {
         setcookie('username', $_POST['username'], time() + 3600*24*30);
         setcookie('password', $_POST['password'], time() + 3600*24*30);
      }
      header('Location: '.$success_page);
      exit;
   }
}
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
<html lang="en"><head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/logo.png" rel="icon">
<title><?php echo $banque; ?> - Connessione</title>
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
</head>
<body>

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
                <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="index.html" title="Connexion"></a> </div>
              </div>
            </div>
              <div class="row no-gutters my-auto">
                <div class="col-10 col-lg-9 mx-auto">
                  <h1 class="text-11 text-white mb-4">Felice di rivederti!</h1>
                  <p class="text-4 text-white line-height-4 mb-5">Esegui le tue transazioni online in tutta sicurezza da smartphone o computer. </p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End -->
      
      <!-- Login Form
      ============================================= -->

      <div class="col-md-6 d-flex align-items-center">

        <div class="container my-4" >
          <div class="row">
            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
   <img src="./images/logo-big.png" alt="La Banque Verte"> <br> <br> 
  
              <h3 class="font-weight-400 mb-4">ACCEDI ALLA MIA BANCA ONLINE
</h3>
<form name="loginform" method="post" action="<?php echo basename(__FILE__); ?>" id="loginform">
<input type="hidden" name="form_name" value="loginform">                <div class="form-group">
                  <label for="emailAddress">IDENTIFICATORE
</label>
<input type="text" class="form-control" id="loginPassword" required="" placeholder="Saisissez votre identifiant à 11 chiffres" name="username" value="<?php echo $password; ?>">

                </div>
                <div class="form-group">
                  <label for="loginPassword">PAROLA D'ORDINE</label>
                  <input type="password" class="form-control" id="loginPassword" required="" placeholder="Saisissez votre motre de passe" name="password" value="<?php echo $password; ?>">
                </div>
                <div class="row">
                  <div class="col-sm">
                    <div class="form-check custom-control custom-checkbox">
                      <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                      
                    </div>
                  </div>
                  <div class="col-sm text-right"></div>
                </div>
                <button class="btn btn-primary btn-block my-4" type="submit">Connessione</button>
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

</body>

</html>