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

