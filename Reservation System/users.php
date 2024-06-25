<?php
session_start();
require_once "includes/dbh.inc.php";
require_once "includes/cart.model.php";
idNumber($pdo, $_SESSION["userId"]);
orderlist($pdo, $_SESSION["userId"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation System</title>
    <script src="https://kit.fontawesome.com/0c3ddd4ac2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/navbot.css">
    <link rel="stylesheet" href="css/users.css">
</head>

<body>

    <div class="nav-cont">
        <nav class="navbar">
            <div class="navimg">
                <a href="">
                    <img src="images/logo.png" alt="cdmlogo">
                    <h1>CDM RESERVATION SYSTEM</h1>
                </a>
            </div>
            <div class="navlinks">
                <a href="index.php" id="link1"><i class="fa-solid fa-house"></i></a>
                <div class="ddown">
                    <a href="menu.php" id="link2"><i class="fa-solid fa-store"></i></a>
                    <div class="ddown-content">
                        <a href="menu.php#breakfast" id="l1">Breakfast <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                        <a href="menu.php#lunch" id="l2">Lunch <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                        <a href="menu.php#snacks" id="l3">Snacks <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                        <a href="menu.php#drinks" id="l4">Drinks <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                    </div>
                </div>
                <a href="cart.php" id="link3"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="users.php" id="link4"><i class="fa-regular fa-user"></i></a>
                <a href="menu.php" id="link5"><i class="fa-solid fa-bars"></i></a>
            </div>
        </nav>
    </div>

    <main class="main-content">
        <div class="user">
            <div class="logo">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="deets">
                <div class="ails">Username: <p><?php echo "{$_SESSION['username']}"; ?> </p>
                </div>
                <div class="ails">Email: <p><?php echo "{$_SESSION['email']}"; ?> </p>
                </div>
                <div class="ails">ID Number: <p><?php echo "{$_SESSION["idNumber"]}"; ?> </p>
                </div>
                <div class="ails">
                    <form action='includes/comments.php' method='post'>
                        <label for='message'>Send us a message:</label>
                        <button type='submit'>SEND</button>
                        <br>
                        <textarea id='message' name='comments'></textarea><br>
                    </form>
                </div>
            </div>
        </div>

        <div class="receipt-container">

            <h1>ORDER LIST</h1>
            <hr>
            <?php
            if (empty($_SESSION["orderlist"])) {
                echo "<div class='empty'>";
                echo "No orders listed yet :)";
                echo "</div>";
            } else {
                echo "<div class='grid'>";
                foreach ($_SESSION["orderlist"] as $row) {
                    echo "<i id='gridbox'>";
                    echo "<div class='ono'>";
                    echo "<p>Order Number: {$row['order_number']}</p>";
                    echo "</div>";
                    echo "<div class='prods'>";
                    echo "<p style='margin: 0px';>Order Details</p>";
                    echo "<p  style='margin: 0px auto 10px';>refno: {$row['refno']}</p>";
                    echo "{$row['order_details']}";
                    echo "</div>";
                    echo "<div class='prodsprice'>";
                    echo "Price: P{$row['total_Price']}.00";
                    echo "</div>";
                    echo "<div class='status'>";
                    echo "{$row['status']}";
                    echo "</div>";
                    echo "</i>";
                }
                echo "</div >";
            }

            ?>

        </div>

        </div>
    </main>

    <footer>
        <div class="details">
            <div class="dets">
                <div class="det" id="det1">
                    <h3 id="res">About CDM</h3>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>
                    <a href="">Terms and Conditions</a>
                    <a href="">Privacy Notice</a>
                </div>
                <div class="det" id="det2">
                    <h3>FOLLOW US</h3>
                    <div class="follow">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.twitter.com/"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="det" id="det3"></div>
            </div>
        </div>
        </div>
    </footer>


</body>


</html>