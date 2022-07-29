<?php

    $action = $_GET['action'];

    if($action == 'delete'){
        $filepath = $_GET['filepath'];
        unlink($filepath);
        die;
    }

    $arr_file_types = ['image/png', 'image/jpg', 'image/jpeg'];
        
    if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
        http_response_code(500);
        echo "Imagem não enviada ou tipo da imagem não aceito";
        return;
    }

    if (!file_exists('../uploads')) {
        if(!mkdir('../uploads', 0700)){
            http_response_code(500);
            echo "Não foi possível criar a pasta uploads";
            return;
        };
    }

    $filename = time().'_'.$_FILES['file']['name'];

    move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/'.$filename);

    echo '../uploads/'.$filename;
    die;
?>