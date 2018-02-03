<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css"/>
</head>
<body>
<div class="container">
    <section>
        <div id="container_demo">
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form action="login.php" method="post" autocomplete="on">
                        <h1>Log in</h1>
                        <p>
                            <label for="email" class="uname" data-icon="u"> Your email </label>
                            <input id="email" name="email" required="required" type="email"
                                   placeholder=" mymail@mail.com"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                            <input id="password" name="password" required="required" type="password"
                                   placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping"/>
                            <label for="loginkeeping">Keep me logged in</label>
                        </p>
                        <p class="login button">
                            <input type="submit" name="login" value="Login"/>
                        </p>
                        <p class="change_link">
                            Not a member yet ?
                            <a href="#toregister" class="to_register">Join us</a>
                        </p>
                    </form>
                </div>

                <div id="register" class="animate form">
                    <form action="register.php" method="post">
                        <h1> Sign up </h1>
                        <p>
                            <label for="usernamesignup" class="uname" data-icon="u">Your Firstname</label>
                            <input id="usernamesignup" name="f_name" required="required" type="text"
                                   placeholder="Your first name here"/>
                        </p>
                        <p>
                            <label for="usernamesignup" class="uname" data-icon="u">Your Lastname</label>
                            <input id="usernamesignup" name="l_name" required="required" type="text"
                                   placeholder="Your last name here"/>
                        </p>
                        <p>
                            <label for="emailsignup" class="youmail" data-icon="e"> Your email</label>
                            <input id="emailsignup" name="email" required="required" type="email"
                                   placeholder="Your email here"/>
                        </p>

                        <p>
                            <label for="Number" class="uname" data-icon="u">Your Mobile Number</label>
                            <input id="Number" name="mobile" required="required" type="text"
                                   placeholder="Your phone number"/>
                        </p>

                        <p>

                            <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                            <input id="passwordsignup" name="password" required="required" type="password"
                                   placeholder="eg. X8df!90EO"/>
                        </p>
                        <p>
                            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your
                                password </label>
                            <input id="passwordsignup_confirm" name="repassword" required="required" type="password"
                                   placeholder="eg. X8df!90EO"/>
                        </p>
                        <p>
                            <label for="adress" class="uname" data-icon="u">Adress Line 1</label>
                            <input id="adress" name="address1" required="required" type="text"
                                   placeholder="Your adress here"/>
                        </p>
                        <p>
                            <label for="adress" class="uname" data-icon="u">Adress Line 2</label>
                            <input id="adress" name="address2" required="required" type="text"
                                   placeholder="Your adress here"/>
                        </p>
                        <p class="signin button">
                            <input type="submit" name="add_user" value="Sign up"/>
                        </p>
                        <p class="change_link">
                            Already a member ?
                            <a href="#tologin" class="to_register"> Go and log in </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
</body>
</html>