<?php
session_start();
        
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];

    try{
        require '../dbh.inc.php';

    if ($pass1 == $pass2) {
        $query = "UPDATE users SET pass = :pass WHERE email = :email;";

        $options = [
            'cost' => 12
        ];
        
        $hashed = password_hash($pass1, PASSWORD_BCRYPT, $options);
    

        $stmt = $pdo->prepare($query);
        $stmt -> bindparam(":pass", $hashed);
        $stmt -> bindparam(":email", $_SESSION["cEmail"]);
        $stmt -> execute();

        header("Location: ../indexLog.php");

        $_SESSION["changed"] = "Successfully Changed Password!";
    }

        $pdo = null;
        $stmt = null;
        exit();

    }
    catch(PDOException $e){
        exit("Query Failed: " . $e->getMessage());
    }
}
else{
    header("Location:../index.php");
}









