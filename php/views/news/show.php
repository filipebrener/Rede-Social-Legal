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
    <title>Noticia</title>
</head>
<body>
    <input type="hidden" id="screen" value="my_news">
    <?php include('../utils/header.php') ?>
    <h1>Página de detalhamento de uma notícia</h1>
    <ul>
        <li>Essa tela irá exibir os detalhes de uma notícia do usuário</li>
    </ul>
</body>
</html>