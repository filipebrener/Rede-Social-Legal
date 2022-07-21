let bool_message_map = new Map();
bool_message_map["true"] = "E-mail válido"
bool_message_map["false"] = "E-mail não está disponível, tente outro!"

let bool_color_map = new Map();
bool_color_map["true"] = "rgb(26, 153, 26)"
bool_color_map["false"] = "rgb(153, 26, 26)"

let bool_function_map = new Map()
bool_function_map["true"] = () => {
        document.getElementById("submit_button").disabled = false
    }
bool_function_map["false"] = () => {
        document.getElementById("submit_button").disabled = true
    }

function verify_email(email){
    let element = document.getElementById("email_input_message")
    element.innerHTML = ""
    if(!is_valid_sintax(email)){
        element.style.color = bool_color_map["false"]
        element.innerHTML = "Formato do e-mail está inválido!"
        bool_function_map["false"]()
        return
    }
    let xhttp = new XMLHttpRequest()
    xhttp.open('POST', '../controller/user_controller.php', true);
    xhttp.onload = (event) => {
        if(xhttp.status == 200){
            element.style.color = bool_color_map[xhttp.responseText]
            element.innerHTML = bool_message_map[xhttp.responseText]
            bool_function_map[xhttp.responseText]()
        } else {
            console.error("Erro ao validar E-mail.", xhttp.responseText)
            bool_function_map["false"]()
        }
    }
    var form_data = new FormData();
    form_data.append("action", "verifyEmail")
    form_data.append("email", email)
    xhttp.send(form_data)
}

function is_valid_sintax(email){
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return filter.test(email)
}