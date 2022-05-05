<?php include 'includes/header.php';?>

<div class= "container">
    <div id = "landing_logo_header">
        <img src="includes/resources/img/clarEX.png" alt="logo.png" id= "company_logo">
    </div>
    <form class="sign_in_form" method="post" action=" <?php echo $_SERVER['PHP_SELF']?>">
        <div class = "sign_elements">
            <div id = sign_header>welcome, login to your account</div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="login_email">
            <label for="login_password">Password:</label>
            <input type="password" name="login_password" id="login_password">
            <input type="button" value="login" id = "btn_login">
            <div id = "already_have">
                <a href="signup.php">New user? Sign up</a>   
                <a id="forgot_password" href="#">Forgot password?</a>   
            </div>
        </div> 
       

    </form>
</div>


<?php include 'includes/footer.php';?>