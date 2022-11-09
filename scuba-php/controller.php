<?php

function do_register()
{
    /* ?? = se $_POST['person'] estiver preenchido 
     * retorna $_POST['person'], se não retorna false
     */
    if ($_POST['person']??false) {
        register_post();
    } else {
        register_get();
    }
}

function register_get()
{
    render_view('register');
}

function register_post()
{
    $validation_errors = validate_registers($_POST['person']);

    if (count($validation_errors) == 0) {
        // remove o ['person']['password-confirm'] da váriavel $_POST.
        unset($_POST['person']['password-confirm']);
        // Cria o usuário
        crud_create($_POST['person']);
        // Redireciona para a página de registro
        header("Location: /?page=login&from=register");
    } else {
        $message = [
            'validation_errors' => $validation_errors
        ];

        render_view('register', $message);
    }
}

function do_login()
{
    $messages = [];
    // Se o usuário estiver vindo da página de criação de contas, avisa que precisa confirmar o email.
    switch ($_GET['from']) {
        case 'register':
            $messages['sucess'] = "Você ainda precisa confirmar o email!";
            break;
    }
    render_view('login', $messages);
}

function do_not_found()
{
    http_response_code(404);
    render_view('not_found');
}
