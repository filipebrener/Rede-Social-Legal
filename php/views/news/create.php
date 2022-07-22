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
    <title>Nova notícias</title>
</head>
<body>
    <input type="hidden" id="screen" value="create_news">
    <?php include('../utils/header.php') ?>
    <h1>Página de cadastro de novas notícias</h1>
    <ul>
        <li>Cadastro do texto e imagens das notícias (uma imagem por notícia).</li>
        <li>Para o cadastro do texto deve-se usar uma tag textarea, como no item abaixo. Alterar o tamanho mexendo nos atributos "cols" e "rows" da tag</li>
        <li><textarea name="" id="" cols="80" rows="10"></textarea></li>
    </ul>
</body>
</html>