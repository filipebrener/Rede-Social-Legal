<?php
include('../../database/connection.inc.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['name'];
    $email = $_POST['email'];

    $sqlUpdate = "UPDATE Usuarios SET nome='$nome', email='$email' 
                    WHERE id=$id";

    $result = $conn->query($sqlUpdate);
}
header("Location: show.php?user=$id");