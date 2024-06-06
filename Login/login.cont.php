<?php

declare(strict_types = 1);

function emptyInput(string $username, string $pwd){
    if(empty($username) ||empty($pwd)){
        return True;
    }
    else{
        return False;
    }
}

function noUser(bool|array $result){
    if(!$result){
        return True;
    }
    else{
        return False;
    }
}

function wrongPass(string $pwd, string $hashedPWD){
    if(!password_verify($pwd, $hashedPWD)){
        return True;
    }
    else{
        return False;
    }
}