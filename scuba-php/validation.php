<?php

function validate_registers($data) 
{
    // Var para armazenar os erros.
    $errors = [];

    // Valida se a senha é menor de 10;
    if(strlen($data['password']) < 4){
        $errors['password'] = 'A senha deve ter 4 caracteres ou mais';
    }
    // Valida se o password e password-confirm estão iguais;
    if($data['password'] !== $data['password-confirm']){
        $errors['password-confirm'] = 'A senha e a confirmação estão diferentes';
    }
    // Se a retornar true(crud_restore), insere o erro dentro do array @errors;
    if(crud_restore($data['email'])){
        $errors['email'] = 'Email já cadastrado no sistema, informe outro!';
    }

    return $errors;
}

?>
