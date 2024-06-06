<?php

function checkLoginErrors(){
    if (isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        foreach($errors as $errordisplay){
            echo $errordisplay;
            echo "<br>";
        }

        unset($_SESSION["errors_login"]);
    }

}