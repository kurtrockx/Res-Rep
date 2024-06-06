<?php

declare(strict_types = 1);
function getUser(object $pdo, string $username){
    
    $query = "SELECT name FROM users WHERE name = :username;";

    $stmt = $pdo->prepare($query);
    $stmt -> bindparam(":username", $username);
    $stmt -> execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function getEmail(object $pdo, string $email){
    
    $query = "SELECT email FROM users WHERE email = :email;";

    $stmt = $pdo->prepare($query);
    $stmt -> bindparam(":email", $email);
    $stmt -> execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function insertUser(object $pdo, string $username, string $email, string $pwd, string $idno){
    $query = "INSERT INTO users (email, name, pass, id_Number) VALUES (:email, :name, :pass, :idno);";
            
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    
    $hashed = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindparam(":email", $email);
    $stmt->bindparam(":name", $username);
    $stmt->bindparam(":pass", $hashed);
    $stmt->bindparam(":idno", $idno);

    $stmt->execute();

    $pdo = null;
    $stmt = null;
}