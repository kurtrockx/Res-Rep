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

function total_Price(object $pdo, string $usersId)
{

    $query = "SELECT price FROM products WHERE users_id = :userid;";

    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":userid", $usersId);
    $stmt->execute();

    $tprice = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $totalPrice = 0;

    foreach ($tprice as $rows) {
        $totalPrice += $rows["price"];
    }

    $_SESSION["total_Price"] = $totalPrice;
}
