<?php
session_start();
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .content {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            max-width: 600px;
            width: 90%;
            margin: auto;
        }
        h1 {
            margin-top: 0;
            color: #333;
        }
        .user-info {
            margin-bottom: 20px;
        }
        .user-info a {
            text-decoration: none;
            color: #007bff;
            margin-right: 20px;
        }
        .user-info img {
            vertical-align: middle;
            margin-right: 5px;
        }
        .login-link {
            text-decoration: none;
            color: #007bff;
        }
        p {
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="content">
        <?php if (isset($_SESSION['usuario'])): ?>
            <div class="user-info">
                <h1>Bienvenido, <?=$_SESSION['usuario']?>!</h1>
                <a href="profile.php"><?=$_SESSION['usuario']?></a>
                <a href="Logout.php"><img width="20px" src="img/logout.jpg" alt=""></a>
            </div>
            <p>Esta es tu página de inicio personalizada. Aquí encontrarás información relevante y acciones específicas para tu cuenta.</p>
        <?php else: ?>
            <h1>Bienvenido a nuestra página principal!</h1>
            <p>Esta es una página pública donde puedes encontrar información general sobre nuestros servicios y productos.</p>
            <p>Inicia sesión para acceder a contenido personalizado y funcionalidades adicionales.</p>
            <p><a class="login-link" href="login-form.php">Iniciar sesión</a>.</p>
        <?php endif; ?>
    </div>
</body>
</html>
