<?php
    include('../../service/auth_service.php');
    $current_user = authUser($path);  // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
                                 // porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <input type="hidden" id="screen" value="my_profile">
    <?php include('../utils/header.php') ?>
    <h1>Página de edição do usuário</h1>
    <ul>
        <li>Nesta página, os dados dos usuários podem ser alterados, com excessão dos pontos que não podem ser alterados.</li>
    </ul>
</body>
</html>