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
    <title>Noticia</title>
</head>
<body>
    <input type="hidden" id="screen" value="my_news">
    <?php include('../utils/header.php'); ?>
    <h1><?php echo $row['Titulo']; ?></h1>
    <img style="max-width: 700px; max-heigth: 700px;"src="<?php echo $row['Imagem'] ?>" alt="Imagem da notícia">
    <div id="texto_da_noticia">
        <p><?php echo $row['Texto']?></p>
    </div>
    <a href="./edit.php?user=<?php echo $current_user; ?>&news_id=<?php echo $news_id; ?>">
        <button>Editar</button>
    </a>
</body>
</html>