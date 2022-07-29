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
    <title>Relatório de Notícias</title> 
</head>
<body>
    <input type="hidden" id="screen" value="news_report">
    <?php include('../utils/header.php') ?>
    <h1>Relatório de Notícias</h1>
    <ul>
        <li>Essa página se enquadra como relatório na descrição do trabalho, deverá ser discutido um padrão pra criação de todas as telas que se enquadram nesse cenário</li>
        <li>Itens a se discutir</li>
        <ul>
            <li>
                Vai ser exibido em tabela/lista ?
            </li>
            <li>
                Qual vai ser o layout ? 
            </li>
            <li>
                Vai ter um botão pra exibir todos os detalhes ? Ou já estará exibindo todos os detalhes ?
            </li>
        </ul>
    </ul>
</body>
</html>