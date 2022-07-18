<?php include('../database/connection.inc.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <!-- Mudar a responsabilidade do login para o JavaScript ? Dessa forma fica assíncrono e teria uma melhor exibição em caso de erro -->
    <form method="post" action="../controller/auth_controller.php">
        <input type="hidden" name="action" value="login">
        <label for="name">Nome:</label>
        <input name="name" type="text">
        <br>
        <label for="email">email:</label>
        <input name="email" type="email">
        <br>
        <button type="submit">Entrar</button>
    </form>
    <a href="./create_user.php">
        <button>Criar nova conta</button>
    </a>
</body>
</html>