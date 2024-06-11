<?php
session_start();
require_once "includes/dbh.inc.php";
require "includes/cart.model.php";
listItems($pdo, $_SESSION["userId"]);
total_Price($pdo, $_SESSION["userId"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation System</title>
    <script src="https://kit.fontawesome.com/0c3ddd4ac2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/navbot.css">
    <link rel="stylesheet" href="css/cart.css">
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
        <div class="cart">
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>IMAGE</th>
                            <th>ITEM NAME</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($_SESSION["result"] as $row) {

                            $_SESSION["origPrice"] = intval($row["price"]) / $row["quantity"];
                            echo "<tr>";
                            echo "<td id ='img'> <img src='" . $row['images'] . "'> </td>";
                            echo "<td id = 'pname'>" . $row['product_name'] . "</td>";
                            echo "<td id='quantity'><p>" . $row['quantity'] . "</p>";


                            echo '<div class="form-container">';
                            echo '<form action="includes/updateQuantity.php" method="post">';
                            echo '<input type="hidden" name="updatePrice" value="' . $_SESSION['origPrice'] . '">';
                            echo '<input type="number" name="quantity" min="1" max="99" value="' . $row['quantity'] . '">';
                            echo '<button name="product_name" value="' . $row['product_name'] . '"><i class="fa-solid fa-rotate-right"></i></button>';
                            echo '</form>';

                            echo '<form action="includes/delete.php" method="post">';
                            echo '<button name="pname" value="' . $row['product_name'] . '"><i class="fa-solid fa-x"></i></button>';
                            echo '</form>';
                            echo '</div>';

                            echo "</td>";
                            echo "<td id = 'price'>" . $row['price'] . "</td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="tPrice">
            <div id="tPrice">Total Price is: <p><?php echo "{$_SESSION["total_Price"]}"; ?>.00</p>
            </div>
            <img src="images/qr.png" alt="">
            <form action="includes/checkout/checkout.php" method="post">
                <p>Last 6 digits of your GCASH reference number:
                    <input type="text" pattern=".{6,6}" required name="refno" style="width: 55px; font-family:'Times New Roman', Times, serif; font-size: 15px;">
                <h6>(Not your Contact Number)</h6>
                </p>
                <button type="submit" id="checkout">CHECKOUT</button>
            </form>
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