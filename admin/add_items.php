<?php
require('../conn.php');

if (isset($_POST['add_items'])) {

    $p_name = $_POST['p-name'];
    $p_price = $_POST['p-price'];
    $p_desc = $_POST['p-desc'];
    $p_cat = $_POST['p-cat'];
    $p_brand = $_POST['p-brand'];

    $p_key = $_POST['p-key'];


    $targetdir = 'uploads/';

    $filename = $_FILES['imagefileup']['name'];
    echo $filename;
    $filesize = $_FILES['imagefileup']['size'];
    $filetype = $_FILES['imagefileup']['type'];
    $filetmpname = $_FILES['imagefileup']['tmp_name'];

    if ($filesize > 500000) {
        echo "file size doesn't match";
    } /*else if(($filetype !='image/gif')||($filetype !='image/png')||($filetype !='image/jpg')
                ||($filetype !='image/jpeg')){
                    echo"File type doesn't match";
                }*/
    else if (file_exists($targetdir . $filename)) {
        echo " allready exists is the directory same name file";
    } else {
        $savedir = move_uploaded_file($filetmpname, $targetdir . $filename);
        if ($savedir == true) {
            echo "File uploaded successfully <br>";
        } else {
            echo " Upload not success <br>";
        }
    }

    $sql = "INSERT INTO `products` 
					(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`)
					VALUES ('$p_cat', '$p_brand', '$p_name', 
					'$p_price', '$p_desc', '$filename', '$p_key')";


    //Run query to send database

    if (mysqli_query($con, $sql)) {

        echo "<br>File succesfully saved to database";
        header('Location:../items.php');

    }
}
?>