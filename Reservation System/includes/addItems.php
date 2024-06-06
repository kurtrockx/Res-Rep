<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["userId"])) {
    $quantity = $_POST["quantity"];
    $products = $_POST["products"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    try {
        require_once "dbh.inc.php";
        require "cart.model.php";

        listItems($pdo, $_SESSION["userId"]);

        $price = intval($price) * intval($quantity);

        //EXISTING ENTRY OF THE PRODUCT CHOSEN//EXISTING ENTRY OF THE PRODUCT CHOSEN//EXISTING ENTRY OF THE PRODUCT CHOSEN//EXISTING ENTRY OF THE PRODUCT CHOSEN//
        $query = "SELECT * FROM products WHERE product_name = :products AND users_id = :users_id";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":products", $products);
        $stmt->bindParam(":users_id", $_SESSION["userId"]);
        $stmt->execute();
        $existingProduct = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingProduct) {
            $quantity += $existingProduct['quantity'];
            $query = "UPDATE products SET quantity = :quantity, price = :price WHERE product_name = :products AND users_id = :users_id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":quantity", $quantity);
            $stmt->bindParam(":price", $price);
        } else {
            $query = "INSERT INTO products (product_name, quantity, price, images, users_id) VALUES (:products, :quantity, :price, :image, :users_id)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":quantity", $quantity);
            $stmt->bindParam(":price", $price);
            $stmt->bindParam(":image", $image);
        }


        $stmt->bindParam(":products", $products);
        $stmt->bindParam(":users_id", $_SESSION["userId"]);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: " . $_SERVER['HTTP_REFERER']);
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
