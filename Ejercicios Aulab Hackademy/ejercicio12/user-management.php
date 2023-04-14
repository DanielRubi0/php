<?php
include("password-validation.php");

function newUser()
{
    // recuperado la info
    $userInfo = getUserInfo();

    // mapeado la info
    $user = mapUserInfo($userInfo);

    // devolvemos
    return $user;
}
// authenticamos

function printUsers($users)
{
    echo "Listado usuarios\n";
    foreach ($users as $key => $user) {
        echo $key.PHP_EOL;
        echo $user['name'].PHP_EOL;
        echo $user['email'].PHP_EOL;
    }
}

function getUserInfo(){
     // nombre
 $name = readline("Insert Name:");
 // correo
 $email = readline("Insert Email:");

 // validar la password
 do {
     // password
     $pwd = readline("Insert Password:");

     // confirm
     $pwd2 = readline("Confirm Password:");
     
 } while (!isValidPassword($pwd,$pwd2));

 return [$name,$email,$pwd];
}

function mapUserInfo($userInfo){
   return [
        "name" => $userInfo[0],
        "email" => $userInfo[1],
        "pwd" => $userInfo[2],
    ];
}