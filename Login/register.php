<?php
    
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $pwd = $_POST["password"];
        $idno = $_POST["idno"];

        try{
            require_once "dbh.inc.php";
            require_once "register.model.php";
            require_once "register.cont.php";

            $errors = [];

            if (emptyInput($username, $email, $pwd, $idno)){
                $errors["emptyInput"] = "Fill in all the fields";
            }
            if (existingUser($pdo, $username)){
                $errors["existingUser"] = "That username is already taken";
            }
            if (existingEmail($pdo, $email)){
                $errors["existingEmail"] = "That email is already in use";
            }
            
            session_start();

            if ($errors){
                $_SESSION["errors_register"] = $errors;
                header("Location: index.php");
                exit();
            }

            insertUser($pdo, $username, $email, $pwd, $idno);
            echo "<script>
                    window.location.href = 'indexLog.php';
                  </script>";
            $_SESSION["reg"] = "Successfully registered";

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
