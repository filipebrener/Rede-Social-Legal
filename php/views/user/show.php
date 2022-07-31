<?php
include('../../database/connection.inc.php');
include('../../service/auth_service.php');
$current_user = authUser();  // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
// porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)

if (!empty($_GET['user'])) {

    $id = $_GET['user'];

    $sqlSelect = "SELECT nome, email FROM usuarios WHERE id=$id";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {

        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
        }

    }
}
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
    <h1>Informações do Usuário</h1>
    <h2>Nome: <?php echo $nome;?></h2>
    <h2>Email: <?php echo $email;?></h2>
    

<a href="./edit.php?user=<?php echo $current_user ?>"><button>Editar usuário</button></a>

</body>

</html>