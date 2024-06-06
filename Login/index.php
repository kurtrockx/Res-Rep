<?php
    session_start();
    require_once "register.view.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <div class="input">
        <form action="register.php" method="post">
            <h1>Register!</h1>

            <h5>Username</h5>
            <input type="text" name="username" placeholder="Enter username" minlength="8" maxlength="20" id="inputField" onkeypress="disallowSpaces(event)">
            <h5>Email</h5>
            <input type="email" name="email" placeholder="Enter email address">
            <h5>ID Number</h5>
            <input type="text" name="idno" pattern="^[0-9]{2}-[0-9]{5}$|^[0-9]{7}$" placeholder="XX-XXXXX">
            <h5>Password</h5>
            <input type="password" name="password" placeholder="Enter password" id="password">
            <div class="toggle-btn" onclick="togglePassword()">Show</div>
            
            <br>
            <div class="buttonCon">
                <button type="submit">Register</button>
        </form>
            <a href="indexLog.php" id="logbutt" style="color: white; position:relative; top: -5px; left: 5px; width: 100px">Already have an account?</a>
            </div>

            <p id="error"><?php checkRegistrationErrors(); ?></p>

    </div>

    <script>
    function disallowSpaces(event) {
        if (event.which === 32) { // Check if the pressed key is space (ASCII code 32)
            event.preventDefault(); // Prevent the default action (typing space)
        }
    }
</script>


    <script>


  function togglePassword() {
    var passwordField = document.getElementById("password");
    var toggleBtn = document.querySelector(".toggle-btn");

    if (passwordField.type === "password") {
      passwordField.type = "text";
      toggleBtn.textContent = "Hide";
    } else {
      passwordField.type = "password";
      toggleBtn.textContent = "Show";
    }
  }
    </script>


</body>
</html>