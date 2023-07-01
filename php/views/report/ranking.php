<?php
include('../../database/connection.inc.php');
include('../../service/auth_service.php');
$current_user = authUser();  // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
// porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)

$sql = "SELECT * FROM Usuarios ORDER BY Pontos DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório do Ranking</title>
</head>

<body>
    <input type="hidden" id="screen" value="ranking_report">
    <?php include('../utils/header.php') ?>
    <h1>Relatório do Ranking</h1>
    <table border="1" width="30%">
        <thead>
            <tr>
                <th scope="col">POSIÇÃO</th>
                <th scope="col">USUÁRIO</th>
                <th scope="col">PONTUAÇÃO</th>
            </tr>
        </thead>
        <Tbody>
            <?php
            $lista = 0;
            while ($user_data = mysqli_fetch_assoc($result)) {
                $lista++;
                echo "<tr>";
                echo "<td>" . $lista . "</td>";
                echo "<td>" . $user_data['Nome'] . "</td>";
                echo "<td>" . $user_data['Pontos'] . "</td>";
                echo "</tr>";
            }
            ?>
        </Tbody>

    </table>
</body>

</html>