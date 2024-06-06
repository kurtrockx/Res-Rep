<?php

session_start();
    
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $quantity = $_POST["quantity"];
        $origPrice = $_POST[$_SESSION['origPrice']];
        $pname = $_POST["product_name"];
        
        $upPrice = intval($_SESSION['origPrice']) * intval($quantity);

        try{
            require_once "dbh.inc.php";
            
            $query = "UPDATE products SET quantity = :quantity, price = :upPrice  WHERE product_name = :product_name; AND users_id = :userid";
            
            $stmt = $pdo->prepare($query);
            
            $stmt->bindParam(":quantity", $quantity);
            $stmt->bindParam(":upPrice", $upPrice);
            $stmt->bindParam(":product_name", $pname);
            $stmt->bindParam(":userid", $_SESSION["userId"]);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

        header("Location: " . $_SERVER['HTTP_REFERER']);
            
        }
        catch(PDOException $e){
            die("Query Failed: " . $e->getMessage());
        }
    }
    else{
    header("Location: " . $_SERVER['HTTP_REFERER']);
    }
