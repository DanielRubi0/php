<?php

function isValidResponse($resp){
    if (strtolower($resp) != "si" && strtolower($resp) != "no") {
        return false;
    }
    return true;
}

function isPositiveResponse($resp){
    if (strtolower($resp) == "si") {
        return true;
    }

    return false;
}