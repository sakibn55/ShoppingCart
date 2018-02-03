<?php
require('../conn.php');
session_start();
$user = 'user';

$role = $_SESSION['role'];
if ($role == $user) {
    header("location:../index.php");
} else {


    $sql = "SELECT * from user_info join orders,products WHERE user_info.user_id=orders.user_id AND orders.product_id=products.product_id ORDER BY order_id DESC";
    $result = mysqli_query($con, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../Js/jquery-3.2.1.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster+Two|Pacifico');
    </style>
</head>
<body>
<section>
    <div class="section1">
        <img src="../Images/Website_Logo.png" class="logo"/>


    </div>

    <!-- This is section 2 of the page -->
    <div class="section2">
        <input type="text" placeholder="search" class="txtsrch"/>
        <button type="button" class="btnsrch">Search</button>

        <img src="../Images/if_call_322424.png" class="call-icon"/>
        <span class="tel-no">800-8600-9662</span>


        <nav>
            <a href="index.php" class="menuitem">Admin Home</a>
            <a href="../index.php" class="menuitem">User home</a>
            <a href="orders.php" class="menuitem">All orders</a>
            <a href="../items.php" class="menuitem">All items</a>
            <a href="../logout.php" class="menuitem">Logout</a>
        </nav>

        <div class="form-style">
            <h1>Customers Orders</h1><br>

            <table class="rwd-table">
                <tr>
                    <th>User Name</th>
                    <th>Email:</th>
                    <th>Product Name:</th>
                    <th>Price:</th>
                    <th>Quantity:</th>
                    <th>Check mail:</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo '<tr>
                                    <td data-th="User Name">' . $row["first_name"] . '&nbsp' . $row["last_name"] . '</td>
                                    <td data-th="Email">' . $row["email"] . '</td>
                                    <td data-th="Product Name">' . $row["product_title"] . '</td>
                                    <td data-th="Price">' . $row["product_price"] . '</td>
                                    <td data-th="Quantity">' . $row["qty"] . '</td>
                                    <td data-th="Check mail">Check email for cofirmation</td>
                                    <td><a href="remove.php?removeOrder=' . $row["order_id"] . '">Remove</a> </td>
                                    
                                    
                                  </tr>';
                }

                ?>
            </table>
        </div>
    </div><!---/section2-->


</section>
<?php
include('../footer.php');
?>
        