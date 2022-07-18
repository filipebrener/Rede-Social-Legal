<?php 
    include('../database/connection.inc.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
</head>
<body>
    <h1>Criar usuário</h1>
    <form method="post" action="../controller/user_controller.php">
        <input type="hidden" name="action" value="create">
        <label for="name">Nome</label>
        <input name="name" type="text">
        <br>
        <label for="email">E-mail</label>
        <input name="email" type="email">
        <br>
        <button type="submit">Criar</button>
    </form>
</body>
</html>