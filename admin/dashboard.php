<?php
session_start();
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin</title>
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
        .admin-card {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            padding: 2.5rem 2rem;
            max-width: 500px;
            width: 100%;
        }
        .admin-title {
            color: #007bff;
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .admin-links {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2rem;
        }
        .admin-links a {
            font-size: 1.1rem;
            color: #007bff;
            text-decoration: none;
            background: #f1f6fb;
            border-radius: .5rem;
            padding: .75rem 1rem;
            transition: background .2s;
        }
        .admin-links a:hover {
            background: #e3f0ff;
        }
        .admin-icon {
            margin-right: .5rem;
        }
    </style>
</head>
<body>
    <div class="admin-card">
        <div class="admin-title">
            <i class="fas fa-tachometer-alt admin-icon"></i>Tableau de bord Admin
        </div>
        <p class="text-center">Gérez les utilisateurs, les transactions et les paramètres du site ici.</p>
        <div class="admin-links">
            <a href="users.php"><i class="fas fa-users admin-icon"></i>Gestion des utilisateurs</a>
            <a href="transactions.php"><i class="fas fa-exchange-alt admin-icon"></i>Gestion des transactions</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt admin-icon"></i>Déconnexion</a>
        </div>
    </div>
</body>
</html>
