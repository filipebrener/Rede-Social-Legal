<?php

    include('../service/auth_service.php');

    try{
        $action = $_POST['action'];
        
        if($action == 'login') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $id = login($name,$email);
            if($id){
                header('Location: ../views/index.php?user='.$id);
            }  
        }

    } catch (Exception $e) {
        http_response_code(500);
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }

?>