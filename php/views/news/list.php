<?php

include('../../database/connection.inc.php');
include('../../service/auth_service.php');
$current_user = authUser();  // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
// porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)

$sql = "SELECT * FROM `Noticias` WHERE id_usuario = $current_user ORDER BY id ASC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas notícias</title>
</head>

<body>
    <input type="hidden" id="screen" value="my_news">
    <?php include('../utils/header.php') ?>
    <h1>Minhas notícias</h1>
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
                    echo "<td><a href='./show.php?user=".$current_user."&news_id=".$user_data['ID']."'><button>Exibir</button></a> </td>";
                    echo "</tr>";
                }
            ?>
        </Tbody>

    </table>
</body>

</html>