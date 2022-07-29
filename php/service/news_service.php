<?php

    function create_news($title, $text, $image, $user_id){
        include('../database/connection.inc.php');
        $sql = "INSERT INTO Noticias (Titulo, Texto, Imagem, ID_Usuario, Fake) VALUES ('$title', '$text', '$image', $user_id, 0)";
        $result = conn->query($sql);
        $id = $conn->insert_id;
        $conn->close();
        return $id;
    }

?>