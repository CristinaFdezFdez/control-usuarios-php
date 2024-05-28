<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición perfil de usuario</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        body {
            padding-top: 50px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
        }
        h1 {
            margin-bottom: 30px;
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="url"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .home-link img {
            width: 20px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edición perfil de usuario</h1>
        <form action="save-profile.php" method="post">
            <div class="form-group">
                <label for="userName">Nombre completo:</label>
                <input type="text" id="userName" name="userName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="userImage">URL de la foto:</label>
                <input type="url" id="userImage" name="userImage" class="form-control" required>
            </div>
            <input type="submit" value="Guardar cambios" class="btn btn-primary btn-block">
        </form>
        <br>
        <a href="index.php" class="home-link">
            <img src="img/home.png" alt="">Página principal
        </a>
    </div>
</body>
</html>
