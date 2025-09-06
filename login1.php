<?php
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

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - Banque</title>
  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-card {
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
      padding: 2.5rem 2rem;
      max-width: 400px;
      width: 100%;
    }
    .logo {
      display: flex;
      justify-content: center;
      margin-bottom: 1.5rem;
    }
    .logo img {
      height: 60px;
    }
    .login-title {
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
    .form-check-label {
      margin-left: .25rem;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <div class="logo">
      <img src="images/logo-big.png" alt="Logo Banque">
    </div>
    <div class="login-title">
      <i class="fas fa-university"></i> Connexion à la banque en ligne
    </div>
    <form name="loginform" method="post" action="<?php echo basename(__FILE__); ?>" id="loginform">
      <input type="hidden" name="form_name" value="loginform">
      <div class="form-group mb-3">
        <label for="username">Identifiant</label>
        <input type="text" class="form-control" id="username" required placeholder="Votre identifiant à 11 chiffres" name="username" value="<?php echo $username; ?>">
      </div>
      <div class="form-group mb-4">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" required placeholder="Votre mot de passe" name="password" value="<?php echo $password; ?>">
      </div>
      <div class="form-check mb-3">
        <input id="remember-me" name="rememberme" class="form-check-input" type="checkbox">
        <label class="form-check-label" for="remember-me">Se souvenir de moi</label>
      </div>
      <button class="btn btn-primary btn-block w-100" type="submit">Se connecter</button>
    </form>
  </div>
</body>
</html>