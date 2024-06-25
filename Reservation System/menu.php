<?php
session_start();
require_once "includes/dbh.inc.php";
require "includes/cart.model.php";
listItems($pdo, $_SESSION["userId"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <script src="https://kit.fontawesome.com/0c3ddd4ac2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/navbot.css">
    <link rel="stylesheet" href="css/prod.css">
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
        <div class="cwb">
            <div class="cart">
                <?php
                if (empty($_SESSION["result"])) {
                    echo "<div class='empty'>Your cart is empty</div>";
                } else { ?>
                    <table border="1">
                        <thead>
                            <tr>
                                <th id="iname">ITEM NAME</th>
                                <th>QUANTITY</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($_SESSION["result"] as $row) {
                            echo "<tr>";
                            echo "<td id='name'>" . $row['product_name'] . "</td>";
                            echo "<td id='quantity'>" . $row['quantity'];
                            echo "<td id='price'>" . $row['price'] . "</td>";
                            echo "</tr>";
                        }
                    } ?>
                        </tbody>
                    </table>
            </div>
            <button id="cout"><a href="cart.php">Manage Cart</a></button>
        </div>
        <div class="grid-container">
            <p class="category" id="breakfast">BREAKFAST</p>
            <div class="grid" id="grid1">
                <i class="gridbox">
                    <div class="desc">
                        <p>Tapsilog</p>
                        <p style="right: 0;">P40.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/1.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/breakfast/1.png">
                        <input type="hidden" name="products" value="Tapsilog">
                        <input type="hidden" name="price" value="40">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Hotsilog</p>
                        <p style="right: 0;">P40.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/2.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/breakfast/2.png">
                        <input type="hidden" name="products" value="Hotsilog">
                        <input type="hidden" name="price" value="40">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Longsilog</p>
                        <p style="right: 0;">P40.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/3.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/breakfast/3.png">
                        <input type="hidden" name="products" value="Longsilog">
                        <input type="hidden" name="price" value="40">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Tosilog</p>
                        <p style="right: 0;">P40.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/4.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/breakfast/4.png">
                        <input type="hidden" name="products" value="Tosilog">
                        <input type="hidden" name="price" value="40">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Pansit Palabok</p>
                        <p style="right: 0;">P25.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/5.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/breakfast/5.png">
                        <input type="hidden" name="products" value="Pansit Palabok">
                        <input type="hidden" name="price" value="25">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Spaghetti</p>
                        <p style="right: 0;">P25.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/6.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/breakfast/6.png">
                        <input type="hidden" name="products" value="Spaghetti">
                        <input type="hidden" name="price" value="25">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Carbonara</p>
                        <p style="right: 0;">P25.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/7.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/breakfast/7.png">
                        <input type="hidden" name="products" value="Carbonara">
                        <input type="hidden" name="price" value="25">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Pansit Bihon</p>
                        <p style="right: 0;">P25.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/8.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/breakfast/8.png">
                        <input type="hidden" name="products" value="Pansit Bihon">
                        <input type="hidden" name="price" value="25">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
            </div>
            <p class="category" id="lunch">LUNCH</p>
            <div class="grid" id="grid2">
                <i class="gridbox">
                    <div class="desc">
                        <p>Sisig Meal</p>
                        <p style="right: 0;">P40.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/noon/1.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/noon/1.png">
                        <input type="hidden" name="products" value="Sisig Meal">
                        <input type="hidden" name="price" value="40">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>F. Chicken Meal</p>
                        <p style="right: 0;">P45.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/noon/2.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/noon/2.png">
                        <input type="hidden" name="products" value="F. Chicken Meal">
                        <input type="hidden" name="price" value="45">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Adobo Meal</p>
                        <p style="right: 0;">P50.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/noon/3.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/noon/3.png">
                        <input type="hidden" name="products" value="Adobo Meal">
                        <input type="hidden" name="price" value="50">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Giniling Meal</p>
                        <p style="right: 0;">P55.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/noon/4.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/noon/4.png">
                        <input type="hidden" name="products" value="Giniling Meal">
                        <input type="hidden" name="price" value="55">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Menudo Meal</p>
                        <p style="right: 0;">P55.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/noon/5.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/noon/5.png">
                        <input type="hidden" name="products" value="Menudo Meal">
                        <input type="hidden" name="price" value="55">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Igado Meal</p>
                        <p style="right: 0;">P50.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/noon/6.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/noon/6.png">
                        <input type="hidden" name="products" value="Igado Meal">
                        <input type="hidden" name="price" value="50">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>C. Curry Meal</p>
                        <p style="right: 0;">P55.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/noon/7.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/noon/7.png">
                        <input type="hidden" name="products" value="C. Curry Meal">
                        <input type="hidden" name="price" value="55">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Pakbet Meal</p>
                        <p style="right: 0;">P40.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/noon/8.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/noon/8.png">
                        <input type="hidden" name="products" value="Pakbet Meal">
                        <input type="hidden" name="price" value="40">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
            </div>
            <p class="category" id="snacks">SNACKS</p>
            <div class="grid" id="grid3">
                <i class="gridbox">
                    <div class="desc">
                        <p>Turon</p>
                        <p style="right: 0;">P15.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/snacks/1.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/snacks/1.png">
                        <input type="hidden" name="products" value="Turon">
                        <input type="hidden" name="price" value="15">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Green Mango</p>
                        <p style="right: 0;">P10.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/snacks/2.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/snacks/2.png">
                        <input type="hidden" name="products" value="Green Mango">
                        <input type="hidden" name="price" value="10">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Suman</p>
                        <p style="right: 0;">P15.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/snacks/3.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/snacks/3.png">
                        <input type="hidden" name="products" value="Suman">
                        <input type="hidden" name="price" value="15">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Empananda</p>
                        <p style="right: 0;">P25.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/snacks/4.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/snacks/4.png">
                        <input type="hidden" name="products" value="Empananda">
                        <input type="hidden" name="price" value="25">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Siomai</p>
                        <p style="right: 0;">P10.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/snacks/5.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/snacks/5.png">
                        <input type="hidden" name="products" value="Siomai">
                        <input type="hidden" name="price" value="10">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Takoyaki</p>
                        <p style="right: 0;">P30.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/snacks/6.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/snacks/6.png">
                        <input type="hidden" name="products" value="Takoyaki">
                        <input type="hidden" name="price" value="30">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Burger Fries</p>
                        <p style="right: 0;">P50.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/snacks/7.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/snacks/7.png">
                        <input type="hidden" name="products" value="Burger Fries">
                        <input type="hidden" name="price" value="50">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Bilo Bilo</p>
                        <p style="right: 0;">P25.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/snacks/8.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/snacks/8.png">
                        <input type="hidden" name="products" value="Bilo Bilo">
                        <input type="hidden" name="price" value="25">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
            </div>
            <p class="category" id="drinks">DRINKS</p>
            <div class="grid" id="grid4">
                <i class="gridbox">
                    <div class="desc">
                        <p>Hot Coffee</p>
                        <p style="right: 0;">P5.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/drinks/1.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/drinks/1.png">
                        <input type="hidden" name="products" value="Hot Coffee">
                        <input type="hidden" name="price" value="5">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Bottled Water</p>
                        <p style="right: 0;">P10.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/drinks/2.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/drinks/2.png">
                        <input type="hidden" name="products" value="Bottled Water">
                        <input type="hidden" name="price" value="10">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Orange Juice</p>
                        <p style="right: 0;">P10.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/drinks/3.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/drinks/3.png">
                        <input type="hidden" name="products" value="Orange Juice">
                        <input type="hidden" name="price" value="10">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Milk Tea</p>
                        <p style="right: 0;">P40.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/drinks/4.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/drinks/4.png">
                        <input type="hidden" name="products" value="Milk Tea">
                        <input type="hidden" name="price" value="40">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>C2</p>
                        <p style="right: 0;">P20.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/drinks/5.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/drinks/5.png">
                        <input type="hidden" name="products" value="C2">
                        <input type="hidden" name="price" value="20">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Sting</p>
                        <p style="right: 0;">P20.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/drinks/6.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/drinks/6.png">
                        <input type="hidden" name="products" value="Sting">
                        <input type="hidden" name="price" value="20">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Coke</p>
                        <p style="right: 0;">P25.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/drinks/7.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/drinks/7.png">
                        <input type="hidden" name="products" value="Coke">
                        <input type="hidden" name="price" value="25">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>Mountain Dew</p>
                        <p style="right: 0;">P25.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/drinks/8.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/drinks/8.png">
                        <input type="hidden" name="products" value="Mountain Dew">
                        <input type="hidden" name="price" value="25">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
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