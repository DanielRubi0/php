<?php

function isValidResponse($resp){
    if (strtolower($resp) != "yes" && strtolower($resp) != "no") {
        return false;
    }
    return true;
}

function isPositiveResponse($resp){
    if (strtolower($resp) == "yes") {
        return true;
    }

    return false;
}