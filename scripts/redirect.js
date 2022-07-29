// Recebe o nome de uma view (sem a extensão), e redireciona passando o id do usuario atual do sistema.
function redirect_to(view){
    let user_id = document.getElementById("current_user").value
    window.location = `./${view}.php`
}