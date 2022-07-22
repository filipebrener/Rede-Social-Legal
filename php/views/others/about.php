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
    <title>Sobre</title>
</head>
<body>
    <input type="hidden" id="screen" value="about">
    <?php include('../utils/header.php') ?>
    <ul>
        <li>Filipe Brener Ferreira Santos: 5052</li>
        <li>Rodolfo Brizzi Junior : 6025</li>
        <li>Caio Augusto Santos Ribeiro : 6018</li>
    </ul>
</body>
</html>