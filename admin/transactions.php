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
    <title>Gestion des transactions</title>
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
            font-size: 1.7rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .back-link {
            display: block;
            margin-bottom: 1rem;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="admin-card">
        <a href="dashboard.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour au dashboard</a>
        <div class="admin-title">
            <i class="fas fa-exchange-alt"></i> Gestion des transactions
        </div>
        <p class="text-center">Liste et gestion des transactions (à compléter selon la base de données).</p>
    </div>
</body>
</html>
