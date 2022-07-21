<?php include('../database/connection.inc.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/form.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <!-- Mudar a responsabilidade do login para o JavaScript ? Dessa forma fica assíncrono e teria uma melhor exibição em caso de erro -->
    <form method="post" action="../controller/auth_controller.php">
        <input type="hidden" name="action" value="login">
        <div class="form-line">
            <label for="name">Nome:</label>
            <input name="name" type="text">
        </div>
        <div class="form-line">
            <label for="email">E-mail:</label>
            <input name="email" type="email">
        </div>
        <button type="submit">Entrar</button>
        
        <a href="./create_user.php">
            <button type="button">Criar nova conta</button>
        </a>
    </form>

</body>
</html>