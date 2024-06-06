<?php
   session_start();
   require_once("includes/dbh.inc.php");
   require("includes/products.model.php");
//    orno($pdo, $_SESSION["userId"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDM Canteen Reservation</title>
    <link rel="stylesheet" href="css/cart.css">
    <script src="https://kit.fontawesome.com/0c3ddd4ac2.js" crossorigin="anonymous"></script>
</head>

<header>
    <div class="navbar">
        <div class="title">
            <a href="index.php"><img src="Images/The_Colegio_de_Montalban_Seal.png" alt=""></a>
            <a href="index.php"> <p>CDM CANTEEN RESERVATION</p></a>
        </div>
        <a href="#" id="navSite" class="userdrop" style="margin-left: -2px;">Account <i class="fa-sharp fa-solid fa-user" style="color: #ffffff;"></i></i></a>
                <div class="dropdown-menu2">
                    <div class="dropdown-item2" >
                        <?php

                            $user = $_SESSION["userr"];
                            echo "<p>Username:</p>";
                            echo "<p style='font-weight: bold; font-size: 14px;'>{$user['name']}</p>";
                            echo "<p>ID Number:</p>";
                            echo "<p style='font-weight: bold;'>{$user['id_Number']}</p>";

                            echo "<form action='includes/comments.php' method='post'>";
                            echo "<label for='message' style='font-size: 15px'>Send us a message:</label>    <button type='submit' style='bottom: 2px; position: relative; border-radius: 5px; background-color: #093a1b; color: white; cursor: pointer;'>SEND</button>    <br>";
                            echo "<textarea id='message' name='comments' rows='8' cols='20'></textarea><br>";
                            echo "</form>";

                            echo "<form action='../login/logout.php'>";
                            echo "<button style='border-radius: 5px; margin-left: 50px; font-family: times new roman; font-size: 15px; background-color: #093a1b; color: white; cursor: pointer; width: 80px; height: 30px;'>Logout</button>";
                            echo "</form>";

                        ?>
                    </div>

                </div>
        <a href="index.php" id="navSite" class="drop"><i class="fa-solid fa-shop"></i></a> 

                <div class="dropdown-menu">
                    <div class="dropdown-item" id="breakfast"><a href="breakfast.php">BREAKFAST</a></div>
                    <div class="dropdown-item"><a href="lunch.php">LUNCH</a></div>
                    <div class="dropdown-item" id="lunch"><a href="snacks.php">SNACKS</a></div>
                </div>

        <a href="includes/cart.php" id="navSite"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="orderlist.php" id="navSite"><i class="fa-solid fa-clipboard-list"></i></a>

    </div>
</header>

    <div class="orno">
         <p style="margin: 0px;"><?php echo "{$_SESSION['orno']}"; ?></p>
    </div>

<body>

<h1 id="title">CART</h1>

    <div class="cont-container">
    <div class="container">
        
        <?php
        if(empty($_SESSION["result"])){
            echo "<div class='empty'>";
            echo"No items added to cart :)";
            echo "</div>";
        }
        else{



        echo "<div class='top'>";
            echo "<div class='tops'>";
            echo "<p>Products</p>";
            echo "</div>";
            echo "<div class='tops'>";
            echo "<p>Quantity</p>";
            echo "</div>";
            echo "<div class='tops'>";
            echo "<p>Price</p>";
            echo "</div>";
        echo "</div>";

            foreach($_SESSION["result"] as $row){
                echo "<div class='boxcont'>";

                    $_SESSION["origPrice"] = intval($row["price"]) / $row["quantity"];

                    echo "<div class='box' id='box1'>";
                        echo "<p>{$row["product_name"]}</p>";
                    echo "</div>";

                    echo "<div class='box' id='box2'>";
                    echo "<p>{$row["quantity"]}</p>";
                        echo "<div class='forms'>";

                            echo '<form action="includes/updateQ.php" method="post">';
                            echo '<input type="hidden" name="updatePrice" value="' .$_SESSION['origPrice'] .'">';
                            echo '<input type="number" name="quantity" min="1" max="99"value="' . $row['quantity'] . '" style="width: 40px;">';
                            echo '<button name="product_name" value="' . $row['product_name'] . '">Change Quantity</button>';
                            echo '</form>';

                            echo '<form action="includes/delete.php" method="post">';
                            echo '<button name="pname" value="' . $row['product_name'] . '">Delete</button>';
                            echo '</form>';

                        echo "</div>";


                    echo "</div>";

                    echo "<div class='box' id='box3'>";
                        echo "<p>{$row["price"]}.00</p>";
                    echo "</div>";

                echo "</div>";

            }

        }
        ?>
    </div>
    </div>

    <div class="tPrice">
        <form action="includes/checkout/checkout.php" method="post">
            <div class="price">
                <?php
                    echo "<p>Total Price:</p>";
                    echo "<p id='price'>{$_SESSION["total_Price"]}.00</p>";
                ?>
            </div>
        </form>
        <div class="butPrice">
                <button type="submit" id="openPopupBtn"><p>Pay Now</p></button>
            </div>
    </div>


    <div id="popup" class="popup">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <img src="Images/qr.png" alt="Popup Image">
        <form action="includes/checkout/checkout.php" method="post">
            <br>
            <label>Last 6 digits of GCASH ref no.</label><br>
            <input type="text" pattern=".{6,6}" required name="refno" style="width: 55px; font-family:'Times New Roman', Times, serif; font-size: 15px;">
            <button type="submit" style="font-family: 'Times New Roman', Times, serif; font-size: 15px; background-color: #093a1b; color: white;">Checkout</button>
        </form>
    </div>
    </div>

    <script>
        document.getElementById('openPopupBtn').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'flex';
        });

        document.querySelector('.close-btn').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            const popup = document.getElementById('popup');
            if (event.target === popup) {
            popup.style.display = 'none';
            }
        });
    </script>


    <div class="space" style="clear:both">
    </div>

</body>

    <footer>
    <div class="details">
            <div class="boxb" id="boxb1">
            </div>
            <div class="boxb" id="boxb2">
                <h1>About</h1> <br>
                <a href="info/about.php">About Us</a> <br>
                <a href="info/contact.php">Contact Us</a> <br>
                <a href="info/terms.php">Terms and Conditions</a> <br>
                <a href="info/privacy.php">Privacy Notice</a>
            </div>
            <div class="boxb" id="boxb3">
                <h1>Connect With Us</h1> <br>
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.x.com/"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </footer>

</html>