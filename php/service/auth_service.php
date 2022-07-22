<?php
    
    function login($name, $email){
        include('../database/connection.inc.php');
        $sql = "SELECT ID FROM Usuarios WHERE Nome = '$name' AND Email = '$email';";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $conn->close();
        $id = $row['ID'];
        if(!$id) throw new Exception('Não foi possível realizar o login, nome e ou email estão incorretos!');
        return $id;
    }
        
    function authUser(){
        if(!$_GET['user']) {
            header('Location: ../login.php');
            die();
        }

        include('../../database/connection.inc.php');
        
        $id = $_GET['user'];
        $sql = "SELECT ID FROM Usuarios WHERE ID = $id;";
        $result = $conn->query($sql);
        $id = $result->fetch_assoc()['ID'];
        $conn->close();
        if(!$id) {
            header('Location: ../views/login.php');
        }
        return $id;
    }
?>