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
    <link rel="stylesheet" href="../../../styles/form.css">
    <script src="../../../scripts/news/create.js"></script>
    <title>Nova notícia</title>
</head>
<body>
    <input type="hidden" id="screen" value="create_news">
    <?php include('../utils/header.php') ?>
    <h1>Nova notícia</h1>
    <div class="form">
        <input type="hidden" id="user_id" value="<?php echo $current_user; ?>">
        <input type="hidden" id="action" value="create">
        <div class="form-line">
            <label for="title">Título da notícia:</label>
            <input type="text" id="title">
        </div>
        <div class="form-line">
            <label for="text">Corpo da notícia:</label>
            <textarea id="text" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="image">Imagem da notícia:</label>
            <input type="file" id="image">
        </div>
        <button onclick="create()">Criar Notícia</button>
    </div>
</body>
</html>