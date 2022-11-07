<?php



function crud_create($user)
{   
    // Abre o arquivo de usuários
    $data = json_decode(file_get_contents(DATA_LOCATION), true);
    // Insere os dados que o usuário inseriu no formulário de criação na varriável;
    $data[] = $user;
    // Fecha o arquivo com os novos dados inseridos.
    file_put_contents(DATA_LOCATION, json_encode($data));
}

function crud_restore($email){
    
    $data = json_decode(file_get_contents(DATA_LOCATION));
    // Percorre registros dentro do arquivo procurando email igual ao recebido na variavel $email.
    foreach($data as $item){
        if($item->email === $email){
            return $item;
        }
    }
    // Se não encontra o email duplicado retorna false;
    return false;
}

