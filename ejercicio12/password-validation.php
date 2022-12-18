<?php

function isValidPassword($pwd,$pwd2){
    // contenga una o mas mayusculas
    if(!containUpper($pwd)){
        echo "Almenos una mayuscula\n";
        return false;
    }
    
    if($pwd !== $pwd2){
        echo "Las contraseñas no coinciden, intentalo otra vez\n";
        return false;
    }
    // min 4 caracters
    if(strlen($pwd)<3){
        echo "Min 4 caracteres\n";
        return false;
    }
    // max 10 caracteres
    if(strlen($pwd) > 16){
        echo "Max 10 caracteres\n";
        return false;
    }
    
    // contenga uno o mas caracteres especiales en una lista pretederminada [@,#,_,-]
    if(!containSpecial($pwd)){
        echo "Almenos una caracter especial entre [@,#,_,-,!]\n";
        return false;
    }

    return true;
}

function containSpecial($pwd){
    $specials = ["@","#","_","-","!"];

    for ($i=0; $i < strlen($pwd); $i++) { 
        if(in_array($pwd[$i],$specials)){
            return true;
        }
    }

    return false;
}

function containUpper($pwd){
    for ($i=0; $i < strlen($pwd); $i++) { 
        if(ctype_upper($pwd[$i])){
            return true;
        }
    }
    return false;
}