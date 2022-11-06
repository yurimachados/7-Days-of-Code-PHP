<?php


function do_register()
{
    /* ?? = se $_POST['person'] estiver preenchido 
     * retorna $_POST['person'], se não retorna false
     */
    if($_POST['person']??false)
    {
        // remove o ['person']['password-confirm'] da váriavel $_POST.
        unset($_POST['person']['password-confirm']);
        // Cria o usuário com o métido abaixo.
        crud_create($_POST['person']);
        // Redireciona o usuário para a página de login;
        header("Location: /?page/login");
    } else {
        // Caso a $_POST['person'] não esteja preenchida corretamente, recarrega a página.
        render_view('register');
    }
}

function do_login()
{
    render_view('login');
}

function do_not_found()
{
    http_response_code(404);
    render_view('not_found');
}