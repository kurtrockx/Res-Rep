<?php
    
    session_start();

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $comments = $_POST["comments"];

        if(!empty($comments)){

        try{
            require_once "dbh.inc.php";

                $query = "INSERT INTO comments (users_email, comments) VALUES (:email, :com);";
            
                $stmt = $pdo->prepare($query);
                $stmt -> bindparam(":email", $_SESSION["email"]);
                $stmt -> bindparam(":com", $comments);
                $stmt -> execute();
            
                header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        catch(PDOException $e){
            die("Query Failed: " . $e->getMessage());
        }
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    else{
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }