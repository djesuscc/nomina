<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="content-login">
        <form action="./sql/login.php" method="post" class="form">
            <h1>Iniciar Sesión</h1>
            <div class="content">
                <div class="content-input">
                    <i class="fas fa-user icon"></i>
                    <input type="email" name="email" placeholder="Correo" autocomplete="off" required>
                </div>
                <div class="content-input">
                    <i class="fas fa-key icon"></i>
                    <input type="password" name="password" placeholder="Contraseña" autocomplete="off" required>
                </div>
                <input type="submit" value="Enviar" class="btn">
            </div>
        </form>
    </div>
</body>
</html>