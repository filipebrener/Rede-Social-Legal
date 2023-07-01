<?php
include('../../database/connection.inc.php');
include('../../service/auth_service.php');
$current_user = authUser();  // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
// porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)

if (!empty($_GET['user'])) {

    $id = $_GET['user'];

    $sqlSelect = "SELECT nome, email FROM Usuarios WHERE id=$id";
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
    <title>Editar Usuário</title>
</head>

<body>
    <input type="hidden" id="screen" value="my_profile">
    <?php include('../utils/header.php') ?>
    <h1>Página de edição do usuário</h1>
    <form method="POST" action="saveEdit.php">
        <input type="hidden" name="action" value="create">
        <div class="form-line">
            <label for="name">Nome</label>
            <input required name="name" type="text" value="<?php echo $nome; ?>">
        </div><br>
        <div class="form-line">
            <label for="email">E-mail</label>
            <input required onchange="verify_email(this.value)" name="email" type="email" id="email_input" value="<?php echo $email; ?>">
            <label id="email_input_message"></label>
        </div>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <br>
        <button name="update" id="update" type="submit">Editar</button>
    </form>
</body>

</html>
<?php


?>