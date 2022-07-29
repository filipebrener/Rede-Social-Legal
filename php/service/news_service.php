<?php

    function create_news($title, $text, $image, $user_id){
        include('../database/connection.inc.php');
        $sql = "INSERT INTO Noticias (Titulo, Texto, Imagem, ID_Usuario, Fake) VALUES ('$title', '$text', '$image', $user_id, 0)";
        $conn->query($sql);
        $id = $conn->insert_id;
        $conn->close();
        return $id;
    }

    function edit_news($title, $text, $image, $news_id){
        include('../database/connection.inc.php');
        $sql = "UPDATE Noticias 
                SET Titulo = '$title',
                Texto = '$text',
                Imagem = '$image'
                WHERE ID = $news_id";
        echo $sql;
        $conn->query($sql);
        $conn->close();
    }

?>