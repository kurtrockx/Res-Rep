<?php

declare(strict_types=1);
function listItems(object $pdo, string $id)
{

    $query = "SELECT * FROM products WHERE users_id = :id;";

    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":id", $id);
    $stmt->execute();

    $_SESSION["result"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $_SESSION["result"];
}
