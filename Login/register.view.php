<?php

function checkRegistrationErrors(){
    if (isset($_SESSION["errors_register"])){
        $errors = $_SESSION["errors_register"];

        foreach($errors as $errordisplay){
            echo $errordisplay;
            echo "<br>";
        }

        unset($_SESSION["errors_register"]);
    }
    elseif (isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo "<h5>Registered Successfully</h5>";
    }
}