<?php

declare(strict_types = 1);

function getDetails(object $pdo, string $usersId)
{

    $query = "SELECT * FROM products WHERE users_id = :userid;";

    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":userid", $usersId);
    $stmt->execute();

    $_SESSION["prodDetails"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function moveItems(object $pdo, string $userId, string $refno){

    if(!empty($_SESSION["prodDetails"])){
        $query = "INSERT INTO checkout (users_id, order_details , order_number, status, total_Price, refno) VALUES (:userId, :order_details, :ono, :status, :tprice, :refno);";

        $stmt = $pdo->prepare($query);
    
        $details = [];
    
        foreach ($_SESSION["prodDetails"] as $rows) {
            $details[] = $rows["product_name"] . ' |' . $rows["quantity"] . '| P' . $rows["price"] . '.00';
        }
        $imploded_details = implode("\n", $details);
    
        $ono = rand(100, 999);
        $status = "pending";
    
    
        $stmt->bindparam(":userId", $userId);
        $stmt->bindparam(":order_details", $imploded_details);
        $stmt->bindparam(":ono", $ono);
        $stmt->bindparam(":status", $status);
        $stmt->bindparam(":tprice", $_SESSION["total_Price"]);
        $stmt->bindparam(":refno", $refno);
    
        $stmt->execute();
    
        $pdo = null;
        $stmt = null;
    
    }
    
}

function deleteProducts(object $pdo, string $usersId){
    
    $query = "DELETE FROM products WHERE users_id = :userid;";

    $stmt = $pdo->prepare($query);
    $stmt -> bindparam(":userid", $usersId);
    $stmt -> execute();
}
