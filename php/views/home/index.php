<?php
include('../../database/connection.inc.php');
include('../../service/auth_service.php');
$current_user = authUser(); // < -- só comentar essa linha pra poder entrar na tela sem precisar de logar
// porém a navegação da página vai ficar comprometida (lembrar de descomentar antes de enviar o trabalho)

if (!empty($_GET['user'])) {
    $id = $_GET['user'];
}

$pag = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

$busca = "SELECT  n.Imagem, n.Titulo, n.Texto, u.Nome, u.Pontos, n.ID
FROM noticias n
INNER JOIN usuarios u ON n.ID_Usuario = u.ID
ORDER BY n.ID DESC";
$todos = mysqli_query($conn, "$busca");

$registros = "1";

$tr = mysqli_num_rows($todos);
$tp = ceil($tr / $registros);

$inicio = ($registros * $pag) - $registros;
$limite = mysqli_query($conn, "$busca LIMIT $inicio, $registros");

$anterior = $pag - 1;
$proximo = $pag + 1;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

    <title>Home</title>
</head>

<body>
    <input type="hidden" id="screen" value="home">
    <?php include('../utils/header.php') ?>
    <h1>Página Home</h1>
    <table class="table table-striped table-hover table-md" border="1" width="30%">
        <thead>
            <tr>
                <th scope="col">IMAGEM</th>
                <th class="col-sm-4" scope="col">TITULO</th>
                <th class="col-sm-4" scope="col">TEXTO</th>
                <th class="col-sm-4" scope="col">REPORTER</th>
                <th class="col-sm-4" scope="col">PONTUAÇÃO</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($dados = mysqli_fetch_array($limite)) {
                $id = $dados['ID'];
                $titulo = $dados['Titulo'];
                $texto = $dados['Texto'];
                $imagem = $dados['Imagem'];
                $nome_usuario = $dados['Nome'];
                $pontos = $dados['Pontos'];
            ?>
                <tr>
                    <th scope="row"><?= $imagem ?></th>
                    <th><?= $titulo ?></td>
                    <th><?= $texto ?></td>
                    <th><?= $nome_usuario?></td>
                    <th><?= $pontos?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    <nav aria-label="Navegação de página exemplo">
        <ul class="pagination">
            <?php
            if ($pag > 1) {
            ?>
                <li class="page-item">
                    <a class="page-link" href="?user=<?= $current_user; ?>&pagina=<?= $anterior; ?>" aria-label="Anterior">
                        <span aria-hidden="true">Anterior</span>
                    </a>
                </li>
            <?php } ?>

            <?php
            for ($i = 1; $i <= $tp; $i++) {
                if ($pag == $i) {
                    echo "<li class='page-item active'><a class='page-link' href='?user=$current_user&pagina=$i'>$i</a></li>";
                } else {
                    echo "<li class='page-item'><a class='page-link' href='?user=$current_user&pagina=$i'>$i</a></li>";
                }
            }
            ?>



            <?php
            if ($pag < $tp) {
            ?>
                <li class="page-item">
                    <a class="page-link" href="?user=<?= $current_user; ?>&pagina=<?= $proximo; ?>" aria-label="Próximo">
                        <span aria-hidden="true">Próximo</span>

                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>

</html>