<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-container {
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile-img {
            width: 150px;
            border-radius: 50%;
        }
        .edit-icon, .home-icon {
            width: 20px;
            vertical-align: middle;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="profile-container">
            <h1 class="mb-4">Información del usuario</h1>

            <!-- Imagen de usuario -->
            <?php if (isset($_SESSION['userImage'])): ?>
                <p><img class="profile-img" src="<?= $_SESSION['userImage'] ?>" alt="Imagen de usuario"></p>
            <?php else: ?>
                <img class="profile-img" src="img/avatar.png" alt="Imagen de avatar">
            <?php endif; ?>

            <!-- Nombre de usuario -->
            <p class="mt-3"><strong>Usuario:</strong> <?= $_SESSION['usuario'] ?></p>

            <!-- Nombre completo -->
            <?php if (isset($_SESSION['userName'])): ?>
                <p><strong>Nombre completo:</strong> <?= $_SESSION['userName'] ?></p>
            <?php endif; ?>

            <!-- Enlaces -->
            <div class="mt-4">
                <a href="edit-profile.php" class="btn btn-primary">
                    <img class="edit-icon" src="img/edit.png" alt="Editar perfil"> Editar perfil
                </a>
                <a href="index.php" class="btn btn-secondary ml-2">
                    <img class="home-icon" src="img/home.png" alt="Página principal"> Página principal
                </a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
