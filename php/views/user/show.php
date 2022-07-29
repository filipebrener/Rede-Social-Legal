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
    <!-- Na tag <title> deve entra o nome do usuario (usar o PHP pra fazer isso) -->
    <title>Usuário</title> 
</head>
<body>
    <input type="hidden" id="screen" value="my_profile">
    <?php include('../utils/header.php') ?>
    <h1>Implementar página que exibe o usuário</h1>
    <ul>
        <li>A página deve exibir as informações via texto e não inputs</li>
        <li>A tela possui um botão no item abaixo, que redireciona para página que deverá ter os inputs pré preenchidos para que o usuário possa editar</li>
        <li><a href="./edit.php?user=<?php echo $current_user?>"><button>Editar usuário</button></a></li>
    </ul>
</body>
</html>