<?php
require('../conn.php');
session_start();
$user = 'user';

$role = $_SESSION['role'];
if ($role == $user) {
    header("location:../index.php");
} else {


    $sql = 'select * from categories';


    $run_query = mysqli_query($con, $sql);

    $sql2 = 'select * from brands';

    $run_query2 = mysqli_query($con, $sql2);

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
        <a href="../index.php"><img src="../Images/Website_Logo.png" class="logo"/></a>


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
            <h1>Add new Product</h1>
            <form action="add_items.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend><span class="number">1</span> Items Info</legend>
                    <input required type="text" name="p-name" placeholder="Product Title *">
                    <input required type="number" name="p-price" placeholder="Product Price *">
                    <textarea required name="p-desc" placeholder="Product Description"></textarea>
                    <label for="cat">Categories:</label>
                    <select required id="job" name="p-cat">
                        <optgroup label="Indoors">
                            <?php
                            while ($row = mysqli_fetch_array($run_query)) {
                                echo '<option value="' . $row['cat_id'] . '">' . $row['cat_title'] . '</option>';
                            }
                            ?>
                        </optgroup>
                    </select>
                    <label for="brand">Brands:</label>
                    <select id="job" name="p-brand">
                        <optgroup label="Indoors">
                            <?php
                            while ($row2 = mysqli_fetch_array($run_query2)) {
                                echo '<option value="' . $row2['brand_id'] . '">' . $row2['brand_title'] . '</option>';
                            }
                            ?>
                        </optgroup>
                    </select>

                </fieldset>

                <fieldset>
                    <legend><span class="number">2</span> Additional Info</legend>
                    <br>
                    <label for="file">Upload Image</label><input type="file" name="imagefileup" required placeholder=""><br><br>
                    <textarea name="p-key" placeholder="Product Keyword"></textarea>
                </fieldset>
                <input type="submit" name="add_items" value="Apply"/>
            </form>
        </div>
    </div><!---/section2-->


</section>

    <?php
    include('../footer.php');


}

?>