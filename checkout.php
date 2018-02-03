<?php

session_start();
require('conn.php');


if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}


if (isset($_GET['updateid'])) {

    $user_id = $_POST['product_user_id'];
    $user_product_title = $_POST['product_title'];
    $user_product_image = $_POST['product_user_image'];
    $user_qty = $_POST['added_qty'];
    $user_product_id = $_POST['product_id'];
    $user_product_price = $_POST['product_price'];
    $user_total_price = $user_qty * $user_product_price;
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

    </div>

    <!-- This is section 2 of the page -->
    <div class="section2">
        <input type="text" placeholder="search" class="txtsrch"/>
        <button type="button" class="btnsrch">Search</button>

        <img src="Images/if_call_322424.png" class="call-icon"/>
        <span class="tel-no">880-1751-701-100</span>


        <nav>
            <a href="profile.php" class="menuitem">Home</a>
            <a href="cart.php" class="menuitem">Carts</a>
            <a href="items.php" class="menuitem">Items</a>
            <a href="logout.php" class="menuitem">Log out</a>
            <?php
            $user = 'admin';

            $role = $_SESSION['role'];
            if ($role == $user) {
                echo '<a href="admin/index.php"class="menuitem">Admin home</a>';
            }
            ?>
        </nav>
        <div class="cartform">
            <table class="cartform-table">

                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Product Price</th>
                    <th>Total</th>
                    <th>Account number</th>
                    <th>Card Expire date</th>
                    <th>Pay By Authorize.net</th>
                </tr>

                <form action="admin/orders_store.php" method="POST">
                    <?php


                    echo '<tr>
					    <td class="table-td-img">
							<img class="table-img" src="admin/uploads/' . $user_product_image . '" />
					    </td>
					    <td>' . $user_product_title . '</td>
					    <td>
							' . $user_qty . '
					    </td>
							
					    <td>$' . $user_product_price . '</td>
					    <td>$' . $user_total_price . '</td>
					    <td>
							<input type="number" name="card-number" required>
					    </td>
					    <td>
					    	Do not run on mozilla IE!<br>
							<input type="month" name="card-date" required>
					    </td>
						<td>

							<input type="hidden" name="product_id" value="' . $user_product_id . '">
							<input type="hidden" name="user_qty"  value="' . $user_qty . '">
							<input type="hidden" name="user_product_price"  
									value="' . $user_product_price . '">

							<button name="procced_to_authrize" type="submit" class="btn">Proceed</button>
							
						</td>
					  </tr>';

                    ?>
                </form>
            </table>

        </div>
    </div>
</section>
    <?php

}
include 'footer.php';
?>