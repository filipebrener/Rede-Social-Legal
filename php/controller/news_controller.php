<?php

    include('../service/news_service.php');  

    try {
        
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE); //convert JSON into array

        $action = $input['action'];
        $title = $input['title'];
        $text = $input['text'];
        $image = $input['image'];
        switch ($action) {
            case 'create':
                $user_id = $input['user_id'];
                $id = create_news($title, $text, $image, $user_id);
                if($id){
                    echo $id;
                }
                break;
            case 'edit':
                echo "entrei aqui para editar";
                $news_id = $input['id'];
                edit_news($title, $text, $image, $news_id)
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