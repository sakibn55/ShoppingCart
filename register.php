<?php
session_start();
include "conn.php";
if (isset($_POST['add_user'])) {

    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $mobile = $_POST['mobile'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];

    if (empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
        empty($mobile) || empty($address1) || empty($address2)) {

        echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
				</div>
			";
        exit();
    } else {
        if ($password != $repassword) {
            echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>password is not same</b>
					</div>
				";

            exit();

        }

        //existing email address in our database
        $sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
        $check_query = mysqli_query($con, $sql);
        $count_email = mysqli_num_rows($check_query);

        if ($count_email > 0) {
            echo "
						<div class='alert alert-danger'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Email Address is already available Try Another email address</b>
						</div>
					";
            exit();

            header("Refresh: 3; url=login.php");
            echo "You will be redirected to Google in 3 seconds...";
        } else {
            $role = 'user';
            $password = md5($password);
            $sql = "INSERT INTO `user_info` 
					(`first_name`, `last_name`, `email`, 
					`password`, `mobile`, `address1`, `address2`,`role`) 
					VALUES ('$f_name', '$l_name', '$email', 
					'$password', '$mobile', '$address1', '$address2','$role')";


            if (mysqli_query($con, $sql)) {
                echo "register_success";
                $_SESSION["name"] = $f_name;
                header("Location:login_form.php");
                exit();
            } else {
                echo 'something wrong with the database';
            }
        }
    }

}


?>
