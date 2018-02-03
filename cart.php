<?php

session_start();
require('conn.php');

if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}

$user_id = $_SESSION["uid"];
$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
$run_query = mysqli_query($con, $sql);

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
                    <th>Update Total</th>
                    <th>Delete</th>
                </tr>


                <?php

                while ($row = mysqli_fetch_array($run_query)) {

                $product_id = $row["product_id"];
                $product_title = $row["product_title"];
                $product_price = $row["product_price"];
                $product_image = $row["product_image"];
                $cart_item_id = $row["id"];
                $qty = $row["qty"];
                ?>

                <form method="POST" action="checkout.php?updateid=<?php echo $product_id; ?>">


                    <?php
                    echo '
				
	  				<tr>
					    <td class="table-td-img">
							<img class="table-img" src="admin/uploads/' . $product_image . '" />
					    </td>
					    <td>' . $product_title . '</td>
					    <td>
							<input type="number" name="added_qty"  value=' . $qty . '>
					    </td>
						

						<input type="hidden" name="product_title" value=' . $product_title . '>
						<input type="hidden" name="product_user_image" value=' . $product_image . '>
						<input type="hidden" name="product_user_id" value=' . $_SESSION["uid"] . '>
						<input type="hidden" name="product_id" value=' . $product_id . '>
					    <input type="hidden" name="product_price" value=' . $product_price . '>


					    <td>$' . $product_price . '</td>
					    <td>$' . $product_price . '</td>
						<td>
							<button name="cartApply" type="submit" class="btn">
								 
									Update/Proceed
							
							</button>
							
						</td>

						<td>
			
							<a href="action.php?deleteid=' . $product_id . '">
                    			Delete
                			</a>

                		</td>
					  </tr>

					  </form>';
                    }

                    ?>

            </table>

        </div>

        </form>
        </table>
    </div>
    </div>
</section>
<?php

include 'footer.php';

?>