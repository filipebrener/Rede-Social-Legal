<?php
    
    function createUser($name, $email){
        include('../database/connection.inc.php');
        if(!isValidEmail($email)) throw new Exception("Email: [$email] não está disponível, tente outro!");
        $sql = "INSERT INTO Usuarios (Nome,Email,Pontos) values ('$name','$email',0);";
        $result = $conn->query($sql);
        $id = $conn->insert_id;
        $conn->close();
        return $id;
    }
        
    function isValidEmail($email){
        include('../database/connection.inc.php');
        $total = $conn->query("SELECT COUNT(*) as total FROM Usuarios WHERE Email = '$email'")->fetch_assoc()['total'];
        $conn->close();
        return $total == 0; 
    }

?>