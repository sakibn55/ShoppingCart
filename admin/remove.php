<?php
session_start();
require '../conn.php';


if (isset($_GET["removeOrder"])) {
    $remove_id = $_GET["removeOrder"];
    if (isset($_SESSION["uid"])) {
        $sql = "DELETE FROM orders WHERE order_id = '$remove_id'";
    }
    if (mysqli_query($con, $sql)) {
        header('Location:orders.php');
        exit();
    }
}


