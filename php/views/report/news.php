<?php
include('../../database/connection.inc.php');
include('../../service/auth_service.php');
$current_user = authUser();  // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
// porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)

$sql = "SELECT * FROM noticias ORDER BY id ASC";
$result = $conn->query($sql);
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

    <h2>OBS: Decidir o que vai ser colocado no relatório</h2>
    <h1>Relatório de Notícias</h1>
    <table border="1" width="30%">
        <thead>
            <tr>
            <th scope="col">TÍTULO</th>
            </tr>
        </thead>
        <Tbody>
            <?php 
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$user_data['Titulo']."</td>";
                    echo "</tr>";
                }
            ?>
        </Tbody>

    </table>
</body>

</html>