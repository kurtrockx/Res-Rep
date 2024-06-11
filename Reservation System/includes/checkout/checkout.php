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


        header("Location: " . $_SERVER['HTTP_REFERER']);
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: " . $_SERVER['HTTP_REFERER']);
}