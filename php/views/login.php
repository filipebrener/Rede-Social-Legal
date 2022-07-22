<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/form.css">
    <script src="../../scripts/login.js"></script>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <div id="form">
        <div class="form-line">
            <label for="name">Nome:</label>
            <input id="name" type="text">
        </div>
        <div class="form-line">
            <label for="email">E-mail:</label>
            <input id="email" type="email">
        </div>
        <button onclick="login()">Entrar</button>
        <a href="./user/create.php">
            <button type="button">Criar nova conta</button>
        </a>
    </div>
</body>
</html>