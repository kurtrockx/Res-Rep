<?php

declare(strict_types = 1);
function getUser(object $pdo, string $username){
    
    $query = "SELECT * FROM users WHERE name = :username;";

    $stmt = $pdo->prepare($query);
    $stmt -> bindparam(":username", $username);
    $stmt -> execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}