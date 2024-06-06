<?php

declare(strict_types = 1);

function emptyInput(string $username, string $email, string $pwd, string $idno){
    if(empty($username) ||empty($email) || empty($pwd) || empty($idno)){
        return True;
    }
    else{
        return False;
    }
}
function existingUser(object $pdo, string $username){
    if(getUser($pdo, $username)){
        return True;
    }
    else{
        return False;
    }
}
function existingEmail(object $pdo, string $email){
    if(getEmail($pdo, $email)){
        return True;
    }
    else{
        return False;
    }
}