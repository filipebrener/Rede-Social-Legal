<?php
include('../../database/connection.inc.php');
include('../../service/auth_service.php');
$current_user = authUser();  // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
// porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)

$sql = "SELECT nome, email FROM usuarios ORDER BY nome ASC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Usuários</title>
</head>

<body>
    <input type="hidden" id="screen" value="user_report">
    <?php include('../utils/header.php') ?>
    <h1>Relatório de Usuários</h1>
    <table border="1" width="30%">
        <thead>
            <tr>
            <th scope="col">USUÁRIO</th>
            <th scope="col">EMAIL</th>
            </tr>
        </thead>
        <Tbody>
            <?php 
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "</tr>";
                }
            ?>
        </Tbody>

    </table>
</body>

</html>