<?php
    include('../../service/auth_service.php');
    $current_user = authUser(); // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
                                // porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <input type="hidden" id="screen" value="home">
    <?php include('../utils/header.php') ?>
    <h1>Página Home</h1>
    <p>Pra marcar o item feito coloque o atributo "checked" no input, não use a interface porque quando sair da página não salvar os itens marcados</p>
    <p>Exemplo: <?php echo htmlentities('<input checked type="checkbox">');?> == <input checked type="checkbox"></p>
    <ul>
        <li><input type="checkbox"> Esta página deve ter paginação de 10 notícias por página, ordenado pelas notícias mais novas primeiro.</li>
        <li><input type="checkbox"> As notícias devem ter um link para o texto completo das mesmas, onde três botões principais devem aparecer, positivo, negativo e fake. </li>
        <li><input type="checkbox"> Deve ser escolhido ícones que representem bem esses três botões para uso no sistema. </li>
        <li><input type="checkbox"> Ao clicar em positivo a pontuação de cada repórter (usuário) é acrescida de 1 ponto</li>
        <li><input type="checkbox"> Ao clicar em negativo o repórter perde 2 pontos</li>
        <li><input type="checkbox"> Ao clicar em fake news o repórter perde 4 pontos.</li>
    </ul>
</body>
</html>