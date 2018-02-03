<?php
include "conn.php";

session_start();

#Login script is begin here
#If user given credential matches successfully with the data available in database then we will echo string login_success
#login_success string will go back to called Anonymous funtion $("#login").click() 
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $password = md5($_POST["password"]);
    $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
    $run_query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run_query);
    //if user record is available in database then $count will be equal to 1
    if ($count == 1) {
        $row = mysqli_fetch_array($run_query);
        $_SESSION["uid"] = $row["user_id"];
        $_SESSION['role'] = $row['role'];
        $_SESSION["name"] = $row["first_name"];

        $user = 'user';

        $role = $_SESSION['role'];
        if ($role == $user) {
            header("location:profile.php");
        } else {
            header('Location:admin/index.php');
        }
    } else {

        echo "  <span style='color:red;'> check password and email  
						<a href='login_form.php'>again..
						</a>!
					</span> <br>";

        echo "  <span style='color:red;'>If you dont have account Please register before 
						<a href='login_form.php#toregister'>Login..
						</a>!
					</span> ";


        exit();
    }

}

?>