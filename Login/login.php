<?php
    
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST["username"];
        $pwd = $_POST["password"];

        try{
            require_once 'dbh.inc.php';
            require_once 'login.model.php';
            require_once 'login.cont.php';
            
            $errors = [];

            if (emptyInput($username, $pwd)){
                $errors["emptyInput"] = "Fill in all the fields";
            }
            $result = getUser($pdo, $username);
            if (noUser($result) && !emptyInput($username, $pwd)){
                $errors["NoUser"] = "Wrong Credentials";
            }
            if (!noUser($result) && wrongPass($pwd, $result["pass"])){
                $errors["NoMatch"] = "Wrong Credentials";
            }
            
            session_start();

            if ($errors){
                $_SESSION["errors_login"] = $errors;
                header("Location: indexLog.php");
                exit();
            }

            $_SESSION["userId"] = $result["id"];
            $_SESSION["username"] = $result["name"];
            $_SESSION["email"] = $result["email"];

            $_SESSION["loggedin"] = "Successfully Logged In!";

            echo "<script>
                    window.location.href = '../Reservation System/index.php';
                  </script>";
            exit();

        } catch (PDOException $e){
            header("Location: indexLog.php");
            exit();
        }
    }
