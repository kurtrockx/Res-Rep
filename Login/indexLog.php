<?php
    session_start();
    require_once "login.view.php";
    unset($_SESSION["cEmail"]);
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

        <script>
         document.addEventListener('DOMContentLoaded', function() {
            // Get the notification element
            var notification = document.getElementById('reg');

            // Show the notification
            notification.classList.remove('hidden');

            // Hide the notification after 3 seconds
            setTimeout(function() {
               notification.classList.add('hidden');
            }, 3000); // 3000 milliseconds = 3 seconds
         });
      </script>

      <?php if (!empty($_SESSION["reg"])) : ?>
         <div id="reg" class="hidden"><?php echo $_SESSION["reg"]; ?></div>
      <?php endif;  unset($_SESSION["reg"]);?>

      <script>
         document.addEventListener('DOMContentLoaded', function() {
            // Get the notification element
            var notification = document.getElementById('changed');

            // Show the notification
            notification.classList.remove('hidden');

            // Hide the notification after 3 seconds
            setTimeout(function() {
               notification.classList.add('hidden');
            }, 3000); // 3000 milliseconds = 3 seconds
         });
    </script>

      <?php if (!empty($_SESSION["changed"])) : ?>
         <div id="changed" class="hidden"><?php echo $_SESSION["changed"]; ?></div>
      <?php endif;  unset($_SESSION["changed"]);?>




    <div class="input">
        <form action="login.php" method="post">
            <h1>Login!</h1>

            <h5>Username</h5>
            <input type="text" name="username" placeholder="Enter username">
            <h5>Password</h5>
            <input type="password" name="password" placeholder="Enter password" id="password">
            <div class="toggle-btn" onclick="togglePassword()">Show</div>
            <br>
            <div class="buttonCon">
                <button type="submit">Login</button>
            </form>
            
            <a href="index.php" id="logbutt" style="color: white; position:relative; top: 5px;">Register here!</a>
            <a href="changePass/indexS.php" id="changebutt" style="color: white; position:absolute; top: 390px;">Forgot password</a>
            </div>
            <p id="error"><?php checkLoginErrors(); ?></p>
            </div>

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