<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>


    <div class="input">
        <form action="change.php" method="post">
            <h1>Login!</h1>

            <h5>Password</h5>
                <input type="password" name="pass1" placeholder="Enter password" id="password1">
                <input type="password" name="pass2" placeholder="Re-enter password" id="password2">
            <div class="toggle-btn" onclick="togglePassword()">Show</div>
                <button style="padding: 5px; width:140px; margin-left: 145px;">Change Password</button>
            </div>
            <a href="../indexLog.php" id="logbutt" style="position:relative; top:375px; left: 1220px; width: 90px; display:inline-block; color:white;">Login?</a>

<script>
    function togglePassword() {
        var passwordField1 = document.getElementById("password1");
        var passwordField2 = document.getElementById("password2");
        var toggleBtn = document.querySelector(".toggle-btn");

        if (passwordField1.type === "password") {
            passwordField1.type = "text";
            passwordField2.type = "text";
            toggleBtn.textContent = "Hide";
        } else {
            passwordField1.type = "password";
            passwordField2.type = "password";
            toggleBtn.textContent = "Show";
        }
    }
</script>

</body>
</html>