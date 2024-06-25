<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $refno = $_POST["refno"];

    try {
        require_once "../dbh.inc.php";
        require_once "checkout.model.php";
        require_once "../cart.model.php";

        getDetails($pdo, $_SESSION["userId"]);
        total_Price($pdo, $_SESSION["userId"]);
        moveItems($pdo, $_SESSION["userId"], $refno);
        deleteProducts($pdo, $_SESSION["userId"]);

        if (empty($_SESSION["result"])) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            $_SESSION["eCart"] = "You don't have any items in your cart!";
        } else {
            header("Location: ../../users.php");
        }
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
