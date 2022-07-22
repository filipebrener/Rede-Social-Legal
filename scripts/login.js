function login() {
    var form_data = get_login_body()
    let xhttp = new XMLHttpRequest()
    xhttp.open('POST', '../controller/auth_controller.php', true);
    xhttp.onload = (event) => {
        if(xhttp.status = 200){
            window.location = `./index.php?user=${xhttp.responseText}`
        } else {
            console.error("Erro ao realisar login: ", xhttp.responseText)
        }
    }
    xhttp.send(form_data)
}

function get_login_body(){
    var form_data = new FormData()
    form_data.append("name", document.getElementById("name").value)
    form_data.append("email", document.getElementById("email").value)
    form_data.append("action", "login")
    return form_data
}
