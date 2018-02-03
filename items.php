<?php
session_start();
require('conn.php');

$sql = 'select * from categories';


$run_query = mysqli_query($con, $sql);

$sql2 = 'select * from brands';

$run_query2 = mysqli_query($con, $sql2);


if (!isset($_SESSION["uid"])) {
    $_SESSION['role'] = 'guest';
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Online shopping</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="css/main.css">
        <script src="Js/jquery-3.2.1.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster+Two|Pacifico');
        </style>
    </head>
<body>
<section>
    <div class="section1">
        <a href="index.php"><img src="Images/Website_Logo.png" class="logo"/></a>
        <div class="navigation">
            <img src="Images/if_List_Text_Menu_Numbers_String_Burger_1329080.png" class="toggle"/>
            <a class="cgr">Categories</a>
        </div>
        <div>
            <?php
            while ($row = mysqli_fetch_array($run_query)) {
                $cid = $row["cat_id"];
                $cat_name = $row["cat_title"];
                echo "<a href='#' class='submenu category' cid='$cid'>$cat_name</a>";
            }
            ?>

        </div>

        <div class="navigation">
            <img src="Images/if_List_Text_Menu_Numbers_String_Burger_1329080.png" class="toggle"/>
            <a class="cgr">Brands</a>
        </div>
        <div>
            <?php
            while ($row2 = mysqli_fetch_array($run_query2)) {
                $bid = $row2["brand_id"];
                $brand_name = $row2["brand_title"];
                echo "
                            <a href='#' class='submenu selectBrand' bid='$bid'>$brand_name</a>
                        ";
            }
            ?>

        </div>
    </div>

    <!-- This is section 2 of the page -->
    <div class="section2">
        <input type="text" placeholder="search" class="txtsrch"/>
        <button type="button" class="btnsrch">Search</button>

        <img src="Images/if_call_322424.png" class="call-icon"/>
        <span class="tel-no">800-8600-9662</span>


        <nav>
            <a href="profile.php" class="menuitem">Home</a>
            <a href="cart.php" class="menuitem">Carts</a>
            <a href="items.php" class="menuitem">Items</a>

            <?php

            if (isset($_SESSION["uid"])) {
                echo "<a href='logout.php' class='menuitem'>Log out</a>";
            } else {
                echo "<a href='login_form.php' class='menuitem'>Log In</a>";
            }

            $user = 'admin';

            $role = $_SESSION['role'];
            if ($role == $user) {
                echo '<a href="admin/index.php"class="menuitem">Admin home</a>';
            }
            ?>
        </nav>


        <p class="featuredpara">All items</p><br>
        <div class="wait overlay">

        </div>

        <div id="product_msg">

        </div>
        <div class="products" id="get_product">

            <!-- Getting products via Ajax  -->

        </div>
        <div class="products" id="get_brand">

            <!-- Getting products via Ajax  -->

        </div>


    </div>
</section>



<?php
include 'footer.php';
?>