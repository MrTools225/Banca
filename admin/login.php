<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $admin_user = 'admin';
    $admin_pass = password_hash('admin123', PASSWORD_DEFAULT);
    $input_user = $_POST['username'];
    $input_pass = $_POST['password'];
    // Vérification simple (à remplacer par une base de données réelle)
    if ($input_user === $admin_user && password_verify($input_pass, $admin_pass)) {
        $_SESSION['admin_logged'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Identifiants incorrects';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
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
        .login-card {
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            border-radius: 1rem;
            background: #fff;
            padding: 2rem 2.5rem;
            width: 100%;
            max-width: 400px;
        }
        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        .logo img {
            height: 60px;
        }
        .card-header {
            background: none;
            border-bottom: none;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            color: #007bff;
        }
        .btn-primary {
            background: linear-gradient(90deg, #007bff 0%, #00c6ff 100%);
            border: none;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="logo">
            <img src="../images/logo-big.png" alt="Logo Admin">
        </div>
        <div class="card-header">
            <i class="fas fa-user-shield"></i> Connexion Admin
        </div>
        <div class="card-body">
            <?php if (isset($error)) { echo '<div class="alert alert-danger">'.$error.'</div>'; } ?>
            <form method="post">
                <div class="form-group mb-3">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" name="username" id="username" class="form-control" required autofocus>
                </div>
                <div class="form-group mb-4">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>
