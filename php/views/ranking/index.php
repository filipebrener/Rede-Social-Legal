<?php
    include('../../service/auth_service.php');
    $current_user = authUser();  // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
                                 // porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title> 
</head>
<body>
    <input type="hidden" id="screen" value="ranking">
    <?php include('../utils/header.php') ?>
    <h1>Ranking</h1>
    <ul>
        <li>Esta página deverá mostrar o ranking dos usuários que postam notícias (pontuação)</li>
        <li>A tela deverá ter paginação de 30 usuários por página.</li>
    </ul>
</body>
</html>