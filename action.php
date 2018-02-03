<?php
session_start();
include "conn.php";

if (isset($_POST["getProduct"])) {

    $product_query = "SELECT * FROM products ORDER BY product_id DESC ";

    $run_query = mysqli_query($con, $product_query);

    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $pro_id = $row['product_id'];
            $pro_cat = $row['product_cat'];
            $pro_brand = $row['product_brand'];
            $pro_title = $row['product_title'];
            $pro_price = $row['product_price'];
            $pro_image = $row['product_image'];
            $pro_desc = $row['product_desc'];
            echo "
				<div class='col1'>
                    <legend>$pro_title</legend>
                    <img src='admin/uploads/$pro_image' class='img1' />
                    <h3>$.$pro_price.00</h3>
                    <p>$pro_desc</p>
                    <button class='btn' pid='$pro_id' id='product'>
                        <a href='#'>Add to Cart</a>
                    </button>
                </div>
			";
        }
    }
}

if (isset($_POST["get_seleted_Category"])) {
    $id = $_POST["cat_id"];
    $sql = "SELECT * FROM products WHERE product_cat = '$id'";

    $run_query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($run_query)) {
        $pro_id = $row['product_id'];
        $pro_cat = $row['product_cat'];
        $pro_brand = $row['product_brand'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        $pro_image = $row['product_image'];
        $pro_desc = $row['product_desc'];
        echo "
				<div class='col1'>
                    <legend>$pro_title</legend>
                    <img src='admin/uploads/$pro_image' class='img1' />
                    <h3><strike>$.$pro_price.00</strike></h3>
                    <p>$pro_desc</p>
                    <button class='btn' pid='$pro_id' id='product'>
                        <a href='#'>Add to Cart</a>
                    </button>
                </div>
				
			";
    }
}

if (isset($_POST["selectBrand"])) {
    $id = $_POST["brand_id"];
    $sql = "SELECT * FROM products WHERE product_brand = '$id'";

    $run_query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($run_query)) {
        $pro_id = $row['product_id'];
        $pro_cat = $row['product_cat'];
        $pro_brand = $row['product_brand'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        $pro_image = $row['product_image'];
        $pro_desc = $row['product_desc'];
        echo "
				<div class='col1'>
                    <legend>$pro_title</legend>
                    <img src='admin/uploads/$pro_image' class='img1' />
                    <h3><strike>$.$pro_price.00</strike></h3>
                    <p>$pro_desc</p>
                    <button class='btn' pid='$pro_id' id='product'>
                        <a href='#'>Add to Cart</a>
                    </button>
                </div>
				
			";
    }
}


//Add to cart

if (isset($_POST["addToCart"])) {


    $p_id = $_POST["proId"];


    if (isset($_SESSION["uid"])) {

        $user_id = $_SESSION["uid"];

        $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
        $run_query = mysqli_query($con, $sql);
        $count = mysqli_num_rows($run_query);
        if ($count > 0) {
            echo "
					<div class='alert-danger'>
						<b>Product is already added into the cart ..!</b>
					</div>
				";
        } else {
            $sql = "INSERT INTO `cart`
				(`p_id`, `user_id`, `qty`) 
				VALUES ('$p_id','$user_id','1')";
            if (mysqli_query($con, $sql)) {
                echo "
						<div class='alert-success'>
							<b>Product is Added..!</b>
						</div>
					";
            }
        }
    } else {
        echo "
					<div class='alert-danger'>
						<b>Please sign in to add into the cart ..!</b>
					</div>
				";
    }

}

//Remove Item From cart
if (isset($_GET["deleteid"])) {
    $remove_id = $_GET["deleteid"];
    if (isset($_SESSION["uid"])) {
        $sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
    }
    if (mysqli_query($con, $sql)) {
        header('Location:cart.php');
        exit();
    }
}

?>