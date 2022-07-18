<?php

    include('../service/user_service.php');  

    try {
        $action = $_POST['action'];
        switch ($action) {
            case 'create':
                $name = $_POST['name'];
                $email = $_POST['email'];
                $id = create_user($name,$email);
                echo "i id é: ".$id;
                if($id){
                    header('Location: ../views/index.php?user='.$id);
                }
                break;
            case null:
                throw new Exception("É necessário informar a action!");
                break;
            default:
                throw new Exception("Action: [$action] inválida!");
                break;
        }

    } catch (Exception $e) {
        http_response_code(500);
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
?>