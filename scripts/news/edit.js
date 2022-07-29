function edit(){
    let current_image = document.getElementById("current_image").value
    let file_obj = document.getElementById('image').files[0]
    if(file_obj != undefined) {
        delete_image(current_image)
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../service/image_importer.php", true);
        xhttp.onload = function(event) {
            if (xhttp.status == 200) {
                let body = getBodyWithId(this.responseText)
                submmitEvent(body)
            } else {
                console.log("Erro ao importar uma imagem!")
            }
        }
        xhttp.send(form_data);
    } else {
        let body = getBodyWithId(current_image)
        submmitEvent(body)
    }
}

function getBodyWithId(image){
    let body = JSON.parse(getBodyForm(image))
    body['news_id'] = document.getElementById("id").value
    return JSON.stringify(body)
}

function submmitEvent(body){
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../../controller/news_controller.php", true);
    xhttp.setRequestHeader("Accept", "application/json");
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onload = function(event) {
        if (xhttp.status == 200) {
            window.location = `./show.php?user=${JSON.parse(body).user_id}&news_id=${JSON.parse(body).news_id}`
        } else {
            console.error("Erro ao editar um evento!!")        
        }
    }
    xhttp.send(body);
}

function delete_image(filepath){
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", `../../service/image_importer.php?action=delete&filepath=${filepath}`, true);
    xhttp.onload = function(event){
        if(xhttp.status == 200){
            console.log(`${filepath} apagado com sucesso!`)
        } else {
            console.error(`Erro ao apagar ${filepath}`)
        }
    }
    xhttp.send()
}

function getBodyForm(filepath){
    return JSON.stringify({
        action : document.getElementById("action").value,
        title : document.getElementById("title").value,
        text : document.getElementById("text").value,
        user_id: document.getElementById("user_id").value,
        image : filepath
    })
}