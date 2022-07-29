<?php
    include('../../service/auth_service.php');
    $current_user = authUser();  // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
                                 // porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)

    include('../../database/connection.inc.php');
    $news_id = $_GET['news_id'];

    $sql = "SELECT * FROM Noticias WHERE ID = $news_id AND ID_Usuario = $current_user";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/form.css">
    <script src="../../../scripts/news/edit.js"></script>
    <title>Editar notícia</title>
</head>
<body>
    <input type="hidden" id="screen" value="create_news">
    <?php include('../utils/header.php') ?>
    <h1>Editar notícia</h1>
    <div class="form">
        <input type="hidden" id="user_id" value="<?php echo $current_user; ?>">
        <input type="hidden" id="id" value="<?php echo $row['ID']; ?>">
        <input type="hidden" id="current_image" value="<?php echo $row['Imagem']; ?>">
        <input type="hidden" id="action" value="edit">
        <img style="max-width: 700px; max-heigth: 700px;"src="<?php echo $row['Imagem'] ?>" alt="Imagem da notícia">
        <div>
            <label for="image">Imagem da notícia:</label>
            <input type="file" id="image">
        </div>
        <div class="form-line">
            <label for="title">Título da notícia:</label>
            <input type="text" id="title" value="<?php echo $row['Titulo']; ?>">
        </div>
        <div class="form-line">
            <label for="text">Corpo da notícia:</label>
            <textarea id="text" cols="30" rows="10"><?php echo $row['Texto']; ?></textarea>
        </div>
        <button onclick="edit()">Editar Notícia</button>
    </div>
</body>
</html>