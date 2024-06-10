<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pname = $_POST["pname"];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM products WHERE product_name = :pname AND users_id = :userid;";
        $stmt = $pdo->prepare($query);
        $stmt->bindparam(":pname", $pname);
        $stmt->bindparam(":userid", $_SESSION["userId"]);
        $stmt->execute();

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
