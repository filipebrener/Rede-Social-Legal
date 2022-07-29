function create() {
    let file_obj = document.getElementById('image').files[0]
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../service/image_importer.php", true);
        xhttp.onload = function(event) {
            if (xhttp.status == 200) {
                let body = getBodyForm(this.responseText)
                submmitEvent(body)
            } else {
                console.log("Erro ao importar uma imagem!")
            }
        }
        xhttp.send(form_data);
    }
}

function getBodyForm(filepath){
    return JSON.stringify({
        user_id : document.getElementById("user_id").value,
        action : document.getElementById("action").value,
        title : document.getElementById("title").value,
        text : document.getElementById("text").value,
        image : filepath
    })
}

function submmitEvent(body){
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../../controller/news_controller.php", true);
    xhttp.setRequestHeader("Accept", "application/json");
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onload = function(event) {
            if (xhttp.status == 200) {
            window.location = `./show.php?user=${body.user_id}`
        } else {
            console.error("Erro ao criar um evento!!")            
            delete_image(body.image)
        }
    }
    xhttp.send(body);
}

function delete_image(filepath){
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", `../service/image_importer.php?action=delete&filepath=${filepath}`, true);
    xhttp.onload = function(event){
        if(xhttp.status == 200){
            console.log(`${filepath} apagado com sucesso!`)
        } else {
            console.log(`Erro ao apagar ${filepath}`)
        }
    }
    xhttp.send()
}