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
                    <a href="stores.php" id="link2"><i class="fa-solid fa-store"></i></a>
                    <div class="ddown-content">
                        <a href="#link1" id="l1">Breakfast <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                        <a href="#link2" id="l2">Lunch <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                        <a href="#link3" id="l3">Snacks <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
                        <a href="#link4" id="l4">Drinks <i class="fa-solid fa-angles-right" style="float: right;"></i></a>
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
            <table border="1">
                <thead>
                    <tr>
                        <th id="iname">ITEM NAME</th>
                        <th>QUANTITY</th>
                        <th>PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="grid-container">
            <p class="category">BREAKFAST</p>
            <div class="grid" id="grid1">
                <i class="gridbox">
                    <div class="desc">
                        <p>product name</p>
                        <p style="right: 0;">P100.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/1.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="image" value="images/breakfast/2.png">
                        <input type="hidden" name="products" value="hakdog">
                        <input type="hidden" name="price" value="100">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>product name</p>
                        <p style="right: 0;">P100.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/2.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="products" value="hakdog">
                        <input type="hidden" name="price" value="100">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>product name</p>
                        <p style="right: 0;">P100.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/3.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="products" value="hakdog">
                        <input type="hidden" name="price" value="100">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>product name</p>
                        <p style="right: 0;">P100.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/4.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="products" value="hakdog">
                        <input type="hidden" name="price" value="100">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>product name</p>
                        <p style="right: 0;">P100.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/5.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="products" value="hakdog">
                        <input type="hidden" name="price" value="100">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>product name</p>
                        <p style="right: 0;">P100.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/6.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="products" value="hakdog">
                        <input type="hidden" name="price" value="100">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>product name</p>
                        <p style="right: 0;">P100.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/7.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="products" value="hakdog">
                        <input type="hidden" name="price" value="100">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
                <i class="gridbox">
                    <div class="desc">
                        <p>product name</p>
                        <p style="right: 0;">P100.00</p>
                    </div>
                    <div class="foodpic">
                        <img src="images/breakfast/8.png" alt="">
                    </div>
                    <form action="includes/addItems.php" method="post" class="form">
                        <input type="hidden" name="products" value="hakdog">
                        <input type="hidden" name="price" value="100">
                        <input type="number" value="1" name="quantity" min="1" max="99">
                        <button type="submit">Add to Cart</button>
                    </form>
                </i>
            </div>
            <p class="category">LUNCH</p>
            <div class="grid" id="grid2">
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
            </div>
            <p class="category">SNACKS</p>
            <div class="grid" id="grid3">
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
            </div>
            <p class="category">DRINKS</p>
            <div class="grid" id="grid4">
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
                <i class="gridbox"></i>
            </div>
        </div>
    </main>

    <footer>
        <div class="details">
            <div class="det" id="det1"></div>
            <div class="det" id="det2">
                <a href="">About Us</a>
                <a href="">Contact Us</a>
                <a href="">Terms and Conditions</a>
                <a href="">Privacy Notice</a>
            </div>
            <div class="det" id="det3">
            </div>
        </div>
    </footer>


</body>

</html>