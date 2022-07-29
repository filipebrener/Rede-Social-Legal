<?php

    include('../service/image_importer_service.php');  
    include('../service/news_service.php');  

    try {
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE); //convert JSON into array
        $action = $_POST['action'];
        switch ($action) {
            case 'create':
                $title = $_POST['title'];
                $text = $_POST['text'];
                $user_id = $_POST['user_id'];
                print_r($_FILES);
                $image = save_image($_FILES);
                $id = save_news($title, $text, $image, $user_id);
                if($id){
                    header('Location: ../views/news/show.php?user='.$id);
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