<?php
session_start();
require('../conn.php');

if (isset($_POST['procced_to_authrize'])) {
    $user_id = $_SESSION['uid'];
    $product_id = $_POST['product_id'];
    $qty = $_POST['user_qty'];
    $total_price = $_POST['user_product_price'];
    $card_number = $_POST['card-number'];

    $sql = "INSERT INTO `orders`( `user_id`, `product_id`, `qty`, `total_price`, `card_number`) VALUES ('$user_id','$product_id','$qty','$total_price','$card_number')";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo "something went wrong try again !";
    } else {
        header('Location:../pay/index.php');
    }
}


?>