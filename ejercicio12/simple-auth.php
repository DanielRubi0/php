<?php
include("user-management.php");
include("response-validation.php");

$users = [];

// ciclo para seguir creando nuevos usuarios o no
do {
    $users[] = newUser();
    do{
        $resp = readline("Do you want to add othe user? Si/No");
    }while(!isValidResponse($resp));
    // verificar la respuesta

} while (isPositiveResponse($resp));

printUsers($users);