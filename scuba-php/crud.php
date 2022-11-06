<?php



function crud_create($user)
{
    $data = json_decode(file_get_contents(DATA_LOCATION), true);
    $data[] = $user;
    file_put_contents(DATA_LOCATION, json_encode($data));
    
}

