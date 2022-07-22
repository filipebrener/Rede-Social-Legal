<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/form.css">
    <script src="../../scripts/create_user.js"></script>
    <title>Criar Usuário</title>
</head>
<body>
    <h1>Criar usuário</h1>
    <form method="post" action="../controller/user_controller.php">
        <input type="hidden" name="action" value="create">
        <div class="form-line">
            <label for="name">Nome</label>
            <input required name="name" type="text">
        </div>
        <div class="form-line">
            <label for="email">E-mail</label>
            <input required onchange="verify_email(this.value)" name="email" type="email" id="email_input">
            <label id="email_input_message"></label>
        </div>
        <br>
        <button disabled id="submit_button" type="submit">Criar</button>
    </form>
</body>
</html>