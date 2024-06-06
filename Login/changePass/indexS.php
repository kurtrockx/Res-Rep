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

    <script>
         document.addEventListener('DOMContentLoaded', function() {
            // Get the notification element
            var notification = document.getElementById('sent');

            // Show the notification
            notification.classList.remove('hidden');

            // Hide the notification after 3 seconds
            setTimeout(function() {
               notification.classList.add('hidden');
            }, 3000); // 3000 milliseconds = 3 seconds
         });
    </script>

    <?php if (!empty($_SESSION["sent"])) : ?>
        <div id="sent" class="hidden"><?php echo $_SESSION["sent"]; ?></div>
    <?php endif;  unset($_SESSION["sent"]);?>


    <div class="input">
        <form action="send.php" method="post">
            <h1 style="font-size: 80px;">Change Password</h1>

            <h5>Enter email</h5>
            <input type="email" name="email" placeholder="We will send a link to this email" id="password">
            <br>
            <button name="send" style="margin-left: 150px; margin-bottom: 10px;" type="submit">Send</button>
        </form>
            <a href="../indexLog.php" style="color: white; position:relative; bottom:35px; left: 270px;">Login here!</a>

            </div>
            </div>

</body>
</html>